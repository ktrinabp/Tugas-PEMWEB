<?php

if ($_GET) {
    //variable penampung
    $data = $_GET['kodeBuku']
        . "-" . $_GET['judul']
        . "-" . $_GET['pengarang']
        . "-" . $_GET['tahunTerbit']
        . "-" . $_GET['jmlHalaman']
        . "-" . $_GET['penerbit']
        . "-" . $_GET['kategori']
        . "-" . $_GET['cover'] . "\n";



    //simpan ke file
    $file_name = "data.txt";
    if (file_put_contents($file_name, $data, FILE_APPEND) > 0) {
        echo "data berhasil disimpan";
    } else {
        echo "data gagal disimpan";
    }

    echo '<br><br><a href="form.php">Kembali ke Form</a>';
    echo '<br><br><a href="baca.php">Lihat Data</a>';
}