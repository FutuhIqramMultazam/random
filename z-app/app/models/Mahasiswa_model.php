<?php

// Ini mhs model sebelum weapper
class Mahasiswa_model
{
    private $table = "mahasiswa", $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllData()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }
    public function getDataById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function tambahDataMhs($data)
    {
        $query = "INSERT INTO {$this->table} (nama,nim,email,jurusan) VALUES (:nama,:nim,:email,:jurusan)";

        $this->db->query($query);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("nim", $data["nim"]);
        $this->db->bind("email", $data["email"]);
        $this->db->bind("jurusan", $data["jurusan"]);

        $this->db->execute();

        return $this->db->hitung();
    }

    public function hapusDataMhs($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id=:id");
        $this->db->bind("id", $id);

        $this->db->execute();

        return $this->db->hitung();
    }
}
