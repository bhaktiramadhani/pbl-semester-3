$(function () {
  $(".delete-testimoni").on("click", function () {
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
        window.location.href = `http://localhost/chemaraya/dashboard/hapus_testimoni/${id}`;
      }
    });
  });

  $(".tambah-testimoni").on("click", function () {
    $("#modal-title").html("Tambah Testimoni");
    $("#modal-button").html("Tambah Testimoni");
    $("#modal-img").addClass("hidden");
    $("#modal-img").attr("src", "");
    $("#form-testimoni").attr("action", "tambah_testimoni");

    $("#name").val("");
    $("#description").val("");
  });

  $(".edit-testimoni").on("click", function () {
    const id = $(this).data("id");
    $("#modal-title").html("Edit Testimoni");
    $("#modal-button").html("Edit Testimoni");
    $("#modal-img").removeClass("hidden");
    $("#form-testimoni").attr("action", "edit_testimoni");

    $.ajax({
      url: "http://localhost/chemaraya/dashboard/getEditTestimoni",
      data: {
        id: id,
      },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#name").val(data.name);
        $("#modal-img").attr(
          "src",
          `http://localhost/chemaraya/images/testimoni/${data.image}`
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

    reader.onload = function () {
      $("#modal-img").removeClass("hidden");
      $("#modal-img").attr("src", reader.result);
    };

    reader.readAsDataURL(file);
  }
}
