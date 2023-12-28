<?php

class Products extends Controller
{

    public function index()
    {
        // $data['products'] = $this->model('Product_model')->getAllProduct();
        // $data['categorys'] = $this->model('Category_model')->getAllCategory();
        // $this->view('templates/header');
        // $this->view('templates/home_header');
        // $this->view('products/index', $data);
        // $this->view('templates/home_footer');
        // $this->view('templates/footer');
        header('location: ' . BASEURL . '/products/halaman/1');
    }

    public function halaman($halaman = 1)
    {
        $jumlah_data_perhalaman = isset($_SESSION['jumlah_data_perhalaman']) ? $_SESSION['jumlah_data_perhalaman'] : 2;
        $jumlah_data = count($this->model('Product_model')->getAllProduct());
        $jumlah_halaman = ceil($jumlah_data / $jumlah_data_perhalaman);
        $awal_data = ($jumlah_data_perhalaman * $halaman) - $jumlah_data_perhalaman;

        $data['products'] = $this->model('Product_model')->getAllProductByLimit("$awal_data, $jumlah_data_perhalaman");
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
}
