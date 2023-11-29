<?php
require 'config/koneksi.php';

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $name = htmlspecialchars($data["name"]);
    $price = htmlspecialchars($data["price"]);
    $description = htmlspecialchars($data["description"]);
    date_default_timezone_set('Asia/Jakarta');
    $time = date("Y-m-d H:i:s", time());
    $category = '';
    if (!isset($data["category"])) {
        echo '<script>alert("isi kategori terlebih dahulu!")</script>';
        return false;
    } else {
        $category = $data["category"];
    }

    // upload gambar
    $image = upload($name);

    if (!$image) {
        return false;
    }

    $queryTambah = "INSERT INTO products 
                    VALUES
                    ('', '$name', '$image', '$description', '$price', '$category', '$time', '$time')";

    mysqli_query($koneksi, $queryTambah);
    return mysqli_affected_rows($koneksi);
}

function upload($name)
{
    $namaFile = $_FILES['image']['name'];
    $ukuranfile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // cek gambar diupload atau tidak
    if ($error === 4) {
        echo '<script>alert("pilih gambar terlebih dahulu!")</script>';
    }

    // cek apakah yang diupload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);


    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo '<script>alert("yang anda upload bukan gambar!")</script>';
        return false;
    }

    // cek ukuran gambar
    if ($ukuranfile > 2000000) {
        echo '<script>alert("ukuran gambar terlalu besar!")</script>';
        return false;
    }

    // membuat nama gambar dari nama produk
    $namaFile = time() . "." . $ekstensiGambar;

    // upload gambarr
    move_uploaded_file($tmpName, 'C:/xampp/htdocs/chemaraya/assets/images/' . $namaFile);

    return $namaFile;
}


function hapus($id)
{
    global $koneksi;
    $file = query("SELECT * FROM products WHERE id_products=$id");
    unlink('C:/xampp/htdocs/chemaraya/assets/images/' . $file[0]['image']);
    mysqli_query($koneksi, "DELETE FROM products WHERE id_products = $id");
    return mysqli_affected_rows($koneksi);
}

function edit($data)
{
    global $koneksi;
    $name = htmlspecialchars($data["name"]);
    $price = htmlspecialchars($data["price"]);
    $description = htmlspecialchars($data["description"]);
    $id = $data["id"];
    $category = $data["category"];
    $gambarLama = $data["gambarLama"];
    if ($_FILES['image']['error'] === 4) {
        $image = $gambarLama;
    } else {
        $image = upload($name);
        unlink('C:/xampp/htdocs/chemaraya/assets/images/' . $gambarLama);
    }

    mysqli_query($koneksi, "UPDATE products SET
                                                name='$name',
                                                image='$image',
                                                description='$description',
                                                price='$price',
                                                category='$category'
                                                WHERE id_products = $id");
    return mysqli_affected_rows($koneksi);
}


function cari($keyword)
{
    $query = "SELECT * FROM products WHERE name LIKE '%$keyword%' OR description LIKE '%$keyword%' OR price LIKE '%$keyword%' OR category LIKE '%$keyword%'";
    return query($query);
}
