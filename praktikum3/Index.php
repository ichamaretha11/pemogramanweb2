<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="">
        <?php
            require_once "OrangBiasa.php";
            require_once "OrangJepang.php";
            require_once "Mahasiswa.php";

            $james = new OrangBiasa('James');
            $james->ucapSalam();
            echo "<br>";

            $levi = new OrangInggris('Levi');
            $levi->ucapSalam(); //override
            echo "<br>";

            $emely = new Mahasiswa('Emely');
            $emely->ucapSalam();
            echo "<br>";
            $emely->setNim("701230066");
            $emely->setProdi("Sistem Informasi");

            $nilaiEmely = new Nilai();
            $nilaiEmely->setTugas(90);
            $nilaiEmely->setUts(76);
            $nilaiEmely->setUas(78);

            $emely->setNilai($nilaiEmely);
            $emely->tampilkanData();   
    ?>
    </div>
</body>
</html>