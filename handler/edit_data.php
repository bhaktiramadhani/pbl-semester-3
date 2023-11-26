<?php
require '../functions.php';
// fungsi nambah data
if (isset($_POST['edit'])) {
    if (edit($_POST) > 0) {
        echo '<script>alert("data berhasil diubah")</script>';
        header("refresh:0;url=../dashboard.php");
    } else {
        echo '<script>alert("data gagal diubah")</script>';
        header("refresh:0;url=../dashboard.php");
    }
}
