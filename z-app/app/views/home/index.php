<h1>Selamat datang di Home Page</h1>
<p class="lead"><?= $data["nama"] ?></p>
<button class="btn btn-primary" id="tombol">coba tekan</button>


<script>
    const tombol = document.getElementById('tombol');

    tombol.addEventListener("click", function() {
        Swal.fire({
            title: "Assalamualaikum",
            text: "Terima kasih telah menekan tombol nya, ini menggunakan sweet alert",
            icon: "success",
            confirmButtonText: "Tutup",
            showClass: {
                popup: `animate__animated animate__zoomInDown animate__faster`
            },
            hideClass: {
                popup: `animate__animated animate__hinge`
            }
        });
    })
</script>