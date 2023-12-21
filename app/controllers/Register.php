<?php

class Register extends Controller
{

    public function index()
    {
        $data['title'] = "Register";
        $this->view('templates/header', $data);
        $this->view('register/index');
        $this->view('templates/footer');
    }

    public function verify_register()
    {
        $email = htmlspecialchars($_POST['email']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $confirm_password = htmlspecialchars($_POST['confirm_password']);
    }
}
