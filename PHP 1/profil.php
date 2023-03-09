<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.one{
    height: 113vh;
    width: 100%;
    background-image: url(bg2.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}


.one>nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 45px;
    padding-left: 8%;
    padding-right: 8%;
    position: fixed;
}

nav ul li {
    list-style-type: none;
    display: inline-block;
    padding: 10px 25px;
}
nav ul li a{
color: rgb(229, 168, 13);
text-decoration: none;
font-weight: bold;
}

nav ul li a:hover{
    color: red;
    transition: .4s;
}

.isi{
    position: absolute;
    top: 50%;
    left: 8%;
    transform: translateY(-50%);
    color: rgb(255, 0, 0);
}
h1{
    color: white;
    font-size: 68px;
    margin-left: 5px;
}

h3{
    font-size: 23px;
    margin-left: 5px;
}

h2{
    font-size: 30px;
    margin: 10px 5px 0px;
    letter-spacing: 4px;
}

.about{
    width: 100%;
    padding: 115px 0px;
    background-color: red;
    color: black;
}
.utama>img{
    height: auto;
    width: 300px;
    margin-left: 30px;
}
.text{
    width: 550px;
}
.utama{
    width: 1130px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;

}
.text>h2{
    color: wheat;
    font-size: 65px;
    text-transform: capitalize;
    margin-bottom: 20px;
}

.text>p{
    color: wheat;
    font-size: 20px;
    letter-spacing: 2px;
    line-height: 30px;
    margin-bottom: 45px;
    text-transform: capitalize;
}

.contact{
    background:white;
    width: 100%;
    padding: 100px 0px;
}

.title>h2{
    color: black;
    font-size: 60px;
    width: 1130px;
    margin: 30px auto;
    text-align: center;
}

.box{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 400px;
}

.card{
    height: 300px;
    width: 335px;
    padding: 20px 40px;
    background: #191919;
    border-radius: 20px;
    margin: 15px;
    position: relative;
    overflow: hidden;
    text-align: center;
}

.card>i{
    font-size: 50px;
    display: block;
    text-align: center;
    margin: 25px 0px;
    color:rgb(255, 0, 0);
}

h5{
    color: white;
    font-size: 24px;
    margin-bottom: 15px;
}

.pra>p{
    color:white;
    font-size: 16px;
    line-height: 27px;
    margin-bottom: 25px;
    margin-top: 50px;
}

.card .button{
    background-color: red;
    color: white;
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
    padding: 9px 22px;
    border-radius: 30px;
    transition: .4s;
}
    .text .button{
        background-color: black;
        color: white;
        text-decoration: none;
        border: 2px solid transparent;
        font-weight: bold;
        padding: 9px 22px;
        border-radius: 30px;
        transition: .4s;
    }
</style>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <title>KETRINA BIDADARI PERTIWI</title>
        <meta content="">
        
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
                    <th>Ketrina Bidadari Pertiwi</th>
                </tr>
                <tr>
                    <th colspan="3">Nama panggilan</th>
                    <th>Rina</th>
                </tr>
                <tr>
                    <th colspan="3">NPM</th>
                    <th>21081010240</th>
                </tr>
                <tr>
                    <th colspan="3">TTL</th>
                    <th>Surabaya, 9 Januari 2003</th>
                </tr>

                <tr>
                    <th colspan="3"> Umur </th>
                    <th>
                <?php
                // tanggal lahir
                $tanggal = new DateTime('2003-01-09');
                
                // tanggal hari ini
                $today = new DateTime('today');
                
                // tahun
                $y = $today->diff($tanggal)->y;

                echo $y . " tahun ";
                ?>

                <tr>
                    <th colspan="3">Status</th>
                    <th>Mahasiswa </th>
                </tr>
                <tr>
                    <th colspan="3">Prodi/Jurusan</th>
                    <th>Ilmu Komputer/Informatika</th>
                </tr>
                <tr>
                    <th colspan="3">Semester</th>
                    <th>4</th>
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

