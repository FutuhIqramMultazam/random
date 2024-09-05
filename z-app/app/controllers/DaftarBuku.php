<?php

class DaftarBuku extends Controller
{
    public function index()
    {
        $data["judul"] = "Daftar Buku";
        $data["buku"] = $this->model("Buku_model")->getAllData();

        $this->view("layout/header", $data);
        $this->view("daftar_buku/index", $data);
        $this->view("layout/footer");
    }

    public function detail($id)
    {
        $data["judul"] = "Halaman detail";
        $data["buku"] = $this->model("Buku_model")->getDataByid($id);

        $this->view("layout/header", $data);
        $this->view("daftar_buku/detail", $data);
        $this->view("layout/footer");
    }

    public function tambah()
    {
        $post_data = array_map('htmlspecialchars', $_POST);

        // Validasi data kosong
        if (in_array("", $post_data)) {
            Flasher::setFlash("buku", "Gagal", "danger", " Di tambahkan, Semua field harus diisi.");
            header("location:" . URL_UTAMA . "DaftarBuku");
            exit;
        }

        if ($this->model('Buku_model')->tambahDataBuku($post_data) > 0) {
            Flasher::setFlash("buku", "Berhasil", "success", "Di tambahkan");
            header("location:" . URL_UTAMA . "DaftarBuku");
            exit;
        } else {
            Flasher::setFlash("buku", "Gagal", "danger", "Di tambahkan");
            header("location:" . URL_UTAMA . "DaftarBuku");
            exit;
        }
    }

    public function hapus($id)
    {

        if ($this->model("Buku_model")->hapus($id) > 0) {
            Flasher::setFlash("buku", "Berhasil", "success", "Di hapus");
            header("Location:" . URL_UTAMA . "daftarBuku");
            exit;
        } else {
            Flasher::setFlash("buku", "Gagal", "danger", "Di hapus");
            header("Location:" . URL_UTAMA . "daftarBuku");
            exit;
        }
    }
}
