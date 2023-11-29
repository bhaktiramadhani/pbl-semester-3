<?php
require '../config/koneksi.php';
$valid = '';
$pesan = '';

// pengecekan token dan gmail
if (isset($_GET['email']) && isset($_GET['token'])) {
    $email = $_GET['email'];
    $token = $_GET['token'];

    $query = "SELECT * FROM users WHERE email = '$email' AND reset_token = '$token'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($row['reset_token'] === '') {
            $valid = false;
        } else {
            $valid = true;
        }
    }
} else {
    $valid = false;
}

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if ($password === $confirm_password) {
        $query = "UPDATE users SET password = '$hash', reset_token = '', reset_token_exp = NULL";
        $result = mysqli_query($koneksi, $query);
        header("Location: ../login.php?pesan=ubah_password");
    } else {
        $pesan =  'Password anda belum sama';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemaraya | Reset Password</title>
    <link rel="stylesheet" href="../node_modules/flowbite/dist/flowbite.css">
    <link rel="stylesheet" href="../assets/css/output.css">
</head>

<body>
    <?php if ($valid === true) : ?>
        <div class="w-full h-screen flex flex-col justify-center items-center mx-auto max-w-xs">
            <div class="flex justify-center w-full mb-8">
                <a href="index.php">
                    <img src="../assets/images/logo-chemaraya.svg" alt="logo chemaraya" width="200">
                </a>
            </div>
            <h1 class="font-bold mb-4 text-2xl">Reset Password</h1>

            <form class="flex flex-col justify-center w-full" action="" method="POST">
                <div class="relative z-0 w-full mb-6 group">

                    <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-brown peer" placeholder=" " required />
                    <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-brown aria-pressed: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password Baru</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="confirm-password" id="confirm-password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-brown peer" placeholder=" " required />
                    <label for="confirm-password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-brown aria-pressed: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm Password Baru</label>
                </div>
                <p class="text-red-500 mb-5">
                    <?= $pesan ?>
                </p>
                <button type="submit" class="text-white bg-brown hover:bg-brownHover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-200 ease-in-out" name="submit">Ubah Password</button>
            </form>
        </div>
    <?php else : ?>
        <h1 class="text-center font-bold text-5xl">Invalid TOKEN</h1>
    <?php endif ?>



    <script src="../node_modules/flowbite/dist/flowbite.js"></script>
</body>


</html>