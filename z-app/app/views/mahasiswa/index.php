<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data Mahasiswa
</button>

<h1>Data Mahasiswa</h1>

<div class="row">
    <div class="col-md-5">
        <ul class="list-group">
            <?php foreach ($data["mhs"] as $dd): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $dd["nama"]; ?>
                    <div class="d-flex">
                        <a href="<?= URL_UTAMA ?>mahasiswa/detail/<?= $dd["id"] ?>" class="badge text-bg-primary rounded-2 text-decoration-none">detail</a>
                        <a href="<?= URL_UTAMA ?>mahasiswa/hapus/<?= $dd["id"] ?>" class="badge ms-2 text-bg-danger rounded-2 text-decoration-none" onclick="return confirm('Anda yakin akan menghapus nya?')">hapus</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
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

                <form action="<?= URL_UTAMA ?>mahasiswa/tambah" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="nama" autocomplete="off" type="text" class="form-control" id="nama" placeholder="....">
                    </div>

                    <div class="mb-3">
                        <label for="NIM" class="form-label">NIM</label>
                        <input name="nim" autocomplete="off" type="number" class="form-control" id="NIM" placeholder="....">
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-select" aria-label="Default select example">
                            <option disabled selected>Open this select menu</option>
                            <option value="Sistem Informasi">Sistem Infromasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" autocomplete="off" type="email" class="form-control" id="email" placeholder="....">
                    </div>

            </div>
            <div class="modal-footer">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>