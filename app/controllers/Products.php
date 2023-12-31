<?php

class Products extends Controller
{

    public function index()
    {
        header('location: ' . BASEURL . '/products/halaman/1');
    }

    public function halaman($halaman = 1)
    {

        $jumlah_data_perhalaman = isset($_SESSION['jumlah_data_perhalaman']) ? $_SESSION['jumlah_data_perhalaman'] : 10;
        $jumlah_data = count($this->model('Product_model')->getAllProduct());
        $jumlah_halaman = ceil($jumlah_data / $jumlah_data_perhalaman);
        $awal_data = ($jumlah_data_perhalaman * $halaman) - $jumlah_data_perhalaman;

        $data['cari'] = isset($_SESSION['cari']) ? $_SESSION['cari'] : '';
        if ($data['cari'] != '') {
            unset($_SESSION['filter_kategori']);
        }
        if (isset($_SESSION['filter_kategori']) && $data['cari'] == '') {
            $data['products'] = $this->model('Product_model')->getAllProductByLimitAndLike($jumlah_data_perhalaman, 'category.id_category', $_SESSION['filter_kategori']);
            $data['filter_kategori'] = $_SESSION['filter_kategori'];
            $data['cari'] = '';
        } else {
            $data['products'] = $this->model('Product_model')->getAllProductByLimitAndLike("$awal_data, $jumlah_data_perhalaman", 'name',  $data['cari']);
        }

        $data['categorys'] = $this->model('Category_model')->getAllCategory();
        $data['jumlah_halaman'] = $jumlah_halaman;
        $data['halaman'] = $halaman;
        $data['jumlah_data_perhalaman'] = $jumlah_data_perhalaman;
        $data['jumlah_data'] = $jumlah_data;
        $data['awal_data'] = $awal_data;
        $this->view('templates/header');
        $this->view('templates/home_header');
        $this->view('products/index', $data);
        $this->view('templates/home_footer');
        $this->view('templates/footer');
    }


    public function detail($id)
    {
        $data['product'] = $this->model('Product_model')->getProductById($id);
        if (!$data['product']) {
            $this->view('templates/header');
            $this->view('templates/notfound');
            exit;
        }
        $this->view('templates/header');
        $this->view('templates/home_header');
        $this->view('products/detail', $data);
        $this->view('templates/home_footer');
        $this->view('templates/footer');
    }

    public function ubahJumlahDataPerhalaman()
    {
        $_SESSION['jumlah_data_perhalaman'] = $_POST['jumlah_data_perhalaman'];
    }

    public function ubahCari()
    {
        $_SESSION['cari'] = $_POST['cari'];
    }

    public function ubahFilterKategori()
    {
        $_SESSION['filter_kategori'] = $_POST['filter_kategori'];
    }
}
