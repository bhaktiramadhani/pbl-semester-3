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
            // getuser by username menggunakan Login_model
            $user = $this->model('Login_model')->getUserByUsername($username);

            // apabila username tidak ditemukan
            if (!$user) {
                die("  <script>
                            alert('Username tidak ditemukan, silahkan masukkan username dengan benar!');
                            window.location.href = '../login';    
                        </script>");
            }

            // apabila username ditemukan
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                header('location: ../dashboard');
            } else {
                die("  <script>
                            alert('Password Salah, silahkan masukkan password dengan benar!');
                            window.location.href = '../login';    
                        </script>");
            }
        }
    }
}
