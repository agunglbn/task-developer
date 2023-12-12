<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Perulangan</title>
</head>

<body>
    <?php

    for ($i = 1; $i <= 8; $i++) { // Memanggil Kondisi Dimana Nilai $i dimulai dari 1 dan batas 8 baris
        for ($j = 1; $j <= $i; $j++) { //Kondisi $J dimana nilai $J tidak boleh lebih dari batas nilai $i
            echo "*"; // Lalu tampilkan perintah Simbol
        }
        echo "<br>"; // Buat tampilan menjadi kebawah setiap perulangan terjadi
    }

    ?>
    <button onclick="window.location.href='bilprima.php'"> Next</button>

</body>

</html>