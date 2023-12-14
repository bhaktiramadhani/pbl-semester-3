<header>
    <nav class="bg-brown_B500 py-5 px-5 lg:px-[100px] w-full z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="<?= BASEURL; ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo-chemaraya.svg" alt="Chemaraya Logo" />
                <h1 class="text-base font-semibold text-white md:hidden lg:block">Chemaraya</h1>
            </a>
            <button type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white hover:text-brown rounded-lg md:hidden hover:bg-white focus:outline-none focus:ring-2 focus:ring-white  button-hamburger" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col space-y-4 w-1/2 md:w-auto mx-auto p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-4 md:space-y-0 rtl:space-x-reverse md:mt-0 md:border-0 text-center">
                    <li>
                        <a href="#home" class="block bg-white py-1 px-4 rounded-lg  text-brown_B800">Home</a>
                    </li>
                    <li>
                        <a href="#best-product" class="block bg-white py-1 px-4 rounded-lg  text-brown_B800">Best Product</a>
                    </li>
                    <li>
                        <a href="#" class="block bg-white py-1 px-4 rounded-lg text-brown_B800">Menu</a>
                    </li>
                    <li>
                        <a href="#" class="block bg-white py-1 px-4 rounded-lg text-brown_B800">About</a>
                    </li>
                    <li>
                        <a href="#" class="block bg-white py-1 px-4 rounded-lg text-brown_B800">History</a>
                    </li>
                    <li>
                        <a href="#" class="block bg-white py-1 px-4 rounded-lg text-brown_B800">Contact</a>
                    </li>
                    <li>
                        <a href="login" class="flex justify-center md:hidden gap-2 py-1 px-4 text-white rounded">
                            <img src="images/icons/account.svg" alt="icon login"></a>
                    </li>
                </ul>
            </div>
            <a href="login" class="hidden md:block" data-tooltip-target="tooltip-to-login">
                <img src="images/icons/account.svg" alt="Login logo">
            </a>
            <div id="tooltip-to-login" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                Login
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </nav>
</header>
<section id="home">
    <div id="carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[280px] sm:h-96 md:h-[425px] overflow-hidden carousel-wrapper lg:h-[600px] xl:h-[700px]">
            <!-- Item 1 -->
            <div class="hidden duration-400 ease-in-out" data-carousel-item>
                <img src="images/1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover object-bottom aspect-video max-w-8xl" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-400 ease-in-out" data-carousel-item>
                <img src="images/2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover object-bottom aspect-video max-w-8xl" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-400 ease-in-out" data-carousel-item>
                <img src="images/3.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover object-bottom aspect-video max-w-8xl" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


</section>
<section id="best-product" class="scroll-mt-20">
    <div class="py-12 text-[32px] text-center mx-5 lg:mx-[100px]">
        <h2 class="text-3xl md:text-[32px] font-bold">Best Product</h2>
        <div class="mt-8 flex flex-wrap-reverse justify-center w-full lg:mx-auto gap-y-5">
            <!-- Column -->
            <div class="my-1 px-2 w-1/2 md:w-1/3 lg:my-4 lg:px-4 space-y-3">
                <a href="#" class="h-96">
                    <div class="block overflow-hidden rounded-md group">
                        <img alt="Placeholder" class="h-60 block w-full rounded-md shadow-sm object-cover object-center transition-all duration-300 ease-in-out group-hover:scale-110" src="assets/images/best-2.jpeg">
                    </div>
                </a>
                <h3 class="font-semibold text-base md:text-xl lg:text-2xl">Blueberry</h3>
            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-3/4 sm:w-2/3 md:w-1/3 lg:px-4 md:-mt-3 space-y-3 order-1 md:order-none">
                <a href="#" class="h-96">
                    <div class="block overflow-hidden rounded-md group">
                        <img alt="Placeholder" class="h-60 block w-full rounded-md shadow-sm object-cover object-center transition-all duration-300 ease-in-out group-hover:scale-110" src="assets/images/best-1.jpeg">
                    </div>
                </a>
                <h3 class="font-semibold text-base md:text-2xl lg:text-[28px]">Choco Cruncy</h3>
            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-2 w-1/2 md:w-1/3 lg:my-4 lg:px-4  space-y-3">
                <a href="#" class="h-96">
                    <div class="block overflow-hidden rounded-md group">
                        <img alt="Placeholder" class="h-60 block w-full rounded-md shadow-sm object-cover object-center transition-all duration-300 ease-in-out group-hover:scale-110" src="assets/images/best-3.jpeg">
                    </div>
                </a>
                <h3 class="font-semibold text-base md:text-xl lg:text-2xl">Tiramisu Crunchy</h3>
            </div>
            <!-- END Column -->
        </div>
</section>
<section id="menu">
    <div class="py-12 mx-5 lg:mx-[100px]">
        <h2 class="text-3xl md:text-[32px] text-center font-bold">Menu</h2>
        <div class="mt-8 flex flex-col md:flex-row gap-3 justify-center items-center">

            <div class="w-auto">

                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="text-white bg-brown_B500 hover:bg-brownHover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Varian <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownDefaultCheckbox" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                        <li>
                            <div class="flex items-center">
                                <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input checked id="checkbox-item-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="mt-6 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 w-full lg:mx-auto">
            <div class="h-[449px] m-2 relative block overflow-hidden rounded-md cursor-pointer group">
                <div style="background: url('images/produk/Produk1.png');" class="absolute top-0 left-0 w-full h-full transition-all  group-hover:scale-110 bg-center bg-cover"></div>
            </div>
        </div>
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
    })
</script>