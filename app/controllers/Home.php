<?php

class Home extends Controller
{

    public function index()
    {
        if (isset($_SESSION['filter_kategori'])) {
            $data['products'] = $this->model('Product_model')->getAllProductByLimitAndLike(10, 'category.id_category', $_SESSION['filter_kategori']);
            $data['filter_kategori'] = $_SESSION['filter_kategori'];
        } else {
            $data['products'] = $this->model('Product_model')->getAllProductByLimitAndLike(10, '', '');
        }
        $data['categorys'] = $this->model('Category_model')->getAllCategory();
        $data['testimonis'] = $this->model('Testimoni_model')->getAllTestimoni();
        $data['best_sellers'] = $this->model('BestSeller_model')->getAllBestSeller();
        $this->view('templates/header');
        $this->view('templates/home_header');
        $this->view('home/index', $data);
        $this->view('templates/home_footer');
        $this->view('templates/footer');
    }
}
