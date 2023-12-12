<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

    <?php
    // Class "Bentuk" dengan fungsi segitiga
    class Bentuk
    {
        protected $ukuran;
        // Constructor untuk menginisialisasi variabel $ukuran
        public function __construct($ukuran)
        {
            $this->ukuran = $ukuran;
        }

        // Fungsi untuk menampilkan segitiga sesuai dengan ukuran
        public function segitiga()
        {
            // Membuat pola segitiga
            for ($i = 1; $i <= $this->ukuran; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            echo "<br>";
        }
    }

    // Class "BentukDua" yang mewarisi class "Bentuk"
    class BentukDua extends Bentuk
    {
        // Fungsi untuk menampilkan kotak sesuai dengan ukuran
        public function kotak()
        {
            // Membuat pola kotak
            for ($i = 1; $i <= $this->ukuran; $i++) {
                for ($j = 1; $j <= $this->ukuran; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
        }
    }

    // Membuat objek dari class Bentuk dengan ukuran 5
    $objekSatu = new Bentuk(5);
    // Memanggil fungsi segitiga untuk menampilkan pola segitiga
    $objekSatu->segitiga();
    // Membuat objek dari class BentukDua dengan ukuran 5
    $objekDua = new BentukDua(5);
    // Memanggil fungsi kotak untuk menampilkan pola kotak
    $objekDua->kotak();

    ?>
    <button onclick="window.location.href='bilprima.php'"> Next</button>

</body>

</html>