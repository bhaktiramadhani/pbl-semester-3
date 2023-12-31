<?php

class Upload
{
    public static function uploadImage($page, $redirect)
    {
        $namaFile = $_FILES['image']['name'];
        $ukuranfile = $_FILES['image']['size'];
        $error = $_FILES['image']['error'];
        $tmpName = $_FILES['image']['tmp_name'];

        // cek gambar diupload atau tidak
        if ($error === 4) {
            Flasher::setFlash('Pilih gambar terlebih dahulu', '', 'error');
            header('Location: ' . BASEURL . "/dashboard/$redirect");
            die;
        }

        // cek apakah yang diupload gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            Flasher::setFlash('Gambar harus JPG, JPEG, PNG', '', 'error');
            header('Location: ' . BASEURL . "/dashboard/$redirect");
            die;
        }

        // cek ukuran gambar
        if ($ukuranfile > 2000000) {
            Flasher::setFlash('Gambar tidak boleh lebih dari 2 MB', '', 'error');
            header('Location: ' . BASEURL . "/dashboard/$redirect");
            die;
        }

        // membuat nama gambar dari nama produk
        $namaFile = time() . "." . $ekstensiGambar;

        // upload gambarr
        move_uploaded_file($tmpName, "C:/xampp/htdocs/chemaraya/public/images/$page/" . $namaFile);

        return $namaFile;
    }

    public static function deleteImage($page, $image)
    {
        if (file_exists("C:/xampp/htdocs/chemaraya/public/images/$page/" . $image)) {
            unlink("C:/xampp/htdocs/chemaraya/public/images/$page/" . $image);
        }
    }
}
