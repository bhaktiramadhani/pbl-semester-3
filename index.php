<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemaraya</title>
    <link rel="stylesheet" href="node_modules/flowbite/dist/flowbite.css">
    <link rel="stylesheet" href="assets/css/output.css">

</head>

<body class="bg-gray-200">
    <header>
        <nav class="bg-brown py-3 px-5 lg:px-[100px] fixed top-0 left-0 w-full z-50">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
                <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="assets/images/logo-chemaraya.svg" alt="Chemaraya Logo" />
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white hover:text-brown rounded-lg md:hidden hover:bg-white focus:outline-none focus:ring-2 focus:ring-white dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-4 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#home" class="block py-2 px-3 text-black rounded hover:underline hover:underline-offset-8  dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                        </li>
                        <li>
                            <a href="#best-product" class="block py-2 px-3 text-white rounded hover:underline hover:underline-offset-8  dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Best
                                Product</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-white rounded hover:underline hover:underline-offset-8  dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Menu</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-white rounded hover:underline hover:underline-offset-8  dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-white rounded hover:underline hover:underline-offset-8  dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">History</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-white rounded hover:underline hover:underline-offset-8  dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                        </li>
                        <li>
                            <a href="login.php" class="block md:hidden gap-2 py-2 px-3 text-white rounded hover:underline hover:underline-offset-8  dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                <img src="assets/images/icons/account.svg" alt="icon login"></a>
                        </li>
                    </ul>
                </div>
                <a href="login.php" class="hidden md:block" data-tooltip-target="tooltip-to-login">
                    <img src="assets/images/icons/account.svg" alt="">
                </a>
                <div id="tooltip-to-login" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Login
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
        </nav>
    </header>
    <section id="home">
        <div id="default-carousel" class="w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden md:h-[500px] mt-[104px]">
                <!-- Item 1 -->
                <div class="hidden duration-[2000ms] ease-in-out" data-carousel-item>
                    <img src="assets/images/best-1.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-[2000ms] ease-in-out" data-carousel-item>
                    <img src="assets/images/best-2.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-[2000ms] ease-in-out" data-carousel-item>
                    <img src="assets/images/best-3.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                </div>
                <div class="hidden duration-[2000ms] ease-in-out" data-carousel-item>
                    <img src="assets/images/best-1.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                </div>
                <div class="hidden duration-[2000ms] ease-in-out" data-carousel-item>
                    <img src="assets/images/best-2.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                </div>
            </div>
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
                    <button id="dropdownHoverButton1" data-dropdown-toggle="dropdownHover1" class="text-white bg-brown  hover:bg-[#deb584] focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center " type="button">Ekonomis <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownHover1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton1">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomis + Ekonomis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomis + Medium</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomis + Premium</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-auto">
                    <button id="dropdownHoverButton2" data-dropdown-toggle="dropdownHover2" class="text-white bg-brown  hover:bg-[#deb584] focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center " type="button">Medium <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownHover2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton2">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomis + Ekonomis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomis + Medium</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomis + Premium</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-auto">
                    <button id="dropdownHoverButton3" data-dropdown-toggle="dropdownHover3" class="text-white bg-brown  hover:bg-[#deb584] focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center " type="button">Premium <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownHover3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton3">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomis + Ekonomis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomis + Medium</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomis + Premium</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-6 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 w-full lg:mx-auto">
                <div class="h-72 m-2 bg-slate-500 relative block overflow-hidden rounded-md cursor-pointer group">
                    <img src="assets/images/best-1.jpeg" alt="" class="w-full h-full object-cover rounded-md transition-all duration-300 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-0 font-bold text-center text-white w-full bg-slate-400 p-2">
                        <h4>Blueberry</h4>
                        <span>Rp. 100.000</span>
                    </div>
                </div>
                <div class="h-72 m-2 bg-slate-500 relative block overflow-hidden rounded-md cursor-pointer group">
                    <img src="assets/images/best-1.jpeg" alt="" class="w-full h-full object-cover rounded-md transition-all duration-300 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-0 font-bold text-center text-white w-full bg-slate-400 p-2">
                        <h4>Blueberry</h4>
                        <span>Rp. 100.000</span>
                    </div>
                </div>
                <div class="h-72 m-2 bg-slate-500 relative block overflow-hidden rounded-md cursor-pointer group">
                    <img src="assets/images/best-1.jpeg" alt="" class="w-full h-full object-cover rounded-md transition-all duration-300 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-0 font-bold text-center text-white w-full bg-slate-400 p-2">
                        <h4>Blueberry</h4>
                        <span>Rp. 100.000</span>
                    </div>
                </div>
                <div class="h-72 m-2 bg-slate-500 relative block overflow-hidden rounded-md cursor-pointer group">
                    <img src="assets/images/best-1.jpeg" alt="" class="w-full h-full object-cover rounded-md transition-all duration-300 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-0 font-bold text-center text-white w-full bg-slate-400 p-2">
                        <h4>Blueberry</h4>
                        <span>Rp. 100.000</span>
                    </div>
                </div>
            </div>
        </div>

    </section>






    <script src="node_modules/flowbite/dist/flowbite.js"></script>
</body>

</html>