<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
    $id_kondektur = $_POST['id_kondektur'];

    $nama   = $_POST['nama'];
       
    $ambildata = mysqli_query($mysqli, "UPDATE kondektur SET nama='$nama' WHERE id_kondektur=$id_kondektur");
    header("Location: index_kondektur.php");
}
?>
<?php
$id_kondektur = $_GET['id_kondektur'];
 
$ambildata = mysqli_query($mysqli, "SELECT * FROM kondektur WHERE id_kondektur=$id_kondektur");

while ($data = mysqli_fetch_array($ambildata))
{
    $nama   = $data['nama'];
}
?>

<html>
<head>	
    <title>Edit Data Kondektur</title>
</head>
 
<body>
    <a href="index_kondektur.php">Home</a>
    <br/><br/>
    
    <form name="update_data" method="post" action="edit_kondektur.php">
        <table border="0">
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_kondektur" value=<?php echo $_GET['id_kondektur'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>