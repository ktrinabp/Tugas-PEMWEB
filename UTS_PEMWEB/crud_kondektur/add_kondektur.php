<html>
<head>
    <title>Add Data Kondektur</title>
</head>
 
<body>
    <a href="index_kondektur.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_kondektur.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add data"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {

        $nama = $_POST['nama'];

        include_once("config.php");
                
        $ambildata = mysqli_query($mysqli, "INSERT INTO kondektur(nama) VALUES('$nama')");
        
        echo "User added successfully. <a href='index_kondektur.php'>View Data</a>";
    }
    ?>
</body>
</html>