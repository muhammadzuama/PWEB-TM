<?php

trait spesifikasi
{
    function nama(?string $name):void
    {
        echo "Kendaraan: $name".PHP_EOL;
    }

    function merk(?string $merk):void
    {
        echo "Merk : $merk".PHP_EOL;
    }

    function jenis(?string $jenis):void
    {
        echo "Jenis : $jenis".PHP_EOL;
    }

    function transmisi(?string $transmisi):void
    {
        echo "Transmisi : $transmisi".PHP_EOL;
    }

    function harga(?string $harga):void
    {
        echo "Harga : $harga".PHP_EOL;
    }

    function jenis_bahan_bakar(?string $bahan_bakar):void
    {
        echo "Bahan Bakar : $bahan_bakar".PHP_EOL;
    }
}

class mobil
{
    use spesifikasi;
}
class motor
{
    use spesifikasi;
}

$mobil= new mobil();
$motor= new motor();
echo"Spesifikasi Mobil";
echo "<br>";
$mobil ->nama("Alphart");
echo "<br>";
$mobil ->merk("Toyota");
echo "<br>";
$mobil ->jenis("Wagon");
echo "<br>";
$mobil ->transmisi("matic");
echo "<br>";
$mobil ->jenis_bahan_bakar("Bensin");
echo "<br>";
$mobil-> harga("Rp 1.000.000.000");
echo "<br>";
echo "<br>";
echo "<br>";
echo"Spesifikasi Motor";

echo "<br>";
$motor->nama("N-max");
echo "<br>";
$motor->merk("Yamaha");
echo "<br>";
$motor->jenis("Mooped");
echo "<br>";
$motor->transmisi("Matic");
echo "<br>";
$motor->harga("Rp 30.000.000");


?>