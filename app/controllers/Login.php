<?php

class Login extends Controller
{

    public function index()
    {
        if (isset($_SESSION['username'])) {
            header("location: " . BASEURL . "/dashboard");
        }

        $data['title'] = "Login";
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function verify_login()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            // getuser by username menggunakan Auth_model
            $user = $this->model('User_model')->getUserByUsername($username);

            // apabila username tidak ditemukan
            if (!$user) {
                Flasher::setFlash('Username tidak ditemukan', 'silahkan masukkan username dengan benar!', 'error');
                header('location: ../login');
                die;
            }



            // apabila username ditemukan
            if ($user && password_verify($password, $user['password'])) {

                // apabila akun tidak aktif
                if ($user['is_active'] == 0) {
                    Flasher::setFlash('Akun anda nonaktif', 'silahkan hubungi admin untuk mengaktifkan!', 'error');
                    header('location: ../login');
                    die;
                }

                $_SESSION['username'] = $username;
                Flasher::setFlash('Anda berhasil login', '', 'success');
                header('location: ../dashboard');
            } else {
                // apabila password salah
                Flasher::setFlash('Password Salah', 'silahkan masukkan password dengan benar!', 'error');
                header('location: ../login');
                die;
            }
        }
    }
}
