<?php

class Logout extends Controller
{

    public function index()
    {
        if (isset($_SESSION['username'])) {
            Flasher::setFlash('Anda berhasil logout', '', 'success');
            unset($_SESSION['username']);
            header("location: " . BASEURL . "/login");
        }
    }
}
