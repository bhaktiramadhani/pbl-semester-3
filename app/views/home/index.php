<section id="home">
    <div class="2xl:mx-auto">
        <!-- Swiper -->
        <div class="swiper carouselSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/1.png" alt="1">
                </div>
                <div class="swiper-slide">
                    <img src="images/2.png" alt="2">
                </div>
                <div class="swiper-slide">
                    <img src="images/3.png" alt="3">
                </div>
            </div>
        </div>
    </div>


</section>
<section id="best-product" class="scroll-mt-20">
    <div class="py-12 text-[32px] text-center mx-5 lg:mx-[100px] xl:max-w-6xl xl:mx-auto">
        <h2 class="text-3xl md:text-[32px] font-bold">Best Product</h2>
        <div class="mt-8 flex flex-wrap-reverse justify-center w-full lg:mx-auto gap-y-5">
            <!-- best 2 -->
            <div class="my-1 px-2 w-1/2 md:w-1/3 lg:my-4 lg:px-4 space-y-3" data-aos="fade-up" data-aos-duration="2000">
                <a href="products/detail/<?= $data['best_sellers'][1]['id_products'] ?>" class="h-96">
                    <div class="block overflow-hidden rounded-md group">
                        <img alt="Placeholder" class="h-64 sm:h-[400px] md:h-[320px] xl:h-[400px] block w-full rounded-md shadow-sm object-cover object-top transition-all duration-300 ease-in-out group-hover:scale-110" src="images/produk/<?= $data['best_sellers'][1]['image'] ?>">
                    </div>
                </a>
                <h3 class="font-semibold text-base md:text-xl lg:text-2xl" data-aos="zoom-in-up"><?= $data['best_sellers'][1]['name'] ?></h3>
            </div>
            <!-- END -->

            <!-- best 1 -->
            <div class="my-1 px-1 w-3/4 sm:w-2/3 md:w-1/3 lg:px-4 md:-mt-3 space-y-3 order-1 md:order-none" data-aos="fade-up" data-aos-duration="1000">
                <a href="products/detail/<?= $data['best_sellers'][0]['id_products'] ?>" class="h-96">
                    <div class="block overflow-hidden rounded-md group">
                        <img alt="Placeholder" class="h-96 sm:h-[500px] md:h-[380px] xl block w-full rounded-md shadow-sm object-cover object-top transition-all duration-300 ease-in-out group-hover:scale-110" src="images/produk/<?= $data['best_sellers'][0]['image'] ?>">
                    </div>
                </a>
                <h3 class="font-semibold text-base md:text-2xl lg:text-[28px] px-1" data-aos="zoom-in-up"><?= $data['best_sellers'][0]['name'] ?></h3>
            </div>
            <!-- END -->

            <!-- best 3 -->
            <div class="my-1 px-2 w-1/2 md:w-1/3 lg:my-4 lg:px-4 space-y-3" data-aos="fade-up" data-aos-duration="2000">
                <a href="products/detail/<?= $data['best_sellers'][2]['id_products'] ?>" class="h-96">
                    <div class="block overflow-hidden rounded-md group">
                        <img alt="Placeholder" class="h-64 sm:h-[400px] md:h-[320px] xl:h-[400px] block w-full rounded-md shadow-sm object-cover object-top transition-all duration-300 ease-in-out group-hover:scale-110" src="images/produk/<?= $data['best_sellers'][2]['image'] ?>">
                    </div>
                </a>
                <h3 class="font-semibold text-base md:text-xl lg:text-2xl" data-aos="zoom-in-up"><?= $data['best_sellers'][2]['name'] ?></h3>
            </div>
            <!-- END -->
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
                    <a href="products/detail/<?= $product['id_products']; ?>" class="py-3 bg-[#FCDFD7] transform cursor-pointer rounded-md group overflow-hidden" data-aos="fade-up" data-aos-duration="2000">
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
        <?php
        if (count($data['products']) == 10) {
            echo '<a href="products" class="text-white bg-brown hover:bg-brownHover font-medium rounded-lg text-sm py-5 px-14 mt-16 self-center">Show More</a>';
        }
        ?>
    </div>
