<?php

class Flasher
{
    public static function setFlash($nama_data, $pesan, $tipe, $aksi)
    {
        $_SESSION["flash"] = [
            'nama_data' => $nama_data,
            'pesan' => $pesan,
            'tipe' => $tipe,
            'aksi' => $aksi,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION["flash"])) {
            echo "<div class=\" top-0  position-absolute alert alert-{$_SESSION["flash"]["tipe"]} alert-dismissible fade show\" role=\"alert\">
            Data {$_SESSION["flash"]["nama_data"]} <strong>{$_SESSION["flash"]["pesan"]}</strong> {$_SESSION["flash"]["aksi"]}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
          </div>";
            unset($_SESSION["flash"]);
        }
    }
}
