<?php

namespace App;
use PDO;

class koneksi {

    protected $db;

    public function __construct()
    {
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=dbartis", "root", "");
        } catch (PDOException $e) {
            die ("Error : " . $e->getMessage());
        }
    }
}