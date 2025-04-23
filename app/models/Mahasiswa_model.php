<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Muhammad Rizki Bahtiar",
    //         "nrp" => '223307014',
    //         "email" => "bahtiar@gmail.com",
    //         "jurusan" => "Teknologi Informasi"
    //     ],
    //     [
    //         "nama" => "Rini Andayani",
    //         "nrp" => '223307015',
    //         "email" => "riniandayani@gmail.com",
    //         "jurusan" => "Akuntansi"
    //     ],
    //     [
    //         "nama" => "Rini Putri Bahtiar",
    //         "nrp" => '223307016',
    //         "email" => "riniput@gmail.com",
    //         "jurusan" => "Teknik Kelautan"
    //     ]
    // ];

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}