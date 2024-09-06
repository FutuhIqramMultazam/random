<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data["judul"] = "Halaman Mahasiswa";
        $data["mhs"] = $this->model("Mahasiswa_model")->getAllData();

        $this->view("layout/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("layout/footer");
    }
    public function detail($id)
    {
        $data["judul"] = "Halaman detail";
        $data["mhs"] = $this->model("Mahasiswa_model")->getDataByid($id);

        $this->view("layout/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("layout/footer");
    }

    public function tambah()
    {
        $post_data = array_map('htmlspecialchars', $_POST);

        // Validasi data kosong
        // if (in_array("", $post_data)) {
        //     Flasher::setFlash("mahasiswa", "Gagal", "danger", " Di tambahkan, Semua field harus diisi.");
        //     header("location:" . URL_UTAMA . "mahasiswa");
        //     exit;
        // }

        if ($this->model('Mahasiswa_model')->tambahDataMhs($post_data) > 0) {
            Flasher::setFlash("mahasiswa", "Berhasil", "success", "di tambahkan");
            header("location:" . URL_UTAMA . "mahasiswa");
            exit;
        } else {
            Flasher::setFlash("mahasiswa", "Gagal", "danger", "di tambahkan");
            header("location:" . URL_UTAMA . "mahasiswa");
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMhs($id) > 0) {
            Flasher::setFlash("mahasiswa", "Berhasil", "success", "di Hapus");
            header("location:" . URL_UTAMA . "mahasiswa");
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model("mahasiswa_model")->getDataByid($_POST["id"]));
    }

    public function ubah()
    {
        $post_data = array_map('htmlspecialchars', $_POST);

        if ($this->model('Mahasiswa_model')->ubahDataMhs($post_data) > 0) {
            Flasher::setFlash("mahasiswa", "Berhasil", "success", "di ubah");
            header("location:" . URL_UTAMA . "mahasiswa");
            exit;
        } else {
            Flasher::setFlash("mahasiswa", "Gagal", "danger", "di ubah");
            header("location:" . URL_UTAMA . "mahasiswa");
            exit;
        }
    }

    public function cari()
    {
        $data["judul"] = "Halaman Mahasiswa";
        $data["mhs"] = $this->model("Mahasiswa_model")->cariDataMhs();

        $this->view("layout/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("layout/footer");
    }
}
