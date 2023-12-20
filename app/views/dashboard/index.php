<div class="sm:ml-64">
    <div class="mt-14">
        <!-- semua produk dan tambah produk -->
        <section id="products">
            <div class="relative overflow-x-auto px-8 py-6 bg-brown_B300 h-full">
                <div class="bg-white h-full">
                    <div class="flex gap-2 py-3 px-4 border-b-2 border-black">
                        <img src="<?= BASEURL; ?>/images/icons/hamburger.svg" alt="hamburger icon" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" class="cursor-pointer sm:hidden">
                        <h1 class="font-bold text-2xl">Dashboard</h1>
                    </div>
                    <div class="grid justify-items-center grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-y-6 max-w-5xl py-10">
                        <a href='<?= BASEURL; ?>/dashboard/best_seller' class="w-60 h-auto">
                            <div class="flex justify-between pt-6 pb-[50px] px-7 bg-[#00A65A] rounded-t-md">
                                <div class="text-white">
                                    <span class="font-bold text-lg"><?= count($data['best_seller']); ?></span>
                                    <p class="font-bold text-xs">Best Seller</p>
                                </div>
                                <img src="<?= BASEURL; ?>/images/icons/icon-best-seller.svg" alt="logo best seller" class="pt-[14px]">
                            </div>
                            <div class="bg-[#00924F] text-white text-center py-2 rounded-b-md">
                                <p>Selengkapnya <img src="<?= BASEURL; ?>/images/icons/arrow-right.svg" alt="arrow right logo" class="inline"></p>
                            </div>
                        </a>
                        <a href='<?= BASEURL; ?>/dashboard/products' class="w-60 h-auto">
                            <div class="flex justify-between pt-6 pb-[50px] px-7 bg-[#0073B6] rounded-t-md">
                                <div class="text-white">
                                    <span class="font-bold text-lg"><?= count($data['products']); ?></span>
                                    <p class="font-bold text-xs">Semua Varian</p>
                                </div>
                                <img src="<?= BASEURL; ?>/images/icons/icon-list-blue.svg" alt="logo list" class="pt-[14px]">
                            </div>
                            <div class="bg-[#005F97] text-white text-center py-2 rounded-b-md">
                                <p>Selengkapnya <img src="<?= BASEURL; ?>/images/icons/arrow-right.svg" alt="arrow right logo" class="inline"></p>
                            </div>
                        </a>
                        <?php foreach ($data['categorys'] as $name => $value) : ?>
                            <form action="<?= BASEURL; ?>/dashboard/products/<?= $name ?>" method="post">
                                <input type="hidden" name="keyword" value="<?= $name; ?>">
                                <button class="w-60 h-auto" type="submit">
                                    <div class="flex justify-between pt-6 pb-[50px] px-7 bg-[#D7AB75] rounded-t-md">
                                        <div class="text-start text-white">
                                            <span class="font-bold text-lg"><?= $value; ?></span>
                                            <p class="font-bold text-xs"><?= $name; ?></p>
                                        </div>
                                        <img src="<?= BASEURL; ?>/images/icons/icon-list-brown.svg" alt="logo list" class="pt-[14px]">
                                    </div>
                                    <div class="bg-[#BC9566] text-white text-center py-2 rounded-b-md">
                                        <p>Selengkapnya <img src="<?= BASEURL; ?>/images/icons/arrow-right.svg" alt="arrow right logo" class="inline"></p>
                                    </div>
                                </button>
                            </form>

                        <?php endforeach; ?>
                        <a href='<?= BASEURL; ?>/dashboard/testimoni' class="w-60 h-auto">
                            <div class="flex justify-between pt-6 pb-[50px] px-7 bg-[#DF4A39] rounded-t-md">
                                <div class="text-white">
                                    <span class="font-bold text-lg"><?= count($data['testimoni']); ?></span>
                                    <p class="font-bold text-xs">Testimoni</p>
                                </div>
                                <img src="<?= BASEURL; ?>/images/icons/icon-testimoni.svg" alt="logo testimoni" class="pt-[14px]">
                            </div>
                            <div class="bg-[#CF4333] text-white text-center py-2 rounded-b-md">
                                <p>Selengkapnya <img src="<?= BASEURL; ?>/images/icons/arrow-right.svg" alt="arrow right logo" class="inline"></p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </section>

    </div>

</div>
<!-- menginisiasi flashnya -->
<?php Flasher::flash(); ?>