</section>

<section id="about-brand">
    <div class="w-full mt-[120px]">
        <h2 class="text-3xl md:text-[32px] text-center font-bold">ABOUT BRAND</h2>
        <div class="bg-brown_B200 mt-10 py-7 px-10 lg:px-[100px] flex flex-wrap lg:flex-nowrap items-center justify-center gap-[53px]">
            <span class="space-y-5 text-lg lg:text-2xl font-normal my-[14px] order-2 lg:order-1">
                <p class="indent-12" data-aos="fade-up" data-aos-duration="2000">
                    Chemaraya Roti Bakar Bandung berdiri sejak tahun 2021 ketika Indonesia mengalami pandemi Covid-19. Bermula dari sang pemilik dan istrinya sangat menyukai Roti Bakar Bandung, namun ketika membeli Roti Bakar Bandung di outlet lain, beliau merasa ada yang kurang seperti dari segi rasa dan tingkat kematangannya. Akhirnya beliau mencoba untuk membuat Roti Bakar tersebut dan membuka outlet dengan nama “Chemaraya Roti Bakar Bandung”.
                </p>
                <p class="indent-12" data-aos="fade-up" data-aos-duration="2000">
                    Dengan menambahkan beberapa varian atau rasa yang mungkin belum ada dibuat dari outlet lainnya, membuat Chemaraya Roti Bakar Bandung berbeda dengan outlet lainnya.
                </p>
            </span>
            <img src="images/about-brand.png" alt="about brand image" class='h-[450px] order-1 lg:order-2' data-aos="zoom-in" data-aos-duration="2000">
        </div>
    </div>
</section>

<section id="history">
    <div class="w-full mt-[120px]">
        <h2 class="text-3xl md:text-[32px] text-center font-bold">HISTORY OF “ROTI BAKAR BANDUNG”</h2>
        <div class="bg-brown_B200 mt-10 py-7 px-10 lg:px-[100px] flex flex-wrap lg:flex-nowrap items-center justify-center gap-[53px]">
            <img src="images/history.png" alt="history image" class='h-[480px]' data-aos="zoom-in" data-aos-duration="2000">
            <span class="space-y-5 text-lg lg:text-2xl font-normal my-[14px]">
                <p class="indent-12" data-aos="fade-up" data-aos-duration="2000">
                    Roti bakar menjadi hidangan khas di Kota Bandung, dengan masuknya tepung terigu yang diperkenalkan oleh bangsa Belanda. Sejarahnya dimulai dengan adanya foodscape atau bentang makanan, terutama setelah tepung terigu dari gandum, ragi, dan mentega memasuki kota Bandung. Perubahan ini dipengaruhi oleh akulturasi yang beragam di bawah pemerintahan Hindia Belanda. Pemerintahan Belanda juga tidak hanya membawa bahan baku beragam ke Kota Bandung, tetapi juga peralatan memasak seperti loyang dan teknik memasak dengan oven.
                </p>
                <p class="indent-12" data-aos="fade-up" data-aos-duration="2000">
                    Roti bakar pun semakin dikenal, dihidangkan di Warung Kopi Purnama di Jalan Alkateri yang dikenal sebagai salah satu kedai kopi legendaris dan ikon wisata heritage di Kota Bandung.
                </p>
            </span>
        </div>
    </div>
</section>

