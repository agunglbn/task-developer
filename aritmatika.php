<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Ganjil Genap</title>

</head>

<body>
    <?php $angka = 17; // Inisialisasi variabel angka dengan nilai 17

    if ($angka % 2 == 0) { //Kondisi jika angka dimasukkan bernilai genap 
        echo "$angka = Even"; // Maka akan menampilkan Kata  Even
    } else {
        echo "$angka = OODS"; //Jika Ganjil Akan Menampilkan Kata OODS
    } ?>

    <button onclick="window.location.href='day.php'"> Next</button>

</body>

</html>