<?php

class Home extends Controller
{

    public function index()
    {
        $data['products'] = $this->model('Product_model')->getAllProductByLimit(10);
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
