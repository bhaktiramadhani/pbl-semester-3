<?php

class ForgotPassword extends Controller
{

    public function index()
    {
        $data['title'] = "Forgot Password";
        $this->view('templates/header', $data);
        $this->view('forgotpassword/index');
        $this->view('templates/footer');
    }
}
