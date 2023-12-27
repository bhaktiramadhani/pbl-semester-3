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
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $confirm_password = htmlspecialchars($_POST['confirm_password']);
        $users = $this->model('User_model')->getAllUser();
        $defaultImage = 'user.png';

        foreach ($users as $user) {
            // cek email sudah terdaftar
            if ($email == $user['email']) {
                Flasher::setFlash('Email ini sudah terdaftar', 'silahkan menggunakan email yang lain!', 'error');
                header('location: ../register');
                die;
            }

            // cek username sudah terdaftar
            if ($username == $user['username']) {
                Flasher::setFlash('Username ini sudah terdaftar', 'silahkan menggunakan username yang lain!', 'error');
                header('location: ../register');
                die;
            }
        }

        // cek konfirmasi password
        if ($password !== $confirm_password) {
            Flasher::setFlash('Konfirmasi password tidak sesuai', 'silahkan coba lagi!', 'error');
            header('location: ../register');
            die;
        }

        $data = [
            'email' => $email,
            'username' => $username,
            'password' => $password_hash,
            'image' => $defaultImage,
            'is_active' => 0
        ];



        if ($this->model('User_model')->register($data) > 0) {
            Flasher::setFlash('Selamat', 'Anda telah terdaftar, untuk verifikasi akun silahkan hubungi admin', 'success');
            header('location: ../login');
            die;
        } else {
            Flasher::setFlash('Gagal', 'Anda gagal terdaftar', 'error');
            header('location: ../register');
            die;
        }
    }
}
