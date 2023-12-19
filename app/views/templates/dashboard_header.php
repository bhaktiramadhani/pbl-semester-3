<nav class="fixed top-0 z-50 w-full bg-brown border-b-2 border-black dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <a href="<?= BASEURL; ?>" class="flex ms-2 md:me-24">
                    <img src="<?= BASEURL; ?>/images/logo/logo-chemaraya.svg" class="h-10 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-sm font-semibold whitespace-nowrap text-white">Chemaraya</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div class="flex items-center gap-3">
                        <img class="w-8 h-8 rounded-full object-cover" src="<?= BASEURL; ?>/images/users/<?= $data['user']['image'] ?>" alt="user photo">
                        <span class="text-white text-sm font-light">Halo, <?= $data['user']['username']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>