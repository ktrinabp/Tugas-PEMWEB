<?php

echo "<h3>Data Mahasiswa</h3>";
$file_name = "data.txt";

if (isset($_GET['delete'])) {
    $deleteIndex = $_GET['delete'];

    $lines = file($file_name);
    if (isset($lines[$deleteIndex])) {
        unset($lines[$deleteIndex]);
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
        <td>Cover</td>
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
        echo "<td>{$data_buku[7]}</td>";
        echo "<td><a href='?delete={$index}'>Delete</a></td>";
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td colspan='8'>Invalid data</td>";
        echo "</tr>";
    }
}
echo "</table>";

echo '<br><br><a href="form.php">Kembali ke Form</a>';
echo '<br><br><a href="baca.php">Kembali Lihat Data</a>';

?>
