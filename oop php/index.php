<?php
require_once('CDMusic.php');
require_once('CDRack.php');
require_once('product.php');

echo "<hr><hr>";
echo "JENIS PRODUCT" . "<br>";
echo "PRODUCT: CD MUSIC" . "<br>";
echo "PRODUCT: CD RACK" . "<br>";

// Product
$prod1 = new Product();
$prod1->setName("Album MAGNOLYA");
$prod1->setPrice(250000);
$prod1->setDiscount(0);

$prod2 = new Product();
$prod2->setName("Album Doo-Wops & Hooligans");
$prod2->setPrice(1500000);
$prod2->setDiscount(4);

$prod3 = new Product();
$prod3->setName("Rak A");
$prod3->setPrice(1200000);
$prod3->setDiscount(5);

//CD Music
echo "<hr><hr>";
echo "CD MUSIC";
echo "<h5 style='color:red;'> *SEMUA CD RACK MENDAPAT BIAYA TAMBAHAN +10%* DAN DISC +5%</h5>";

// Music 1
$cdmusic1 = new CDMusic();
$cdmusic1->setName($prod1->getName());
$cdmusic1->setPrice($prod1->getPrice());
$cdmusic1->setDiscount($prod1->getDiscount());
$cdmusic1->setArtist("Ziva Magnolya");
$cdmusic1->setGenre("Pop/Ballad, R&B");

echo "Nama Produk : " . $prod1->getName() . "<br>";
echo "Harga Produk : " . $prod1->getPrice() . "<br>";
echo "Diskon : " . $prod1->getDiscount() . "%" . "<br>";
echo "Nama Artis : " . $cdmusic1->getArtist() . "<br>";
echo "Genre Musik : " . $cdmusic1->getGenre() . "<br>";
echo "Harga setelah diskon : " . $cdmusic1->total() . "<br>";

echo "<br>";

// Music 2
$cdmusic2 = new CDMusic();
$cdmusic2->setName($prod2->getName());
$cdmusic2->setPrice($prod2->getPrice());
$cdmusic2->setDiscount($prod2->getDiscount());
$cdmusic2->setArtist("Bruno Mars");
$cdmusic2->setGenre("Pop/Rock, R&B, Reggae, Soul");

echo "Nama Produk : " . $prod2->getName() . "<br>";
echo "Harga Produk : " . $prod2->getPrice() . "<br>";
echo "Diskon : " . $prod2->getDiscount() . "%" . "<br>";
echo "Nama Artis : " . $cdmusic2->getArtist() . "<br>";
echo "Genre Musik : " . $cdmusic2->getGenre() . "<br>";
echo "Harga Akhir : " . $cdmusic2->total() . "<br>";

echo "<br>";

// CD Rack
echo "<hr><hr>";
echo "CD RACK";
echo "<h5 style='color:red;'> *SEMUA CD RACK MENDAPAT BIAYA TAMBAHAN +15%*</h5>";
echo "*Model CD Rack : A = Kapasitas Maks = 150 CD Music" . "<br>";
echo "*Model CD Rack : B = Kapasitas Maks = 70 CD Music" . "<br><br>";

$cdrack1 = new CDRack();
$cdrack1->setName($prod3->getName());
$cdrack1->setPrice($prod3->getPrice());
$cdrack1->setDiscount($prod3->getDiscount());
$cdrack1->setCapacity("100");
$cdrack1->setModel("Horizontal");

echo "Nama Produk : " . $prod3->getName() . "<br>";
echo "Kapsitas CD : " . $cdrack1->getCapacity() . "<br>";
echo "Harga Produk : " . $prod3->getPrice() . "<br>";
echo "Diskon : " . $prod3->getDiscount() . "%" . "<br>";
echo "Model : " . $cdrack1->getModel() . "<br>";
echo "Harga akhir : " . $cdrack1->total() . "<br>";

echo "<br>";