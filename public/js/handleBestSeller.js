$(document).ready(function () {
  $(".delete-best-seller").on("click", function () {
    const productId = $(this).data("id");
    const name = $(this).data("name");
    Swal.fire({
      title: `yakin menghapus "${name}" dari best seller?`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Hapus",
      cancelButtonText: "tidak",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = `http://localhost/chemaraya/dashboard/hapus_best_seller/${productId}`;
      }
    });
  });

  $(".tambah-best-seller").on("click", function () {
    $("#modal-title").html("Tambah Best Seller");
    $("#modal-button").html("Tambah Best Seller");
    $("#name").val("Pilih-Produk");
    $("#urutan").val("Pilih-Urutan");
    $("#form-best-seller").attr("action", "tambah_best_seller");
  });

  $(".edit-best-seller").on("click", function () {
    const id = $(this).data("id");
    $("#modal-title").html("Edit Best Seller");
    $("#modal-button").html("Edit Best Seller");
    $("#form-best-seller").attr("action", "edit_best_seller");

    $.ajax({
      url: "http://localhost/chemaraya/dashboard/getEditBestSeller",
      data: {
        id: id,
      },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#name").val(data.name);
        $("#urutan").val(data.urutan);
        $("#id-best-seller").val(data.id_best_seller);
        $("#id-products").val(data.id_products);
      },
    });
  });
});
