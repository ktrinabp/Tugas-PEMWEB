<html>
<head>
    <title>Add Data Driver</title>
</head>
 
<body>
    <a href="index_driver.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_driver.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>NO. SIM</td>
                <td><input type="text" name="no_sim"></td>
            </tr>
            <tr> 
                <td>ALAMAT</td>
                <td><input type="text" name="alamat"></td>
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

        $nama = $_POST['nama'];
        $no_sim = $_POST['no_sim'];
        $alamat = $_POST['alamat'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $ambildata = mysqli_query($mysqli, "INSERT INTO driver(nama,no_sim,alamat) VALUES('$nama','$no_sim','$alamat')");
        
        // Show message when user added
        echo "User added successfully. <a href='index_driver.php'>View Data</a>";
    }
    ?>
</body>
</html>