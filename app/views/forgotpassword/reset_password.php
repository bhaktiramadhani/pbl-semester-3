<div class="w-full h-screen flex flex-col justify-center items-center mx-auto max-w-xs">
    <div class="flex justify-center w-full mb-8">
        <a href="<?= BASEURL; ?>">
            <img src="<?= BASEURL; ?>/images/logo/logo-chemaraya.svg" alt="logo chemaraya" width="200">
        </a>
    </div>
    <h1 class="font-bold mb-4 text-2xl">Reset Password</h1>

    <form class="flex flex-col justify-center w-full" action="<?= BASEURL; ?>/ForgotPassword/verify_reset_password" method="POST">
        <div class="relative z-0 w-full mb-6 group">
            <input type="hidden" name="email" id="email" value="<?= $data['email']; ?>">
            <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-brown peer" placeholder="" required />
            <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-brown aria-pressed: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
        </div>
        <button type="submit" class="text-white bg-brown hover:bg-brownHover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-200 ease-in-out" name="submit">Kirim</button>
    </form>
</div>

<!-- menginisiasi flashnya -->
<?php Flasher::flash(); ?>