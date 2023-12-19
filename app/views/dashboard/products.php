<!-- bagian aside sebalah kiri -->
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r-4 border-black sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="<?= BASEURL; ?>/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <img src="<?= BASEURL; ?>/images/icons/dashboard.svg" alt="dashboard logo">
                    <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/products" class="flex items-center p-2 text-gray-900 rounded-lg  bg-gray-100 group">
                    <img src="<?= BASEURL; ?>/images/icons/products.svg" alt="products logo">
                    <span class="ms-3">Products</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/best_seller" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <img src="<?= BASEURL; ?>/images/icons/best-seller.svg" alt="best-seller logo">
                    <span class="flex-1 ms-3 whitespace-nowrap">Best Seller</span>
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
<div class="sm:ml-64">
    <div class="mt-14">
        <!-- semua produk dan tambah produk -->
        <section id="products">
            <div class="relative overflow-x-auto px-8 py-6 bg-brown_B300 h-full">
                <div class="bg-white">
                    <div class="flex gap-2 py-3 px-4 border-b-2 border-black">
                        <img src="<?= BASEURL; ?>/images/icons/hamburger.svg" alt="hamburger icon" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" class="cursor-pointer sm:hidden">
                        <h1 class="font-bold text-2xl">Products</h1>
                    </div>
                    <div class="py-10 px-12">
                        <div class="bg-white dark:bg-gray-900">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative mt-1 flex flex-wrap justify-between gap-4">
                                <form action="<?= BASEURL; ?>/dashboard/products/" method="post" id="form-search" class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="search" name="keyword" class="block pl-8 pt-2 text-sm text-gray-900 border border-black rounded-[3px] w-60 bg-gray-50  placeholder:text-black focus:ring-0 focus:border-black" placeholder="Cari Produk..." autofocus autocomplete="off" value="<?= $data['keyword'] ?>">
                                </form>
                                <button data-modal-target="modal" data-modal-toggle="modal" class="text-white bg-brown hover:bg-brownHover font-medium rounded-[3px] text-sm w-auto sm:w-auto px-5 py-2.5 text-center transition-all duration-200 ease-in-out tambah-produk">Tambah Produk <img src="<?= BASEURL; ?>/images/icons/plus.svg" alt="icon plus" class="inline ml-7"></button>
                            </div>
                        </div>
                        <div class="relative overflow-x-auto pt-7">
                            <table class="w-full text-sm text-gray-500 dark:text-gray-400 border-separate border-spacing-1">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            Nama Produk
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            Gambar
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            Deskripsi
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            Harga
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            Kategori
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            Link
                                        </th>
                                        <th scope="col" class="w-[10%] px-6 py-3 bg-[#FFE192]">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; ?>
                                    <?php foreach ($data['products'] as $product) : ?>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <?= $id; ?>
                                            </th>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <?= $product['name']; ?>
                                            </th>
                                            <td class="px-6 py-4 ">
                                                <img src="<?= BASEURL; ?>/images/produk/<?= $product['image']; ?>" alt="" class="w-40
                                    ">
                                            </td>
                                            <td class="px-6 py-4">
                                                <?= $product['description']; ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                Rp. <?= number_format($product['price'], 0, ',', '.') ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <?= $product['category_name']; ?>
                                            </td>
                                            <td class="px-6 py-4 flex flex-col items-center">
                                                <a href="<?= $product['link_gojek']; ?>" target="_blank" data-tooltip-target="tooltip-gojek-<?= $id; ?>" class="block p-2 w-16 bg-[#01AA13] rounded-md">
                                                    <img src="<?= BASEURL; ?>/images/icons/gojek-logo.svg" alt="gojek logo">
                                                </a>
                                                <div id="tooltip-gojek-<?= $id; ?>" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    <?= $product['link_gojek']; ?>
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                                <br>
                                                <a href="<?= $product['link_grab']; ?>" target="_blank" class="block p-2 w-16 bg-[#01AA13] rounded-md" data-tooltip-target="tooltip-grab-<?= $id; ?>" data-tooltip-placement="bottom">
                                                    <img src="<?= BASEURL; ?>/images/icons/grab-logo.png" alt="grab logo" width="64" height="17">
                                                </a>
                                                <div id="tooltip-grab-<?= $id; ?>" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700 tooltip-bottom">
                                                    <?= $product['link_grab']; ?>
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>

                                            </td>
                                            <td class="px-6 py-4 space-y-2">
                                                <a href="#" data-modal-target="modal" data-modal-toggle="modal" class="font-medium text-white bg-green_G400 text-center w-[77px] py-2 px-4 rounded-lg inline-block edit-produk" data-id="<?= $product['id_products']; ?>">Edit</a>
                                                <a href="#" class="font-medium text-white bg-pink_P500 text-center w-[77px] py-2 px-4 rounded-lg inline-block delete-product" data-id="<?= $product['id_products']; ?>" data-name="<?= $product['name']; ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $id++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
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
                        Tambah Produk
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
                    <form action="" method="post" enctype="multipart/form-data" id="form-produk">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <input type="hidden" name="image-name" id="image-name">
                            <input type="hidden" name="id" id="id">
                            <div class="">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="nama..." required="">
                            </div>
                            <div class="">
                                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                                <img src="" alt="" id="modal-img" class="mb-2 h-64">
                                <input id="file_input" type="file" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" accept="image/*" onchange="previewFile(this);">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">JPG, JPEG, PNG (MAX. 2MB).</p>
                            </div>
                            <div class="">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option selected disabled value="">Pilih Kategori</option>
                                    <?php foreach ($data['categorys'] as $category) : ?>
                                        <option value="<?= $category['id_category'] ?>"><?= $category['category_name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="w-full">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Rp. xx.xxx" required="">
                            </div>
                            <div class="space-y-6">
                                <div class="">
                                    <label for="link_gojek" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Gojek</label>
                                    <input type="url" name="link_gojek" id="link_gojek" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="https://gofood.link" required="">
                                </div>
                                <div class="">
                                    <label for="link_grab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Grab</label>
                                    <input type="url" name="link_grab" id="link_grab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="https://food.grab.com">
                                </div>
                            </div>
                            <div class="">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="deskripsi..."></textarea>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-brown rounded-lg hover:bg-brownHover transition-all duration-200 ease-in-out" id="modal-button">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?= BASEURL; ?>/js/handleProducts.js">
</script>

<!-- menginisiasi flashnya -->
<?php Flasher::flash(); ?>