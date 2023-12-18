<?php

class Products extends Controller
{

    public function index()
    {
        $data['products'] = $this->model('Product_model')->getAllProduct();
        $data['categorys'] = $this->model('Category_model')->getAllCategory();
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
}
