<?php

class Dashboard extends Controller
{

    public function index()
    {
        $data['username'] = $_SESSION['username'];
        $data['title'] = "Dashboard";
        $data['products'] = $this->model('Product_model')->getAllProduct();
        $data['categorys'] = $this->model('Category_model')->getAllCountCategory();
        $data['best_seller'] = $this->model('BestSeller_model')->getAllBestSeller();
        $data['testimoni'] = $this->model('Testimoni_model')->getAllTestimoni();

        $this->view('templates/header', $data);
        $this->view('templates/dashboard_header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

    public function products()
    {
        $data['username'] = $_SESSION['username'];
        $data['title'] = "Dashboard";
        $data['products'] = $this->model('Product_model')->getAllProduct();
        $data['categorys'] = $this->model('Category_model')->getAllCategory();
        $this->view('templates/header', $data);
        $this->view('templates/dashboard_header', $data);
        $this->view('dashboard/products', $data);
        $this->view('templates/footer');
    }

    public function tambah_product()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            $image = Upload::uploadImage('produk');

            $data = [
                'name' => $name,
                'category' => $category,
                'price' => $price,
                'description' => $description,
                'image' => $image
            ];

            if ($image) {
                if ($this->model('Product_model')->tambahProduct($data) > 0) {
                    Flasher::setFlash('data product berhasil', 'ditambahkan', 'success');
                    header('Location: ' . BASEURL . '/dashboard/products');
                    exit;
                } else {
                    Flasher::setFlash('data product gagal', 'ditambahkan', 'error');
                    header('Location: ' . BASEURL . '/dashboard/products');
                    exit;
                }
            }
        }
    }

    public function hapus_product($id)
    {
        if ($this->model('Product_model')->hapusProduct($id) > 0) {
            Flasher::setFlash('data product berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/dashboard/products');
            exit;
        } else {
            Flasher::setFlash('data product gagal', 'dihapus', 'error');
            header('Location: ' . BASEURL . '/dashboard/products');
            exit;
        }
    }

    public function best_seller()
    {
        $data['username'] = $_SESSION['username'];
        $data['title'] = "Best Seller";
        $data['products'] = $this->model('Product_model')->getAllProduct();
        $data['best_seller'] = $this->model('BestSeller_model')->getAllBestSeller();


        $this->view('templates/header', $data);
        $this->view('templates/dashboard_header', $data);
        $this->view('dashboard/best_seller', $data);
        $this->view('templates/footer');
    }

    public function tambah_best_seller()
    {
        if ($this->model('BestSeller_model')->tambahBestSeller($_POST) > 0) {
            Flasher::setFlash('data best seller berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/dashboard/best_seller');
            exit;
        } else {
            Flasher::setFlash('data best seller gagal', 'ditambahkan', 'error');
            header('Location: ' . BASEURL . '/dashboard/best_seller');
            exit;
        }
    }

    public function hapus_best_seller($id)
    {
        header('Location: ' . BASEURL . '/dashboard/best_seller');
        die;
        // if ($this->model('BestSeller_model')->tambahBestSeller($_POST) > 0) {
        //     Flasher::setFlash('best seller berhasil', 'ditambahkan', 'success');
        //     header('Location: ' . BASEURL . '/dashboard/best_seller');
        //     exit;
        // } else {
        //     Flasher::setFlash('best seller gagal', 'ditambahkan', 'error');
        //     header('Location: ' . BASEURL . '/dashboard/best_seller');
        //     exit;
        // }
    }
}
