<div class="w-full h-screen flex flex-col justify-center items-center mx-auto max-w-xs">
    <div class="flex justify-center w-full mb-8">
        <a href="<?= BASEURL; ?>">
            <img src="<?= BASEURL; ?>/images/logo/logo-chemaraya.svg" alt="logo chemaraya" width="200">
        </a>
    </div>
    <h1 class="font-bold mb-4 text-2xl">Login</h1>
    <a href="<?= BASEURL; ?>" class="self-start flex gap-2 items-center  rounded-md mb-4 group" data-tooltip-target="tooltip-to-home">
        <img src="images/icons/arrow-back.svg" alt="panah kembali" width="30" class="group-hover:-translate-x-1.5 transition-all duration-400 ease-in">
        Kembali ke Beranda
    </a>
    <div id="tooltip-to-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
        Home
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <form class="flex flex-col justify-center w-full" action="login/verify_login" method="POST">
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-brown peer" placeholder=" " required />
            <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-brown aria-pressed: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-brown peer" placeholder=" " required />
            <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-brown aria-pressed: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
        </div>

        <button type="submit" class="text-white bg-brown hover:bg-brownHover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-200 ease-in-out" name="submit">Login</button>
        <a href="ForgotPassword" class="self-end mt-4 font-normal underline underline-offset-4 hover:no-underline text-sm">Lupa Password</a>
    </form>
    <a href="register" class="self-start mt-4 font-normal underline underline-offset-4 hover:no-underline text-sm">Ke halaman Register</a>
</div>

<!-- menginisiasi flashnya -->
<?php Flasher::flash(); ?>