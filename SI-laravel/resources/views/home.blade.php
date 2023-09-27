<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI Prestasi SMA 8</title>
<style>
<!--Ini merupakan kode untuk style pada halaman home-->
header {
            background-color: RGB(87,116,122);
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            text-decoration: none;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
        .navbar {
            display: flex;
            gap: 20px;
        }
        .navbar a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
        }
        .welcome-content {
            padding: 40px;
            text-align: left;
        }
        .welcome-subtitle {
            font-size: 18px;
            color: #007bff;
        }
        .welcome-text {
            font-size: 32px;
            margin-top: 10px;
        }
        .welcome-text a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
        }
    </style>
</head>
<body>
<header>
    <!--Bagian Navigasi-->
    <a href="#" class="logo">SI Prestasi</a>
    <div class="navbar"> 
<!--Akan membuat sebuah navigasi yang berisi tombol Home, Prestasi dan Berita-->
             <a href="/home">Home</a>
             <a href="/dataprestasi">Prestasi</a>
             <a href="/berita">Berita</a>
</div>
    </header>
    <div class="welcome-content">
<!--Merupakan kode untuk membuat sebuah landing page-->
<p class="welcome-subtitle">Selamat Datang</p>

<h1 class="welcome-text"> 
    Sistem Informasi Pendataan Prestasi SMAN 8 
</h1>
<!--Membuat sebuah link yang akan mengarahkan ke halaman data prestasi apabila di klik-->
<a href="/dataprestasi">Data Prestasi</a>
</div>
   

</body>
</html>
