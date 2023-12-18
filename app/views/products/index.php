<section id="banner">
    <div class="h-[316px] flex flex-col items-center justify-center !bg-no-repeat !bg-cover !bg-center relative" style="background: url(images/menu-banner.png);">
        <div class="bg-white opacity-50 absolute top-0 left-0 w-full h-full z-0"></div>
        <h1 class="z-10 text-5xl font-medium">All Menu</h1>
        <nav class="z-10 flex text-base font-medium mt-2" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center hover:underline underline-offset-1">
                    <a href="<?= BASEURL; ?>" class="inline-flex items-center text-sm font-medium text-black">
                        Home
                    </a>
                </li>
                <li class="hover:underline underline-offset-1">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-black mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="<?= BASEURL; ?>/products" class="ms-1 text-sm font-medium text-black">Products</a>
                    </div>
                </li>
            </ol>
        </nav>

    </div>
</section>

<section id="filter" class="md:sticky md:top-0 md:z-50">
    <div class=" bg-brown_B300 px-[100px] py-6 flex flex-wrap justify-between items-center gap-4">
        <p class="text-center sm:text-start">Showing 1–30 of 381 results</p>
        <div class="flex sm:gap-7">
            <div class="sm:space-x-4">
                <label for="show">Show</label>
                <input name="show" id="show" type="number" min="10" max="40" placeholder="10" value="10" class="w-14 h-14 text-center border-none">
            </div>
            <div class="sm:space-x-4">
                <label for="short">Short By</label>
                <input name="short" id="short" type="text" placeholder="Cari" value="" class="w-44 h-14 border-none">
            </div>
        </div>
    </div>
</section>

<section id="menu">
    <div class="py-12 mx-auto lg:mx-[100px] lg:p-4 flex flex-col">
        <h2 class="text-3xl md:text-[32px] text-center font-bold">Menu</h2>
        <div class="mt-8 flex flex-col md:flex-row gap-3 justify-center items-center">

            <div class="w-auto">
                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="text-white bg-brown_B500 hover:bg-brownHover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Varian <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownDefaultCheckbox" class="z-50 hidden w-auto bg-brown_B700 divide-y divide-gray-100 rounded-lg shadow">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200 w-auto" aria-labelledby="dropdownCheckboxButton">
                        <?php foreach ($data['categorys'] as $category) : ?>
                            <li>
                                <div class="flex items-center">
                                    <input id="checkbox-item-<?= $category['id_category'] ?>" type="checkbox" value="" class="w-4 h-4 text-black bg-transparent border border-white rounded focus:outline-none focus:border-none">
                                    <label for="checkbox-item-<?= $category['id_category'] ?>" class="ms-2 text-sm font-medium text-white"><?= $category['category_name'] ?></label>
                                </div>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>

            </div>
        </div>
        <div class="container w-full p-10 md:py-12 px-0 md:p-8 mx-auto">
            <div class="p-5 md:p-0 grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-4 gap-6 mx-auto">
                <?php foreach ($data['products'] as $product) : ?>
                    <a href="products/detail/<?= $product['id_products']; ?>" class="py-3 bg-[#FCDFD7] transform cursor-pointer rounded-md group overflow-hidden">
                        <img src="images/produk/<?= $product['image'] ?>" alt="" class="transition-all ease-in-out overflow-hidden w-full group-hover:scale-110">
                        <hr class="h-px absolute left-0 bottom-0" style="background-color: black;">
                        <div class="flex flex-col my-5 ml-[13px] gap-3 absolute left-0 bottom-0">
                            <h3 class="font-bold text-xs sm:text-base text-brown_B700"><?= $product['name'] ?></h3>
                            <span class="text-[10px] sm:text-xs text-brown_B500"><?= $product['category_name'] ?></span>
                            <span class="font-bold text-xs sm:text-base text-brown_B700">Rp. <?= number_format($product['price'], 0, ',', '.') ?></span>
                        </div>
                        <div class="hidden w-full h-full absolute left-0 top-0 bg-[#3A3A3A] bg-opacity-70 transition-all ease-out group-hover:flex items-center justify-center flex-col">
                            <div class="bg-white m-3 md:m-8 p-2 rounded-md text-xs text-center">
                                <?= $product['description'] ?>
                            </div>
                            <div class="text-white flex gap-5">
                                <span class="flex items-center gap-1">
                                    <img src="images/icons/share.svg" alt="share logo">
                                    Share
                                </span>
                                <span class="flex items-center gap-1">
                                    <img src="images/icons/like.svg" alt="share logo">
                                    Like
                                </span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="space-x-3 md:space-x-10 self-center mx-2">
            <button class="py-4 px-7 bg-brown_B600 rounded-[10px]">1</button>
            <button class="py-4 px-7 bg-brown_B300 rounded-[10px]">2</button>
            <button class="py-4 px-7 bg-brown_B300 rounded-[10px]">3</button>
            <button class="py-4 px-7 bg-brown_B300 rounded-[10px]">Next</button>
        </div>
    </div>
</section>