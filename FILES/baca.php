<?php

echo "<h3>Data Buku</h3>";
$file_name = "data.txt";

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

    </tr>";

foreach ($read as $buku) {
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
        echo "<td><img src='cover/{$data_buku[7]}' width='100'></td>";

        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td colspan='7'>Invalid data</td>";
        echo "</tr>";
    }
}
echo "</table>";

echo '<br><br><a href="form.php">Kembali ke Form</a>';
echo '<br><br><a href="delete.php">Delete Data</a>';
echo '<br><br><a href="update.php">Update Data</a>';

?>
