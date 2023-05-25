<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>

<body>
    <h3>Input Data Mahasiswa</h3>
    <form action="simpan.php" method="get">
        <table>
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kodeBuku"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahunTerbit"></td>
            </tr>
            <tr>
                <td>Jumlah Halaman</td>
                <td><input type="text" name="jmlHalaman"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
                <td>Cover</td>
                <td><input type="file" name="cover"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Tulis ke FILE"></td>
            </tr>
        </table>
    </form>
    <br><br><a href="baca.php">Lihat Data</a>

</body>

</html>