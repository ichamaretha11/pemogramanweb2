<!DOCTYPE html>
<?php
    $value = "ini adalah Cookie pertama";
    $value2 = "ini adalah cookie kedua menggunakan exprie time";
    if(isset($_COOKIE['firts_cookie']))
        setcookie('firts_cookie', $value);

    if(isset($_COOKIE['second_cookie']))
        setcookie('second_cookie', $value2, time() + 60 * 60 * 24 * 30)
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Implementasi Cookie</h1>
    <?php
         if(isset($_COOKIE['firts_cookie'])){
              echo $_COOKIE['firts_cookie'];
         }else{
            echo "cookie belum diset";
       }

       echo "<br />";
         
           if(isset($_COOKIE['second_cookie'])){
             echo $_COOKIE['second_cookie'];
         }else{
             echo "cookie kedua belum diset"; 
       }

       if(isset($_COOKIE['firts_cooki']))
            setcookie('firts_cookie'); //menghapus cookie firts_cookie
       ?>
       
    
</body>
</html>