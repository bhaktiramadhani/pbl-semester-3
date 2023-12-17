<header>
    <nav class="bg-brown_B500 py-5 px-5 lg:px-[100px] w-full z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="<?= BASEURL; ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?= BASEURL; ?>/images/logo/logo-chemaraya.svg" alt="Chemaraya Logo" />
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
                        <a href="#menu" class="block bg-white py-1 px-4 rounded-lg text-brown_B800">Menu</a>
                    </li>
                    <li>
                        <a href="#about" class="block bg-white py-1 px-4 rounded-lg text-brown_B800">About Brand</a>
                    </li>
                    <li>
                        <a href="#" class="block bg-white py-1 px-4 rounded-lg text-brown_B800">History</a>
                    </li>
                    <li>
                        <a href="#" class="block bg-white py-1 px-4 rounded-lg text-brown_B800">Testimoni</a>
                    </li>
                    <li>
                        <a href="#" class="block bg-white py-1 px-4 rounded-lg text-brown_B800">Contact Us</a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/login" class="flex justify-center md:hidden gap-2 py-1 px-4 text-white rounded">
                            <img src="images/icons/account.svg" alt="icon login"></a>
                    </li>
                </ul>
            </div>
            <a href="<?= BASEURL; ?>/login" class="hidden md:block" data-tooltip-target="tooltip-to-login">
                <img src="<?= BASEURL; ?>/images/icons/account.svg" alt="Login logo">
            </a>
            <div id="tooltip-to-login" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                Login
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </nav>
</header>