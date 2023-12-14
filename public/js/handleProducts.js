$(function () {
  $(".delete-product").on("click", function () {
    const productId = $(this).data("id");
    const name = $(this).data("name");
    Swal.fire({
      title: `yakin menghapus "${name}"?`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Hapus",
      cancelButtonText: "tidak",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = `http://localhost/chemaraya/dashboard/hapus_product/${productId}`;
      }
    });
  });

  $(".tambah-produk").on("click", function () {
    $("#modal-title").html("Tambah Produk");
    $("#modal-button").html("Tambah Produk");
    $("#modal-img").addClass("hidden");
    $("#modal-img").attr("src", "");
    $("#form-produk").attr("action", "tambah_product");

    $("#name").val("");
    $("#category").val("");
    $("#price").val("");
    $("#description").val("");
    $("#link_gojek").val("");
    $("#link_grab").val("");
    $("#image-name").val("");
    $("#id").val("");
    $("#file_input").val("");
  });

  $(".edit-produk").on("click", function () {
    const id = $(this).data("id");
    $("#modal-title").html("Edit Produk");
    $("#modal-title").html("Edit Produk");
    $(".modal-button").html("Edit Produk");
    $("#modal-img").removeClass("hidden");
    $("#form-produk").attr("action", "edit_product");

    $.ajax({
      url: "http://localhost/chemaraya/dashboard/getEditProduct",
      data: {
        id: id,
      },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#name").val(data.name);
        $("#modal-img").attr(
          "src",
          `http://localhost/chemaraya/images/produk/${data.image}`
        );
        $("#category").val(data.id_category);
        $("#price").val(data.price);
        $("#description").val(data.description);
        $("#link_gojek").val(data.link_gojek);
        $("#link_grab").val(data.link_grab);
        $("#image-name").val(data.image);
        $("#id").val(data.id_products);
      },
    });
  });

  $("#search").change(function () {
    $("#form-search").attr(
      "action",
      `http://localhost/chemaraya/dashboard/products/${$(this).val()}`
    );
  });
});

function previewFile(input) {
  var file = $("input[type=file]").get(0).files[0];

  if (file) {
    var reader = new FileReader();

    reader.onload = function () {
      $("#modal-img").removeClass("hidden");
      $("#modal-img").attr("src", reader.result);
    };

    reader.readAsDataURL(file);
  }
}
