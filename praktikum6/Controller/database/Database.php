<?php

class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "perpustakaan";
    private $koneksi;

    public function _construct(){
        $this->koneksi = new mysql($this->host, $this->username, $this->password, $this->databaseName);
    }

    public function _destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
}