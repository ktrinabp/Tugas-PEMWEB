<?php
include_once("config.php");
    $ambildata = mysqli_query($mysqli, "SELECT * FROM kondektur ORDER BY id_kondektur ASC ");
?>

<html>
<head>
    <title>Homepage</title>
</head>
 
<body>
<h1> <b> DATA kondektur </b></h1>
<table border="1">
        <tr>
            <th>ID KONDEKTUR</th>
            <th>NAMA</th>
            <th>UPDATE</th>
        </tr>

<?php
    while ($data = mysqli_fetch_array($ambildata)){
        echo "<tr>";
        echo "<td>".$data['id_kondektur']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td><a href='edit_kondektur.php?id_kondektur=$data[id_kondektur]'>Edit</a> | <a href='delete_kondektur.php?id_kondektur=$data[id_kondektur]'>Delete</a></td></tr>";        
    }
?>
</table>
<a href="add_transupn.php">Add New Data</a><br/><br/>
</body>
</html>