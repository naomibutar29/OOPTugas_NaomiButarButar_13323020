<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

// $produk2 = new Game("Uncharted", "Neil Dructmann","Sony Computer",250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk ( $produk1);
// $cetakProduk->tambahProduk ( $produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Service\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

// new User();

// new App\Service\user();
// echo "<hr>";
// new App\Produk\user();