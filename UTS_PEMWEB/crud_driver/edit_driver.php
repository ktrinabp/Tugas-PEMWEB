<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
    $id_driver = $_POST['id_driver'];

    $nama   = $_POST['nama'];
    $no_sim = $_POST['no_sim'];
    $alamat = $_POST['alamat'];
       
    $ambildata = mysqli_query($mysqli, "UPDATE driver SET nama='$nama',no_sim='$no_sim',alamat='$alamat' WHERE id_driver=$id_driver");
    header("Location: index_driver.php");
}
?>
<?php
$id_driver = $_GET['id_driver'];
 
$ambildata = mysqli_query($mysqli, "SELECT * FROM driver WHERE id_driver=$id_driver");

while ($data = mysqli_fetch_array($ambildata))
{
    $nama   = $data['nama'];
    $no_sim = $data['no_sim'];
    $alamat = $data['alamat'];
}
?>

<html>
<head>	
    <title>Edit Data driver</title>
</head>
 
<body>
    <a href="index_driver.php">Home</a>
    <br/><br/>
    
    <form name="update_data" method="post" action="edit_driver.php">
        <table border="0">
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>NO. SIM</td>
                <td><input type="text" name="no_sim" value=<?php echo $no_sim;?>></td>
            </tr>
            <tr> 
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id_driver" value=<?php echo $_GET['id_driver'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>