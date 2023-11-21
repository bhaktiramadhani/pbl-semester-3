<?php
session_start();

//hapus semua session
session_destroy();

header("Location: login.php?pesan=logout");
