<section id="breadcrumb" class="md:sticky md:top-0 md:z-50">
    <div class=" bg-brown_B300 px-4 md:px-[100px] py-6 flex flex-wrap justify-between items-center gap-4">
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
                        <a href="<?= BASEURL; ?>/products" class="ms-1 text-sm font-medium text-black">All Menu</a>
                    </div>
                </li>
                <li class="hover:underline underline-offset-1">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-black mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="<?= BASEURL; ?>/products/detail/<?= $data['product']['id_products'] ?>" class="ms-1 text-sm font-medium text-black"><?= $data['product']['name'] ?></a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
</section>

<section id="detail-menu">
    <div class="pb-40 md:px-[100px] md:py-[60px] flex flex-wrap md:flex-nowrap gap-16 md:gap-32">
        <img src="<?= BASEURL; ?>/images/produk/<?= $data['product']['image'] ?>" alt="<?= $data['product']['name'] ?>" class="w-full h-[550px] sm:h-[700px] md:w-96 md:h-[450px] object-cover object-top">
        <div class="px-4 md:px-0">
            <h1 class="font-bold text-3xl md:text-[42px] mb-2"><?= $data['product']['name'] ?></h1>
            <p class="font-medium text-xl md:text-2xl text-[#9F9F9F] mb-4">Rp. <?= number_format($data['product']['price'], 0, ',', '.') ?></p>
            <p class="text-xl md:text-2xl mb-2"><?= $data['product']['category_name'] ?></p>
            <p class="text-xs md:text-sm mb-5"><?= $data['product']['description'] ?></p>

            <div class="flex flex-col gap-2">
                <a href="<?= $data['product']['link_gojek'] ?>" target="_blank">
                    <img src="<?= BASEURL; ?>/images/button-gofood.png" alt="<?= $data['product']['name'] ?>">
                </a>
                <a href="<?= $data['product']['link_grab'] ?>" target="_blank">
                    <img src="<?= BASEURL; ?>/images/button-grabfood.png" alt="<?= $data['product']['name'] ?>">
                </a>
            </div>
        </div>
    </div>
    <hr>
</section>