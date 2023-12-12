<?php

class Dashboard extends Controller
{

    public function index()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
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
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
        $data['username'] = $_SESSION['username'];
        $data['title'] = "Dashboard";
        $data['keyword'] = $keyword;
        if ($keyword != '') {
            $data['products'] = $this->model('Product_model')->getProductByKeyword($keyword);
        } else {
            $data['products'] = $this->model('Product_model')->getAllProduct();
        }
        $data['categorys'] = $this->model('Category_model')->getAllCategory();
        $this->view('templates/header', $data);
        $this->view('templates/dashboard_header', $data);
        $this->view('dashboard/products', $data);
        $this->view('templates/footer');
    }

    public function tambah_product()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $category = htmlspecialchars($_POST['category']);
            $price = htmlspecialchars($_POST['price']);
            $description = htmlspecialchars($_POST['description']);
            $link_gojek = htmlspecialchars($_POST['link_gojek']);
            $link_grab = htmlspecialchars($_POST['link_grab']);

            $image = Upload::uploadImage('produk', 'products');

            $data = [
                'name' => $name,
                'category' => $category,
                'price' => $price,
                'description' => $description,
                'image' => $image,
                'link_gojek' => $link_gojek,
                'link_grab' => $link_grab
            ];

            if ($image) {
                if ($this->model('Product_model')->tambahProduct($data) > 0) {
                    Flasher::setFlash('data product ', 'berhasil ditambahkan', 'success');
                    header('Location: ' . BASEURL . '/dashboard/products');
                    exit;
                } else {
                    Flasher::setFlash('data product', 'gagal ditambahkan', 'error');
                    header('Location: ' . BASEURL . '/dashboard/products');
                    exit;
                }
            }
        }
    }

    public function hapus_product($id)
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($this->model('Product_model')->hapusProduct($id) > 0) {
            Flasher::setFlash('data product ', 'berhasil dihapus', 'success');
            header('Location: ' . BASEURL . '/dashboard/products');
            exit;
        } else {
            Flasher::setFlash('data product', 'gagal dihapus', 'error');
            header('Location: ' . BASEURL . '/dashboard/products');
            exit;
        }
    }

    public function edit_product()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $category = htmlspecialchars($_POST['category']);
            $price = htmlspecialchars($_POST['price']);
            $description = htmlspecialchars($_POST['description']);
            $link_gojek = htmlspecialchars($_POST['link_gojek']);
            $link_grab = htmlspecialchars($_POST['link_grab']);

            $error = $_FILES['image']['error'];
            $id = $_POST['id'];

            if ($error === 4) {
                $image = $_POST['image-name'];
            } else {
                $image = Upload::uploadImage('produk', 'products');
                Upload::deleteImage('produk', $_POST['image-name']);
            }

            $data = [
                'name' => $name,
                'category' => $category,
                'price' => $price,
                'description' => $description,
                'image' => $image,
                'id' => $id,
                'link_gojek' => $link_gojek,
                'link_grab' => $link_grab
            ];

            if ($this->model('Product_model')->editProduct($data) > 0) {
                Flasher::setFlash('data product ', 'berhasil diupdate', 'success');
                header('Location: ' . BASEURL . '/dashboard/products');
                exit;
            } else {
                Flasher::setFlash('data product', 'gagal diupdate', 'error');
                header('Location: ' . BASEURL . '/dashboard/products');
                exit;
            }
        }
    }

    public function best_seller()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

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
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($this->model('BestSeller_model')->tambahBestSeller($_POST) > 0) {
            Flasher::setFlash('data best seller ', 'berhasil ditambahkan', 'success');
            header('Location: ' . BASEURL . '/dashboard/best_seller');
            exit;
        } else {
            Flasher::setFlash('data best seller', 'gagal ditambahkan', 'error');
            header('Location: ' . BASEURL . '/dashboard/best_seller');
            exit;
        }
    }

    public function hapus_best_seller($id)
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($this->model('BestSeller_model')->hapusBestSeller($id) > 0) {
            Flasher::setFlash('data best seller ', 'berhasil dihapus', 'success');
            header('Location: ' . BASEURL . '/dashboard/best_seller');
            exit;
        } else {
            Flasher::setFlash('data best', 'gagal dihapus', 'error');
            header('Location: ' . BASEURL . '/dashboard/best_seller');
            exit;
        }
    }

    public function edit_best_seller()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($this->model('BestSeller_model')->editBestSeller($_POST) > 0) {
            Flasher::setFlash('data best seller ', 'berhasil diupdate', 'success');
            header('Location: ' . BASEURL . '/dashboard/best_seller');
            exit;
        } else {
            Flasher::setFlash('data best seller', 'gagal diupdate', 'error');
            header('Location: ' . BASEURL . '/dashboard/best_seller');
            exit;
        }
    }

    public function getEditProduct()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        echo json_encode($this->model('Product_model')->getProductById($_POST['id']));
    }
    public function getEditBestSeller()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        echo json_encode($this->model('BestSeller_model')->getBestSellerById($_POST['id']));
    }
    public function getEditTestimoni()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        echo json_encode($this->model('Testimoni_model')->getTestimoniById($_POST['id']));
    }


    public function testimoni()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
        $data['username'] = $_SESSION['username'];
        $data['title'] = "Dashboard";
        $data['testimonis'] = $this->model('Testimoni_model')->getAllTestimoni();
        $this->view('templates/header', $data);
        $this->view('templates/dashboard_header', $data);
        $this->view('dashboard/testimoni', $data);
        $this->view('templates/footer');
    }

    public function tambah_testimoni()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $description = htmlspecialchars($_POST['description']);

            $image = Upload::uploadImage('testimoni', 'testimoni');

            $data = [
                'name' => $name,
                'description' => $description,
                'image' => $image
            ];

            if ($image) {
                if ($this->model('Testimoni_model')->tambahTestimoni($data) > 0) {
                    Flasher::setFlash('data testimoni ', 'berhasil ditambahkan', 'success');
                    header('Location: ' . BASEURL . '/dashboard/testimoni');
                } else {
                    Flasher::setFlash('data testimoni', 'gagal ditambahkan', 'error');
                    header('Location: ' . BASEURL . '/dashboard/testimoni');
                }
            }
        }
    }

    public function hapus_testimoni($id)
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($this->model('Testimoni_model')->hapusTestimoni($id) > 0) {
            Flasher::setFlash('data testimoni ', 'berhasil dihapus', 'success');
            header('Location: ' . BASEURL . '/dashboard/testimoni');
            exit;
        } else {
            Flasher::setFlash('data testimoni', 'gagal dihapus', 'error');
            header('Location: ' . BASEURL . '/dashboard/testimoni');
            exit;
        }
    }

    public function edit_testimoni()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash('Login Gagal', 'Anda harus login terlebih dahulu', 'info');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $description = htmlspecialchars($_POST['description']);
            $error = $_FILES['image']['error'];
            $id_testimoni = htmlspecialchars($_POST['id-testimoni']);

            if ($error === 4) {
                $image = $_POST['image-name'];
            } else {
                $image = Upload::uploadImage('testimoni', 'testimoni');
                Upload::deleteImage('testimoni', $_POST['image-name']);
            }

            $data = [
                'name' => $name,
                'description' => $description,
                'image' => $image,
                'id_testimoni' => $id_testimoni
            ];

            if ($this->model('Testimoni_model')->editTestimoni($data) > 0) {
                Flasher::setFlash('data product ', 'berhasil diupdate', 'success');
                header('Location: ' . BASEURL . '/dashboard/testimoni');
                exit;
            } else {
                Flasher::setFlash('data product', 'gagal diupdate', 'error');
                header('Location: ' . BASEURL . '/dashboard/testimoni');
                exit;
            }
        }
    }


    public function profile()
    {
        $data['username'] = $_SESSION['username'];
        $data['title'] = "Dashboard";
        $this->view('templates/header', $data);
        $this->view('templates/dashboard_header', $data);
        $this->view('dashboard/profile', $data);
        $this->view('templates/footer');
    }
}
