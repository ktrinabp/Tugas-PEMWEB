<?php
include_once("config.php");
    $ambildata = mysqli_query($mysqli, "SELECT * FROM trans_upn ORDER BY id_trans_upn ASC ");
        if ($ambildata) {
            $status = 'success';
        } else {
            $status = 'error';
        }
    $ambildata = mysqli_query($mysqli,"SELECT * FROM kondektur ORDER BY id_kondektur ASC ");
?>
s<html>
<head>
    <title>GAJi KONDEKTUR</title>
</head>
<body>
        <?php  
                if (isset($_POST['bulan'])) {
                    $nama_bulan = $_POST['bulan'];
                } else {
                    $nama_bulan = 'Semua';
                }
            ?>
            <form action="" method="post">
                <select name="bulan" id="bulan" required>
                    <option value="">Choose One!</option>
                    <option value="Januari">January</option>
                    <option value="Februari">February</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">June</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
                <button type="submit" id="submitFilter" name="submitFilter"> Filter</button>                
                <a href="gaji_kondektur.php"><button type="button">Ulang</button></a>
                <h3>Bulan = <?= $nama_bulan ?></h3>

            </form>
            <table border="1">
                <thead>
                    <tr>
                        <th>Id Kondektur</th>
                        <th>Nama</th>
                        <th>Total KM</th>
                        <th>Harga/KM</th>
                        <th>Total Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data = mysqli_fetch_array($ambildata)): ?>
                    <tr>
                        <?php
                        $queryforKM = "SELECT SUM(jumlah_km) AS total_KM FROM trans_upn WHERE id_kondektur = $data[id_kondektur] GROUP BY id_kondektur";
                        $result_jarak = mysqli_query($mysqli, $queryforKM);
                        $data_kondektur = mysqli_fetch_assoc($result_jarak);
                        if($data_kondektur === NULL) {
                            $total_KM = 0;
                        } else {
                            $total_KM = $data_kondektur['total_KM'];
                        }
                        $kondektur_gaji_perKM = 1500;
                        $kondektur_gaji = $total_KM * $kondektur_gaji_perKM;
                        ?>
                        <td><?php echo $data['id_kondektur'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $total_KM; ?></td>
                        <td><?php echo $kondektur_gaji_perKM; ?></td>
                        <td><?php echo "Rp. ", $kondektur_gaji; ?></td>
                    </tr>
                    <?php endwhile;
                    ?>
                </tbody>
            </table>
</body>
</html>