<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
    $id_bus = $_POST['id_bus'];

    $plat=$_POST['plat'];
    $status=$_POST['status'];
        
    $ambildata = mysqli_query($mysqli, "UPDATE bus SET plat='$plat',status='$status' WHERE id_bus=$id_bus");
    header("Location: index_bus.php");
}
?>
<?php
$id_bus = $_GET['id_bus'];
 
$ambildata = mysqli_query($mysqli, "SELECT * FROM bus WHERE id_bus=$id_bus");

while ($data = mysqli_fetch_array($ambildata))
{
    $plat = $data['plat'];
    $status = $data['status'];
}
?>

<html>
<head>	
    <title>Edit Data Bus</title>
</head>
 
<body>
    <a href="index_bus.php">Home</a>
    <br/><br/>
    
    <form name="update_data" method="post" action="edit_bus.php">
        <table border="0">
            <tr> 
                <td>PLAT</td>
                <td><input type="text" name="plat" value=<?php echo $plat;?>></td>
            </tr>
            <tr> 
                <td>STATUS</td>
                <td><input type="text" name="status" value=<?php echo $status;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_bus" value=<?php echo $_GET['id_bus'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>