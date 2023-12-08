<?php
// jika session id tidak ada jalankan session
if (!session_id()) session_start();
require_once '../app/init.php';

$app = new App;
