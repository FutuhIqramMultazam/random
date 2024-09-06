$(function () {
  // add event untuk tambah data
  $(".tampilModalTambah").on("click", function () {
    $("#exampleModalLabel").html("Tambah Data Mahasiswa");
  });

  // add event untuk ubah data
  $(".tampilModalUbah").on("click", function () {
    $("#exampleModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-body form").attr("action", "http://localhost/My-All-Project/z-app/public/Mahasiswa/ubah");

    const id = $(this).data("id"); // ini di bacanya gini, jquery carikan di btn dengan class tampilmodalubah atribut yang namanya data-(id) lalu ambil nilai yang ada di dalam data-id

    $.ajax({
      url: "http://localhost/My-All-Project/z-app/public/Mahasiswa/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        // panggil deh tiap tiap id input yang ada di form lalu kita isi value
        $("#nama").val(data.nama);
        $("#NIM").val(data.nim);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
