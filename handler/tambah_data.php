<?php
require '../functions.php';
// fungsi nambah data
if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo '<script>alert("data berhasil ditambah")</script>';
        header("refresh:0;url=../products.php");
    } else {
        echo '<script>alert("data gagal ditambah")</script>';
        header("refresh:0;url=../products.php");
    }
}
