<html>
<head>
    <title>Add Data trans_upn</title>
</head>
 
<body>
<a href="index_transupn.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_transupn.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID TRANS UPN</td>
                <td><input type="numbert" name="id_trans_upn"></td>
            </tr>
            <tr> 
                <td>ID KONDEKTUR</td>
                <td><input type="number" name="id_kondektur"></td>
            </tr>
            <tr> 
                <td>ID BUS</td>
                <td><input type="number" name="id_bus"></td>
            </tr>
            <tr> 
                <td>ID DRIVER</td>
                <td><input type="number" name="id_driver"></td>
            </tr>
            <tr> 
                <td>JUMLAH KM</td>
                <td><input type="number" name="jumlah_km"></td>
            </tr>
            <tr> 
                <td>TANGGAL</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add data"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_trans_upn = $POST['id_trans_upn'];
        $id_kondektur = $_POST['id_kondektur'];
        $id_bus       = $_POST['id_bus'];
        $id_driver    = $_POST['id_driver'];
        $jumlah_km    = $_POST['jumlah_km'];
        $tanggal      = $_POST['tanggal'];
        
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $ambildata = mysqli_query($mysqli, "INSERT INTO transupn(id_kondektur,id_bus,id_driver,jumlah_km,tanggal) VALUES('$id_kondektur','$id_bus','$id_driver,$jumlah_km,$tanggal')");
        
        // Show message when user added
        echo "User added successfully. <a href='index_transupn.php'>View Data</a>";
    }
    ?>
</body>
</html>