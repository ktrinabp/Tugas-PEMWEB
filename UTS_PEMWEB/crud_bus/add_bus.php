<html>
<head>
    <title>Add Data Bus</title>
</head>
 
<body>
    <a href="index_bus.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_bus.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Plat</td>
                <td><input type="text" name="plat"></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="status"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add data"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {

        $plat = $_POST['plat'];
        $status = $_POST['status'];
        
        include_once("config.php");
                
        $ambildata = mysqli_query($mysqli, "INSERT INTO bus(plat,status) VALUES('$plat','$status')");
        
        echo "User added successfully. <a href='index_bus.php'>View Data</a>";
    }
    ?>
</body>
</html>