<section id="testimoni">
    <div class="w-full mx-auto max-w-7xl my-[80px] px-10 lg:px-[100px]">
        <h2 class="text-3xl md:text-[32px] text-center font-bold mb-10">TESTIMONI</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper" data-aos="zoom-in" data-aos-duration="2000">
                <?php foreach ($data['testimonis'] as $testimoni) : ?>
                    <div class="swiper-slide text-center w-full flex flex-col items-center justify-center">
                        <img class="mx-auto w-[168px] h-[168px] rounded-full" src="images/testimoni/<?= $testimoni['image'] ?>" alt="<?= $testimoni['name'] ?>">
                        <h3 class="mt-4"><?= $testimoni['name'] ?></h3>
                        <p class="my-10"><?= $testimoni['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination [&>span]:text-white"></div>
        </div>
    </div>
</section>

<section id="banner">
    <div class="bg-brown_B300 w-full h-auto px-10 md:px-[100px] py-14 flex justify-between flex-wrap gap-y-20">
        <div class="flex items-center gap-2" data-aos="fade-up" data-aos-duration="2000">
            <img src="images/banner-1.svg" alt="banner-1" width="67" height="67">
            <div class="flex flex-col mt-4">
                <h2 class="font-bold text-2xl">Harga Terjangkau</h2>
                <p class="font-normal text-base">Ramah dikantong</p>
            </div>
        </div>
        <div class="flex items-center gap-2" data-aos="fade-up" data-aos-duration="2000">
            <img src="images/banner-2.svg" alt="banner-2" width="67" height="67">
            <div class="flex flex-col">
                <h2 class="font-bold text-2xl">Rasa yang Lezat</h2>
                <p class="font-normal text-base">Tingkat kematangan yang sempurna</p>
            </div>
        </div>
        <div class="flex items-center gap-4" data-aos="fade-up" data-aos-duration="2000">
            <img src="images/banner-3.svg" alt="banner-3" width="50" height="30">
            <div class="flex flex-col">
                <h2 class="font-bold text-2xl">Pelayanan Terbaik</h2>
                <p class="font-normal text-base">Ramah kepada Customer</p>
            </div>
        </div>
    </div>
</section>

<section id="contact-us">
    <div class="bg-brown_B400 w-full px-10 md:px-[100px] py-[76px] flex justify-between flex-wrap gap-y-10 overflow-hidden">
        <div class="font-bold space-y-[17px]">
            <h2 class="text-[40px]">CONTACT US !</h2>
            <p class="text-base">Kami Selalu siap membantu mu!</p>
            <span class="text-xs flex gap-3 items-center">
                <img src="images/icons/mail.svg" alt="mail icon">
                chemarayarotibakarbandung@gmail.com
            </span>
            <span class="text-xs flex gap-3 items-center max-w-[310px]">
                <img src="images/icons/mark.svg" alt="mark icon">
                Jalan Cemara Raya No. 52 RT. 28 RW.03 Perumnas Kayu Tangi, Banjarmasin Utara
            </span>
        </div>

        <form action="">
            <div class="p-6 bg-white rounded-lg w-auto flex flex-col gap-[18px]" data-aos="fade-left" data-aos-duration="2000">
                <input type="nama" id="nama" class="bg-transparent border border-brown_B500 text-brown_B500 text-base rounded-lg block w-full p-2.5" placeholder="Nama" required>
                <span class="flex flex-wrap lg:flex-nowrap gap-2">
                    <input type="email" id="email" class="bg-transparent border border-brown_B500 text-brown_B500 text-base rounded-lg block w-full lg:w-2/3 p-2.5" placeholder="Email kamu" required>
                    <input type="tel" id="tel" class="bg-transparent border border-brown_B500 text-brown_B500 text-base rounded-lg block w-full lg:w-1/3 p-2.5" placeholder="Nomor Telepon" required>
                </span>
                <textarea id="message" class="bg-transparent border border-brown_B500 text-brown_B500 text-base rounded-lg block w-full p-2.5 h-[135px]" placeholder="Pesan" required></textarea>
            </div>
            <button type="submit" class="text-white bg-brown_B500 hover:bg-brownHover font-medium rounded-lg text-sm py-3 px-7 mt-3 text-center" data-aos="fade-up">Kirim</button>
        </form>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(function() {
        $('.button-hamburger').on('click', function() {
            $('#navbar-default').toggleClass('hidden');
        });
        $('#navbar-default ul li').on('click', function() {
            $('#navbar-default').addClass('hidden');
        })
        $('.login-button').on('click', function() {
            Swal.fire({
                title: `Menuju Halaman Login`,
                text: 'Perhatian!! halaman ini hanya untuk admin!',
                icon: "warning",
            }).then((result) => {
                document.location.href = "<?= BASEURL; ?>/login";
            });
        })
    })
</script>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 137,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    const carouselSwiper = new Swiper(".carouselSwiper", {
        spaceBetween: 5,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>