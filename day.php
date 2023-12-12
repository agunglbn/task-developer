<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Day</title>
</head>

<body>
    <?php
    $hari = 2; // Ganti nilai variabel $hari sesuai kebutuhan (0-6)

    switch ($hari) {
        case 0:
            echo "Sunday";
            break;
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        default:
            echo "Invalid day"; // Jika Nilai yang dimasukkan diluar nilai 0 - 6
    }


    ?>
    <button onclick="window.location.href='perulangan.php'"> Next</button>

</body>

</html>