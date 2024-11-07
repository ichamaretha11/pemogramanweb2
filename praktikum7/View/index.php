<?php

require_once "Controller/BukuController.php";

//menjalankan Controller
$app = new BukuController();

//membaca url
$request = $_SERVER["REQUWST_URI"];
$request = parse_url(4request, PHP_URL_PATH);

//mengarahkan request
switch($request){
    case "/":
    case "/index.php":
        $app->jalankan();
        break;
    case "/index.php/simpan":
        $app->simpanBuku();
        break;
    case "/index.php"/hapus":
        $app->hapusBuku();
        break;
    case "/index.php.edit":
        $app->editBuku();
        break;
    case "/index.php/update":
        $app->updateBuku();
        break;
}

$aplikasi = new BukuController();
$aplikasi->jalankan();