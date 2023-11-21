<?php
include('config/koneksi.php');
session_start();

if (isset($_SESSION['status']) == "login") {
    header("location: dashboard.php");
}


$pesan = "";
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == 'logout') {
        $pesan = "Anda Telah Logout";
    } else if ($_GET['pesan'] == 'gagal') {
        $pesan = "Username atau Password anda salah";
    } else if ($_GET['pesan'] == 'belum_login') {
        $pesan = "Anda harus login dulu";
    }
}

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $data = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: dashboard.php");
    } else {
        header("location: login.php?pesan=gagal");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemaraya | Login</title>
    <link rel="stylesheet" href="node_modules/flowbite/dist/flowbite.css">
    <link rel="stylesheet" href="assets/css/output.css">
</head>

<body>
    <div class="w-full h-screen flex flex-col justify-center items-center mx-auto max-w-xs">
        <div class="flex justify-center w-full mb-8">
            <a href="index.php">
                <img src="assets/images/logo-chemaraya.svg" alt="logo chemaraya" width="200">
            </a>
        </div>
        <a href="index.php" class="self-start flex gap-2 items-center  rounded-md mb-4 group" data-tooltip-target="tooltip-to-home">
            <img src="assets/images/icons/arrow-back.svg" alt="panah kembali" width="30" class="group-hover:-translate-x-1.5 transition-all duration-400 ease-in">
            Kembali ke Beranda
        </a>
        <div id="tooltip-to-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Home
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <form class="flex flex-col justify-center w-full" action="login.php" method="POST">
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-brown peer" placeholder=" " required />
                <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-brown aria-pressed: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-brown peer" placeholder=" " required />
                <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-brown aria-pressed: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>

            <button type="submit" class="text-white bg-brown hover:bg-brownHover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-200 ease-in-out" name="submit">Login</button>
        </form>
        <a href="register.php" class="self-start mt-4 font-normal underline underline-offset-4 hover:no-underline text-sm">Ke halaman Register</a>
    </div>

    <!-- toast -->
    <div class="<?php if ($pesan == '') echo 'hidden';
                else echo 'fixed'; ?> top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <div id="toast-warning" class="flex items-center w-auto max-w-lg p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                </svg>
                <span class="sr-only">Warning icon</span>
            </div>
            <div class="ms-3 text-sm font-normal"><?php echo $pesan ?></div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </div>



    <script src="node_modules/flowbite/dist/flowbite.js"></script>
</body>


</html>