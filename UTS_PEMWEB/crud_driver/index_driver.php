<?php
include_once("config.php");
    $ambildata = mysqli_query($mysqli, "SELECT * FROM driver ORDER BY id_driver ASC ");
?>

<html>
<head>
    <title>Homepage</title>
</head>
 
<body>
<h1> <b> DATA DRIVER </b></h1>
<table border="1">
        <tr>
            <th>ID DRIVER</th>
            <th>NAMA</th>
            <th>NO. SIM</th>
            <th>ALAMAT</th>
            <th>UPDATE</th>
        </tr>

<?php
    while ($data = mysqli_fetch_array($ambildata)){
        echo "<tr>";
        echo "<td>".$data['id_driver']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['no_sim']."</td>";
        echo "<td>".$data['alamat']."</td>";

        echo "<td><a href='edit_driver.php?id_driver=$data[id_driver]'>Edit</a> | <a href='delete_driver.php?id_driver=$data[id_driver]'>Delete</a></td></tr>";        
    }
?>
</table>
<a href="add_driver.php">Add New Data</a><br/><br/>
</body>
</html>