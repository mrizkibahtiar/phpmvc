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

    // menyambungkan ke database dengan PDO(PHP data object(lebih fleksibel daripada menggunakan mysqli))
    private $dbh; // database handler(koneksi ke database)
    private $stmt; // statement(nyimpen query)


    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}