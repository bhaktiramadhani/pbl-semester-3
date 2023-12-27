<!-- konten utama -->
<div class="sm:ml-64">
    <div class="mt-14">
        <!-- semua produk dan tambah produk -->
        <section id="products">
            <div class="relative overflow-x-auto px-8 py-6 bg-brown_B300 h-full">
                <div class="bg-white">
                    <div class="flex gap-2 py-3 px-4 border-b-2 border-black">
                        <img src="<?= BASEURL; ?>/images/icons/hamburger.svg" alt="hamburger icon" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" class="cursor-pointer sm:hidden">
                        <h1 class="font-bold text-2xl">Testimoni</h1>
                    </div>
                    <div class="py-10 px-12">
                        <div class="pb-4 bg-white dark:bg-gray-900">
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative mt-1 flex flex-wrap justify-between gap-4">
                                <form action="<?= BASEURL; ?>/dashboard/testimoni/" method="post" id="form-search" class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="search" name="keyword" class="block pl-8 pt-2 text-sm text-gray-900 border border-black rounded-[3px] w-60 bg-gray-50  placeholder:text-black focus:ring-0 focus:border-black" placeholder="Cari Produk..." autofocus autocomplete="off" value="<?= $data['keyword'] ?>">
                                </form>
                                <button data-modal-target="modal" data-modal-toggle="modal" class="tambah-best-seller text-white bg-brown hover:bg-brownHover font-medium rounded-[3px] text-sm w-auto sm:w-auto px-5 py-2.5 text-center transition-all duration-200 ease-in-out tambah-testimoni">Tambah Testimoni <img src="<?= BASEURL; ?>/images/icons/plus.svg" alt="icon plus" class="inline ml-7"></button>
                            </div>
                        </div>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-gray-500 dark:text-gray-400 border-separate border-spacing-1">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            Nama Customer
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            Gambar
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-[#FFE192]">
                                            Testimoni
                                        </th>
                                        <th scope="col" class="w-[10%] px-6 py-3 bg-[#FFE192]">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data['testimonis'] as $testimoni) : ?>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <?= $no ?>
                                            </th>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <?= $testimoni['name']; ?>
                                            </th>
                                            <td class="px-6 py-4">
                                                <img src="<?= BASEURL; ?>/images/testimoni/<?= $testimoni['image']; ?>" alt="" class="w-20">
                                            </td>
                                            <td class="px-6 py-4">
                                                <?= $testimoni['description']; ?>
                                            </td>
                                            <td class="px-6 py-4 space-y-2">
                                                <a href="#" data-modal-target="modal" data-modal-toggle="modal" class="font-medium text-white bg-green_G400 w-[77px] text-center py-2 px-4 rounded-lg inline-block edit-testimoni" data-id="<?= $testimoni['id_testimoni'] ?>">Edit</a>
                                                <a href="#" class="font-medium text-white bg-pink_P500 text-center w-[77px] py-2 px-4 rounded-lg inline-block delete-testimoni" data-id="<?= $testimoni['id_testimoni'] ?>" data-name="<?= $testimoni['name'] ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    <!-- Main modal tambah produk -->
    <div id="modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="modal-title">
                        Tambah Testimoni
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <form action="tambah_testimoni" method="post" enctype="multipart/form-data" id="form-testimoni">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <input type="hidden" name="image-name" id="image-name">
                            <input type="hidden" name="id-testimoni" id="id-testimoni">
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Customer</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="nama..." required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                                <img src="" alt="" id="modal-img" class="mb-2">
                                <input id="file_input" type="file" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" accept="image/*" onchange="previewFile(this);">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">JPG, JPEG, PNG (MAX. 2MB).</p>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Testimoni</label>
                                <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="testimoni..."></textarea>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-brown rounded-lg hover:bg-brownHover transition-all duration-200 ease-in-out" id="modal-button">Tambah Testimoni</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(function() {
        $(".delete-testimoni").on("click", function() {
            const id = $(this).data("id");
            const name = $(this).data("name");
            Swal.fire({
                title: `yakin menghapus customer "${name}" ?`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Hapus",
                cancelButtonText: "tidak",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `<?= BASEURL; ?>/dashboard/hapus_testimoni/${id}`;
                }
            });
        });

        $(".tambah-testimoni").on("click", function() {
            $("#modal-title").html("Tambah Testimoni");
            $("#modal-button").html("Tambah Testimoni");
            $("#modal-img").addClass("hidden");
            $("#modal-img").attr("src", "");
            $("#form-testimoni").attr("action", "tambah_testimoni");

            $("#name").val("");
            $("#description").val("");
        });

        $(".edit-testimoni").on("click", function() {
            const id = $(this).data("id");
            $("#modal-title").html("Edit Testimoni");
            $("#modal-button").html("Edit Testimoni");
            $("#modal-img").removeClass("hidden");
            $("#form-testimoni").attr("action", "edit_testimoni");

            $.ajax({
                url: "<?= BASEURL; ?>/dashboard/getEditTestimoni",
                data: {
                    id: id,
                },
                method: "post",
                dataType: "json",
                success: function(data) {
                    $("#name").val(data.name);
                    $("#modal-img").attr(
                        "src",
                        `<?= BASEURL; ?>/images/testimoni/${data.image}`
                    );
                    $("#description").val(data.description);
                    $("#image-name").val(data.image);
                    $("#id-testimoni").val(data.id_testimoni);
                },
            });
        });
    });

    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#modal-img").removeClass("hidden");
                $("#modal-img").attr("src", reader.result);
            };

            reader.readAsDataURL(file);
        }
    }
</script>
<!-- menginisiasi flasher -->
<?php Flasher::flash(); ?>