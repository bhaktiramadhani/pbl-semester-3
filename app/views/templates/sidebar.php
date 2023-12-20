<?php
$links = [
    'dashboard' => 'Dashboard',
    'dashboard/products' => 'Products',
    'dashboard/best_seller' => 'Best Seller',
    'dashboard/testimoni' => 'Testimoni',
    'dashboard/akun' => 'Akun',
    'dashboard/profile' => 'Profile',
    'logout' => 'Log Out'
];
$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
unset($url[0], $url[1]);
$url = implode('/', $url);

function getActive($key, $url)
{
    echo $key == $url ? 'active' : '';
}
?>

<!-- bagian aside sebalah kiri -->
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r-4 border-black sm:translate-x-0 " aria-label="Sidebar">
    <div class="h-full px-3 py-5 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <?php foreach ($links as $key => $value) : ?>
                <li>
                    <a href="<?= BASEURL; ?>/<?= $key ?>" class="flex items-center p-2 text-gray-900 rounded-lg group <?php getActive($key, $url); ?>">
                        <img src="<?= BASEURL; ?>/images/icons/<?= $value ?>.svg" alt="<?= $value ?> logo" width="17" height="17">
                        <span class="ms-3 font-bold"><?= $value ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>