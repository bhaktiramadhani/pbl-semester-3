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
    $image = htmlspecialchars($data["image"]);
    $price = htmlspecialchars($data["price"]);
    $description = htmlspecialchars($data["description"]);
    date_default_timezone_set('Asia/Jakarta');
    $time = date("Y-m-d H:i:s", time());

    $queryTambah = "INSERT INTO products 
                    VALUES
                    ('P', '$name', '$image', '$description', '$price', '$time', '$time')";

    mysqli_query($koneksi, $queryTambah);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM products WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
