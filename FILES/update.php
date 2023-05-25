<?php

echo "<h3>Data Buku</h3>";
$file_name = "data.txt";

if (isset($_POST['submit'])) {
    $updateData = $_POST['update_index'];

    $kode_buku = $_POST['kode_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];
    $penerbit = $_POST['penerbit'];
    $kategori = $_POST['kategori'];

    $lines = file($file_name);
    if (isset($lines[$updateData])) {
        $data_buku = "$kode_buku-$judul-$pengarang-$tahun_terbit-$jumlah_halaman-$penerbit-$kategori";
        $lines[$updateData] = $data_buku . PHP_EOL;
        file_put_contents($file_name, implode("", $lines));
    }
}

$read = file($file_name); // array

echo "<table border='1'>
    <tr>
        <td>Kode Buku</td>
        <td>Judul</td>
        <td>Pengarang</td>
        <td>Tahun Terbit</td>
        <td>Jumlah Halaman</td>
        <td>Penerbit</td>
        <td>Kategori</td>
        <td>Action</td>
    </tr>";

foreach ($read as $index => $buku) {
    $data_buku = explode("-", $buku); // array

    // Memeriksa jumlah elemen dalam array
    if (count($data_buku) >= 8) {
        echo "<tr>";
        echo "<td>{$data_buku[0]}</td>";
        echo "<td>{$data_buku[1]}</td>";
        echo "<td>{$data_buku[2]}</td>";
        echo "<td>{$data_buku[3]}</td>";
        echo "<td>{$data_buku[4]}</td>";
        echo "<td>{$data_buku[5]}</td>";
        echo "<td>{$data_buku[6]}</td>";
        echo "<td><img src='{$data_buku[7]}' width='100'></td>";

        echo "<td><a href='?update={$index}'>Update</a></td>";
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td colspan='8'>Invalid data</td>";
        echo "</tr>";
    }
}

echo "</table>";

if (isset($_GET['update'])) {
    $updateData = $_GET['update'];
    $updateData = explode("-", $read[$updateData]);

    echo "<h3>Update Data</h3>";
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='update_data' value='{$updateData}'>";
    echo "Kode Buku: <input type='text' name='kode_buku' value='{$updateData[0]}'><br>";
    echo "Judul: <input type='text' name='judul' value='{$updateData[1]}'><br>";
    echo "Pengarang: <input type='text' name='pengarang' value='{$updateData[2]}'><br>";
    echo "Tahun Terbit: <input type='text' name='tahun_terbit' value='{$updateData[3]}'><br>";
    echo "Jumlah Halaman: <input type='text' name='jumlah_halaman' value='{$updateData[4]}'><br>";
    echo "Penerbit: <input type='text' name='penerbit' value='{$updateData[5]}'><br>";
    echo "Kategori: <input type='text' name='kategori' value='{$updateData[6]}'><br>";
    echo "Cover: <input type='file' name='cover' value='{$updateData[7]}'><br>";

    echo "<input type='submit' name='submit' value='Update'>";
    echo "</form>";
}

echo '<br><br><a href="form.php">Kembali ke Form</a>';
?>
