<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Prestasi</title>
<style>
.navbar a {
    float:right;
    font-size:1rem;
    color:black;
    text-align:center;
    padding:0px 16px;
}
table{
    border-collapse: collapse;
    width:100%;
    margin-bottom:20px;
}
th, td{
    border: 1px solid #ddd;
    padding:8px;
    text-align:left;
}
th {
    background-color : #f2f2f2;
}
tr:nth-child (even){
    background-color: #f2f2f2;
}
tr:hover{
    background-color:#ddd;
}
<!--Kode diatas merupakan style tampilan untuk halaman data prestasi-->
</style>
</head>
<body>
<header>
    <!--Bagian Navigasi-->
    <a href="#" class="logo">SI Prestasi</a>
    <div class="navbar"> 
<!--Membuat sebuah navigasi yang terdapat tombol Berita, Prestasi dan Home-->
             <a href="/berita">Berita</a>
             <a href="/dataprestasi">Prestasi</a>
             <a href="/home">Home</a>
</div>
    </header>
    <h1>Data Siswa Berprestasi</h1>
    <!--Membuat sebuah tabel dengan kolom atas yaitu NISN,Nama,Kelas,Alamat,Prestasi,Tingkat dan Tanggal -->
    <table>
        <thead>

            <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Prestasi</th>
            <th>Tingkat</th>
            <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
    <!--Menambahkan isi dari tabel atau body dari tabel-->
            <tr>
            <td>1569427942</td>
            <td>Zhafirah Nur Shadrina</td>
            <td>11</td>
            <td>Golf</td>
            <td>Juara 2 KSN Biologi</td>
            <td>Provinsi</td>
            <td>22 Mei 2023</td>
            </tr>
            <tr>
            <td>1564527942</td>
            <td>Arya Bigtra</td>
            <td>10</td>
            <td>Sungai Rupat</td>
            <td>Juara 3 Karate</td>
            <td>Kota</td>
            <td>11 November 2023</td>
            </tr>
            <tr>
            <td>1564528910</td>
            <td>Dhafin Yusuf</td>
            <td>12</td>
            <td>Rawa Makmur</td>
            <td>Juara 1 Makan Kerupuk</td>
            <td>Provinsi</td>
            <td>28 Agustus 2023</td>
            </tr>
            <tr>
            <td>7127528910</td>
            <td>Nita Marlena</td>
            <td>12</td>
            <td>Lingkar Timur</td>
            <td>Juara 1 Mencuci Baju</td>
            <td>Nasional</td>
            <td>30 Juli 2023</td>
            </tr>
        </tbody>
    </table>
    <!--Membuat sebuah tombol link yang akan mengarahkan ke halaman pengisian formulir prestasi apabila di klik-->
    <a href="/tambahprestasi">Tambah Prestasi</a>
</body>
</html>
