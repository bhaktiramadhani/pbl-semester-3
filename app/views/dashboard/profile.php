<!-- konten utama -->
<div class="sm:ml-64">
    <div class="mt-14">
        <!-- semua produk dan tambah produk -->
        <section id="products">
            <div class="relative overflow-x-auto px-8 py-6 bg-brown_B300 h-full">
                <div class="bg-white">
                    <div class="flex gap-2 py-3 px-4 border-b-2 border-black">
                        <img src="<?= BASEURL; ?>/images/icons/hamburger.svg" alt="hamburger icon" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" class="cursor-pointer sm:hidden">
                        <h1 class="font-bold text-2xl">Profile</h1>
                    </div>
                    <div class="py-10 px-12 max-w-md mx-auto">
                        <form action="<?= BASEURL ?>/dashboard/editProfile" method="post" class="flex flex-col justify-center items-center" enctype="multipart/form-data">
                            <input type="hidden" name="image-name" value="<?= $data['user']['image'] ?>">
                            <input type="hidden" name="user-id" value="<?= $data['user']['user_id'] ?>">
                            <img class="w-[120px] h-[120px] rounded-full mb-11 object-cover" id="img" src="<?= BASEURL; ?>/images/users/<?= $data['user']['image'] ?>" alt="Rounded avatar">
                            <input id="file_input" type="file" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" accept="image/*" onchange="previewFile(this);">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300 mb-11" id="file_input_help">JPG, JPEG, PNG (MAX. 2MB).</p>
                            <div class="w-full space-y-4">
                                <div class="w-full">
                                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="username..." required="" value="<?= $data['user']['username'] ?>">
                                </div>
                                <div class="w-full">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 cursor-not-allowed" placeholder="email..." required="" value="<?= $data['user']['email'] ?>" disabled>
                                </div>
                                <div class="w-full">
                                    <label for="password-lama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Lama</label>
                                    <input type="password" name="password-lama" id="password-lama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="password lama...">
                                </div>
                                <div class="w-full">
                                    <label for="password-baru" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Baru</label>
                                    <input type="password" name="password-baru" id="password-baru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="password baru...">
                                </div>

                            </div>
                            <button class="bg-green_G400 py-2 px-8 rounded-lg text-white font-bold mt-8 self-start">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#img").attr("src", reader.result);
            };

            reader.readAsDataURL(file);
        }
    }
</script>


<!-- menginisiasi flashnya -->
<?php Flasher::flash(); ?>