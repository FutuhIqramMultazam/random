<h1>Tampilan Data lengkap</h1>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data["buku"]["judul buku"] ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data["buku"]["harga"] ?></h6>
        <p class="card-text"><?= $data["buku"]["penulis"] ?></p>
        <p class="card-text"><?= $data["buku"]["penerbit"] ?></p>
        <a href="<?= URL_UTAMA ?>DaftarBuku" class="card-link">Kembali</a>
    </div>
</div>