<?php
include_once("config.php");
    $ambildata = mysqli_query($mysqli, "SELECT * FROM trans_upn ORDER BY id_trans_upn ASC ");
?>

<html>
<head>
    <title>Homepage</title>
</head>
 
<body>
<h1> <b> DATA TRANS UPN </b></h1>
<table border="1">
        <tr>
            <th>ID trans_upn</th>
            <th>ID KONDEKTUR</th>
            <th>ID BUS</th>
            <th>ID DRIVER</th>
            <th>JUMLAH KM</th>
            <th>TANGGAL</th>
            <th>UPDATE</th>
    

        </tr>

<?php
    while ($data = mysqli_fetch_array($ambildata)){
        echo "<tr>";
        echo "<td>".$data['id_trans_upn']."</td>";
        echo "<td>".$data['id_kondektur']."</td>";
        echo "<td>".$data['id_bus']."</td>";
        echo "<td>".$data['id_driver']."</td>";
        echo "<td>".$data['jumlah_km']."</td>";
        echo "<td>".$data['tanggal']."</td>";

        echo "<td><a href='edit_transupn.php?id_trans_upn=$data[id_trans_upn]'>Edit</a> | <a href='delete_transupn.php?id_trans_upn=$data[id_trans_upn]'>Delete</a></td></tr>";        
    }
?>
</table>
<a href="add_transupn.php">Add New Data</a><br/><br/>
</body>
</html>