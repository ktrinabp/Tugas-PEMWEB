<?php
include_once("config.php");
    $ambildata = mysqli_query($mysqli, "SELECT * FROM bus ORDER BY id_bus ASC ");
?>

<html>
<head>
    <title>Homepage</title>
</head>
 
<body>
<h1> <b> DATA BUS </b></h1>
<table border="1">
        <tr>
            <th>ID BUS</th>
            <th>PLAT</th>
            <th>STATUS</th>
            <th>UPDATE</th>
        </tr>

<?php
    while ($data = mysqli_fetch_array($ambildata)){
        echo "<tr>";
        echo "<td>".$data['id_bus']."</td>";
        echo "<td>".$data['plat']."</td>";
        echo "<td>".$data['status']."</td>";
        echo "<td><a href='edit_bus.php?id_bus=$data[id_bus]'>Edit</a> | <a href='delete_bus.php?id_bus=$data[id_bus]'>Delete</a></td></tr>";        
    }
?>
</table>
<a href="add_bus.php">Add New User</a><br/><br/>
</body>
</html>