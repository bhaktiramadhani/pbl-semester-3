<?php
require 'functions.php';
session_start();
if ($_SESSION['status'] != "login") {
    return header("location: login.php?pesan=belum_login");
}

// mengambil semua data
$products = query("SELECT * FROM products");

if (isset($_GET['keyword'])) {
    $products = cari($_GET['keyword']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemaraya | Dashboard</title>
    <link rel="stylesheet" href="node_modules/flowbite/dist/flowbite.css">
    <link rel="stylesheet" href="assets/css/output.css">
</head>

<body>
    <!-- navbar -->
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="index.php" class="flex ms-2 md:me-24">
                        <img src="assets/images/logo-chemaraya.svg" class="h-10 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Chemaraya</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div class="flex items-center gap-3">
                            <span><?= $_SESSION['username']; ?></span>
                            <img class="w-8 h-8 rounded-full" src="assets/images/user.jpg" alt="user photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- bagian aside sebalah kiri -->
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="dashboard.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="products.php" class="flex items-center p-2 text-gray-900 rounded-lg  bg-gray-100  group">
                        <svg class="w-5 h-5 transition duration-75 dark:text-gray-400 text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- konten utama -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <!-- semua produk dan tambah produk -->
            <section id="products">
                <div class="relative overflow-x-auto p-4">
                    <h1 class="font-bold text-[22px] mb-4">Products</h1>
                    <div class="pb-4 bg-white dark:bg-gray-900">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1 flex flex-wrap justify-between gap-4">
                            <form action="products.php" method="get" class="flex flex-wrap gap-4">
                                <input type="text" id="table-search" name="keyword" class="block pt-2 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Produk..." autofocus autocomplete="off" value="<?php if (isset($_GET['keyword'])) echo $_GET['keyword']; ?>">
                            </form>
                            <button data-modal-target="add-modal" data-modal-toggle="add-modal" class="text-white bg-brown hover:bg-brownHover font-medium rounded-lg text-sm w-auto sm:w-auto px-5 py-2.5 text-center transition-all duration-200 ease-in-out">Tambah Produk</button>
                        </div>
                    </div>

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Gambar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Deskripsi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($products as $product) : ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $id; ?>
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $product['name']; ?>
                                    </th>
                                    <td class="px-6 py-4">
                                        <img src="assets/images/<?= $product['image']; ?>" alt="" class="w-20">
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $product['description']; ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp. <?= number_format($product['price'], 0, ',', '.') ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $product['category']; ?>
                                    </td>
                                    <td class="px-6 py-4 space-y-2">
                                        <a href="#" data-modal-target="edit-modal<?php echo $product['id']; ?>" data-modal-toggle="edit-modal<?php echo $product['id']; ?>" class="font-medium text-white bg-brown hover:bg-brownHover py-2 px-4 rounded-lg inline-block">Edit</a>
                                        <a href="handler/hapus_data.php?hapus=<?= $product['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')" class="font-medium text-white bg-red-600 hover:bg-red-500 py-2 px-4 rounded-lg inline-block">Hapus</a>
                                    </td>
                                </tr>
                                <div id="edit-modal<?php echo $product['id']; ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Edit Produk
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal<?php echo $product['id']; ?>">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="handler/edit_data.php" method="post" enctype="multipart/form-data">
                                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                                        <input type="hidden" name="id" value="<?= $product['id']; ?>">
                                                        <input type="hidden" name="gambarLama" value="<?= $product['image']; ?>">
                                                        <div class="sm:col-span-2">
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                                                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="nama..." required="" value="<?= $product['name']; ?>">
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                                                            <img src="assets/images/<?= $product['image'] ?>" alt="" height="100" width="250" class="my-4">
                                                            <input id="file_input" type="file" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help">
                                                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">JPG, JPEG, PNG (MAX. 2MB).</p>
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                                            <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                <option selected disabled>Pilih Kategori</option>
                                                                <option value="Ekonomis + Ekonomis">Ekonomis + Ekonomis</option>
                                                                <option value="Medium + Medium">Medium + Medium</option>
                                                                <option value="Premium + Premium">Premium + Premium</option>
                                                                <option value="Ekonomis + Medium">Ekonomis + Medium</option>
                                                                <option value="Ekonomis + Premium">Ekonomis + Premium</option>
                                                                <option value="Medium + Premium">Medium + Premium</option>
                                                            </select>
                                                        </div>
                                                        <div class="w-full">
                                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                            <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Rp. xx.xxx" required="" value="<?= $product['price'] ?>">
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                                            <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="deskripsi..."><?= $product['description']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="edit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-brown rounded-lg hover:bg-brownHover transition-all duration-200 ease-in-out">Edit Produk</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $id++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            </section>

        </div>
        <!-- Main modal tambah produk -->
        <div id="add-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Tambah Produk
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <form action="handler/tambah_data.php" method="post" enctype="multipart/form-data">
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div class="sm:col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="nama..." required="">
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                                    <input id="file_input" type="file" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">JPG, JPEG, PNG (MAX. 2MB).</p>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected disabled>Pilih Kategori</option>
                                        <option value="Ekonomis + Ekonomis">Ekonomis + Ekonomis</option>
                                        <option value="Medium + Medium">Medium + Medium</option>
                                        <option value="Premium + Premium">Premium + Premium</option>
                                        <option value="Ekonomis + Medium">Ekonomis + Medium</option>
                                        <option value="Ekonomis + Premium">Ekonomis + Premium</option>
                                        <option value="Medium + Premium">Medium + Premium</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Rp. xx.xxx" required="">
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="deskripsi..."></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-brown rounded-lg hover:bg-brownHover transition-all duration-200 ease-in-out">Tambah Produk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="node_modules/flowbite/dist/flowbite.js"></script>
</body>

</html>