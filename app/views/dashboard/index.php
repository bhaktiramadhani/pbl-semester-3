<!-- bagian aside sebalah kiri -->
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="<?= BASEURL; ?>/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg  bg-gray-100 group">
                    <svg class="w-5 h-5 transition duration-75 dark:text-gray-400 text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/products" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/best_seller" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Best Seller</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/testimoni" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Testimoni</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/profile" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                </a>
            </li>
            <li>
                <a href="logout" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        <!-- semua produk dan tambah produk -->
        <section id="products">
            <div class="relative overflow-x-auto p-4">
                <h1 class="font-bold text-2xl mb-4">Dashboard</h1>
                <div class="grid justify-items-center grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-y-6 max-w-5xl">
                    <a href='best-seller' class="w-60 h-auto">
                        <div class="flex justify-between pt-6 pb-[50px] px-7 bg-slate-400 rounded-t-md">
                            <div>
                                <span class="font-bold text-lg"><?= count($data['best_seller']); ?></span>
                                <p class="font-bold text-xs">Best Seller</p>
                            </div>
                            <img src="<?= BASEURL; ?>/images/icons/bestbuy.svg" alt="logo best seller" width="40" height="38" class="pt-[14px]">
                        </div>
                        <div class="bg-black text-white text-center py-2 rounded-b-md">
                            <p>Selengkapnya</p>
                        </div>
                    </a>
                    <a href='dashboard/products.php' class="w-60 h-auto">
                        <div class="flex justify-between pt-6 pb-[50px] px-7 bg-slate-400 rounded-t-md">
                            <div>
                                <span class="font-bold text-lg"><?= count($data['products']); ?></span>
                                <p class="font-bold text-xs">Semua Produk</p>
                            </div>
                            <img src="<?= BASEURL; ?>/images/icons/bestbuy.svg" alt="logo best seller" width="40" height="38">
                        </div>
                        <div class="bg-black text-white text-center py-2 rounded-b-md">
                            <p>Selengkapnya</p>
                        </div>
                    </a>
                    <?php foreach ($data['categorys'] as $name => $value) : ?>
                        <a href='dashboard/products.php?keyword=<?= urlencode($name) ?>' class="w-60 h-auto">
                            <div class="flex justify-between pt-6 pb-[50px] px-7 bg-slate-400 rounded-t-md">
                                <div>
                                    <span class="font-bold text-lg"><?= $value; ?></span>
                                    <p class="font-bold text-xs"><?= $name; ?></p>
                                </div>
                                <img src="assets/images/icons/bestbuy.svg" alt="logo best seller" width="40" height="38">
                            </div>
                            <div class="bg-black text-white text-center py-2 rounded-b-md">
                                <p>Selengkapnya</p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <a href='#' class="w-60 h-auto">
                        <div class="flex justify-between pt-6 pb-[50px] px-7 bg-slate-400 rounded-t-md">
                            <div>
                                <span class="font-bold text-lg"><?= count($data['testimoni']); ?></span>
                                <p class="font-bold text-xs">Testimoni</p>
                            </div>
                            <img src="assets/images/icons/bestbuy.svg" alt="logo best seller" width="40" height="38">
                        </div>
                        <div class="bg-black text-white text-center py-2 rounded-b-md">
                            <p>Selengkapnya</p>
                        </div>
                    </a>

                </div>
            </div>

        </section>

    </div>

</div>