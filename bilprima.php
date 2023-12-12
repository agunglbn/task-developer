<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Bilangan Prima</title>
</head>

<body>
    <?php
    // Mendefinisikan fungsi untuk mengecek apakah suatu angka adalah bilangan prima
    $nilai = 100; // Masukkan Nilai yang akan di jadikan deretan bilangan prima
    for ($i = 1; $i <= $nilai; $i++) {
        $a = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) { // Jika i dibagi j habis dibagi atau menjadi 0 maka lanjutkan ke $a++ ;
                $a++;
            }
        }
        if ($a == 2) { // mengecek apakah bilangan prima atau engga
            echo   $i . ',';
        }
    }
    ?>
    <button onclick="window.location.href='segitiga.php'"> Next</button>

</body>

</html>