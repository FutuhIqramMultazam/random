<?php

class About extends Controller
{
    public function index($nama = "(blm di isi)", $usia = "(blm di isi)", $pekerjaan = "(blm di isi)")
    {
        $data["nama"] = $nama;
        $data["usia"] = $usia;
        $data["pekerjaan"] = $pekerjaan;
        $data["judul"] = "About Me";

        $this->view("layout/header", $data);
        $this->view("About/index", $data);
        $this->view("layout/footer");
    }
}
