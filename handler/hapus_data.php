<?php
require '../functions.php';
// fungsi hapus
if (isset($_GET['hapus'])) {
    if (hapus($_GET['hapus']) > 0) {
        echo '<script>alert("data berhasil dihapus")</script>';
        header("refresh:0;url=../dashboard.php");
    } else {
        echo '<script>alert("data gagal dihapus")</script>';
        header("refresh:0;url=../dashboard.php");
    }
}
