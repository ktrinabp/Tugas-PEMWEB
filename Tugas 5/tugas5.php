<?php

function umur()
{
// tanggal lahir
$tanggal = new DateTime('2003-01-09');
// tanggal hari ini
$today = new DateTime('today');
// tahun
$y = $today->diff($tanggal)->y;
echo $y . " tahun ";
}

$biodata = [
    "nama" => "Ketrina Bidadari Pertiwi",
    "panggilan" => "Rina",
    "ttl" => "Surabaya, 9 Januari 2003",
    "npm" => "21081010240",
    "status" => "Mahasiswa",
    "fak/jur" => "/Ilmu Komputer/Informatika",
    "kewarganegaraan" => "Indonesia",
    "smt" => "4"
    
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <title>KETRINA BIDADARI PERTIWI</title>     
        <link rel="stylesheet" href="style.css/style.css" />  
    </head>
    <body>
        <div class="one">
        <nav>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT ME</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
        

        <div id="home"></div>
        <div class="isi">
            <h3>Hello! It's me</h3>
            <h1>Ketrina Bidadari<br>Pertiwi</h1>
            <h2>I'am a student</h2>
        </div>
        </div>

        <section id="about" class="about">
            <div class="utama">
                <img src="img\Group 1.png">
            <div class="text">
                <h2>ABOUT ME</h2>
            <table border="1" cellpadding="30" cellspacing="15" align="center" bgcolor="wheat" width="600px">
                <tr>
                    <th colspan="3">Nama Lengkap</th>
                    <th><?php echo $biodata["nama"]; ?></th>
                </tr>
                <tr>
                    <th colspan="3">Nama panggilan</th>
                    <th><?php echo $biodata["panggilan"]; ?></th>
                </tr>
                <tr>
                    <th colspan="3">NPM</th>
                    <th> <?php echo $biodata["npm"]; ?></th>
                </tr>
                <tr>
                    <th colspan="3">TTL</th>
                    <th><?php echo $biodata["ttl"]; ?></th>
                </tr>

                <tr>
                    <th colspan="3">Umur</th>
                    <th><?php umur() ?></th>
                <tr>
                    <th colspan="3">Status</th>
                    <th><?php echo $biodata["status"]; ?></th>
                </tr>
                <tr>
                    <th colspan="3">Fakultas/Jurusan</th>
                    <th><?php echo $biodata["fak/jur"]; ?></th>
                </tr>
                <tr>
                    <th colspan="3">Semester</th>
                    <th><?php echo $biodata["smt"]; ?></th>
               </tr>       
            </table>
            </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="title">
            <h2>CONTACT ME</h2>
        </div>
        </section>

        <div class="box">
            <div class="card">
                <i class="fa fa-whatsapp"></i>
                <h5> Whatsapp </h5>
                <div class="pra">
                <p style="text-align: center;">
                    <a class="button" href="https://wa.me/6281357777606">CLICK ME!</a>
                </p>
            </div>
            </div>

            <div class="card">
                <i class="fa fa-envelope"></i>
                <h5> E-Mail</h5>
            <div class="pra">
                <p style="text-align: center;">
                <a class="button" href="mailto:ketrinabidadari91@gmail.com">CLICK ME!</a></p>
            </div>
            </div>

            <div class="card">
                <i class="fa fa-instagram"></i>
                <h5> Instagram</h5>
            <div class="pra">
                <p style="text-align: center;">
                <a class="button" href="https://instagram.com/rinrina9_">CLICK ME!</a></p>
            </div>
            </div>

    </div>
        </div>
    </body>
</html>

