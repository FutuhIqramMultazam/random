<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data Buku
</button>

<h1>Data Buku</h1>

<div class="row">
    <?php foreach ($data["buku"] as $dd): ?>
        <div class="col-sm-6 col-md-4 my-2">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $dd["judul buku"]; ?>
                    <div class="d-flex">
                        <a href="<?= URL_UTAMA ?>DaftarBuku/detail/<?= $dd["id"] ?>" class="badge text-bg-primary rounded-2 text-decoration-none">detail</a>
                        <a href="<?= URL_UTAMA ?>DaftarBuku/hapus/<?= $dd["id"] ?>" class="badge text-bg-danger ms-2 rounded-2 text-decoration-none" onclick="return confirm('Anda yakin akan menghapus nya?'); ">hapus</a>
                    </div>
                </li>
            </ul>
        </div>
    <?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= URL_UTAMA ?>DaftarBuku/tambah" method="post">
                    <div class="mb-3">
                        <label for="judulBuku" class="form-label">Judul Buku</label>
                        <input name="judul_buku" autocomplete="off" type="text" class="form-control" id="judulBuku" placeholder="....">
                    </div>

                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input name="penulis" autocomplete="off" type="text" class="form-control" id="penulis" placeholder="....">
                    </div>

                    <div class="mb-3">
                        <label for="penerbit" class="form-label">penerbit</label>
                        <input name="penerbit" autocomplete="off" type="text" id="penerbit" class="form-control" placeholder="....">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input name="harga" autocomplete="off" type="number" class="form-control" id="email" placeholder="....">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>