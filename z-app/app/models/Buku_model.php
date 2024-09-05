<?php
class Buku_model
{
    private $table = "daftar buku", $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllData()
    {
        $this->db->query("SELECT * FROM `{$this->table}`");
        return $this->db->resultSet();
    }
    public function getDataById($id)
    {
        $this->db->query("SELECT * FROM `{$this->table}` WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function tambahDataBuku($data)
    {
        $query = "INSERT INTO `daftar buku` (`judul buku`,penulis,penerbit,harga) VALUES (:judul_buku,:penulis,:penerbit,:harga)";

        $this->db->query($query);
        $this->db->bind("judul_buku", $data["judul_buku"]);
        $this->db->bind("penulis", $data["penulis"]);
        $this->db->bind("penerbit", $data["penerbit"]);
        $this->db->bind("harga", $data["harga"]);

        $this->db->execute();

        return $this->db->hitung();
    }

    public function hapus($id)
    {
        $this->db->query("DELETE FROM `{$this->table}` WHERE id=:id");
        $this->db->bind("id", $id);

        $this->db->execute();

        return $this->db->hitung();
    }
}
