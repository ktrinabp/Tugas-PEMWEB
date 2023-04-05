<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
    $id_trans_upn = $_POST['id_trans_upn'];

    $id_kondektur   = $data['id_kondektur'];
    $id_bus         = $data['id_bus'];
    $id_driver      = $data['id_driver'];
    $jumlah_km      = $data['jumlah_km'];
    $tanggal        = $data['tanggal'];
       
    $ambildata = mysqli_query($mysqli, "UPDATE trans_upn SET id_kondektur='$id_kondektur', id_bus='$id_bus',id_driver='$id_driver',jumlah_km='$jumlah_km',tanggal=$tanggal WHERE id_trans_upn=$id_trans_upn");
    header("Location: index_transupn.php");
}
?>
<?php
$id_trans_upn = $_GET['id_trans_upn'];
 
$ambildata = mysqli_query($mysqli, "SELECT * FROM trans_upn WHERE id_trans_upn=$id_trans_upn");

while ($data = mysqli_fetch_array($ambildata))
{
    $id_kondektur   = $data['id_kondektur'];
    $id_bus         = $data['id_bus'];
    $id_driver      = $data['id_driver'];
    $jumlah_km      = $data['jumlah_km'];
    $tanggal        = $data['tanggal'];

}
?>

<html>
<head>	
    <title>Edit Data Trans UPN</title>
</head>
 
<body>
    <a href="index_transupn.php">Home</a>
    <br/><br/>
    
    <form name="update_data" method="post" action="edit_transupn.php">
        <table border="0">
            <tr> 
                <td>ID KONDEKTUR</td>
                <td><input type="number" name="id_kondektur" value=<?php echo $id_kondektur;?>></td>
            </tr>
            <tr> 
                <td>ID BUS</td>
                <td><input type="number" name="id_bus" value=<?php echo $id_bus;?>></td>
            </tr>
            <tr> 
                <td>ID DRIVER</td>
                <td><input type="number" name="id_driver" value=<?php echo $id_driver;?>></td>
            </tr>
            <tr> 
                <td>JUMLAH KM</td>
                <td><input type="number" name="jumlah_km" value=<?php echo $jumlah_km;?>></td>
            </tr>
            <tr> 
                <td>TANGGAL</td>
                <td><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id_trans_upn" value=<?php echo $_GET['id_trans_upn'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>