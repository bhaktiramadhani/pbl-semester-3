<!-- bagian aside sebalah kiri -->
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="<?= BASEURL; ?>/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <img src="<?= BASEURL; ?>/images/icons/dashboard.svg" alt="dashboard logo">
                    <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?= BASEURL; ?>/dashboard/products" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <img src="<?= BASEURL; ?>/images/icons/products.svg" alt="products logo">
                    <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/best_seller" class="flex items-center p-2 text-gray-900 rounded-lg  bg-gray-100 group">
                    <img src="<?= BASEURL; ?>/images/icons/best-seller.svg" alt="best-seller logo">
                    <span class="ms-3">Best Seller</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/testimoni" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <img src="<?= BASEURL; ?>/images/icons/testimoni.svg" alt="testimoni logo">
                    <span class="flex-1 ms-3 whitespace-nowrap">Testimoni</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/profile" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <img src="<?= BASEURL; ?>/images/icons/profile.svg" alt="profile logo">
                    <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/logout" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <img src="<?= BASEURL; ?>/images/icons/log-out.svg" alt="log-out logo">
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
            <h1 class="font-bold text-[22px] mb-6">Best Seller</h1>
            <div class="pb-4 bg-white dark:bg-gray-900">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1 flex flex-wrap justify-between gap-4">
                    <form action="" method="post">
                        <input type="text" id="table-search" name="keyword" class="block pt-2 text-sm text-gray-900 border border-gray-300 rounded-lg w-60 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Produk..." autofocus autocomplete="off" value="<?php if (isset($_GET['keyword'])) echo $_GET['keyword']; ?>">
                    </form>
                    <button data-modal-target="modal" data-modal-toggle="modal" class="tambah-best-seller text-white bg-brown hover:bg-brownHover font-medium rounded-lg text-sm w-auto sm:w-auto px-5 py-2.5 text-center transition-all duration-200 ease-in-out <?php if (count($data['best_seller']) === 3) echo 'cursor-not-allowed'; ?>" <?php if (count($data['best_seller']) === 3) echo 'disabled title="sudah ada 3" '; ?>>Tambah Best Seller</button>
                </div>
            </div>
            <div class="relative overflow-x-auto p-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Urutan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['best_seller'] as $bestSeller) : ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $bestSeller['urutan']; ?>
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $bestSeller['name']; ?>
                                </th>
                                <td class="px-6 py-4 space-y-2">
                                    <a href="#" data-modal-target="modal" data-modal-toggle="modal" class="font-medium text-white bg-brown hover:bg-brownHover py-2 px-4 rounded-lg inline-block edit-best-seller" data-id="<?= $bestSeller['id_best_seller'] ?>">Edit</a>
                                    <a href="#" class="font-medium text-white bg-red-600 hover:bg-red-500 py-2 px-4 rounded-lg inline-block delete-best-seller" data-id="<?= $bestSeller['id_best_seller'] ?>" data-name="<?= $bestSeller['name'] ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

        </section>

    </div>
    <!-- Main modal tambah produk -->
    <div id="modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="modal-title">
                        Tambah Best Seller
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <form action="tambah_best_seller" method="post" enctype="multipart/form-data" id="form-best-seller">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <input type="hidden" name="id-best-seller" id="id-best-seller">
                            <input type="hidden" name="id-products" id="id-products">
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                                <select id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option selected disabled value="Pilih-Produk">Pilih Produk</option>
                                    <?php foreach ($data['products'] as $product) : ?>
                                        <option value="<?= $product['name'] ?>"><?= $product['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="urutan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Urutan Produk</label>
                                <select id="urutan" name="urutan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option selected disabled value="Pilih-Urutan">Pilih Urutan</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-brown rounded-lg hover:bg-brownHover transition-all duration-200 ease-in-out" id="modal-button">Tambah Best Seller</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?= BASEURL; ?>/js/handleBestSeller.js">
</script>
<!-- menginisiasi flashnya -->
<?php Flasher::flash(); ?>