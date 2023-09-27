<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Prestasi</title>
<style>
.navbar a {
    float:right;
    font-size:1rem;
    color:black;
    text-align:center;
    padding:0px 16px;
}
h1 {
text-align: center;
font-size: 24px;
margin-top: 20px;
}
.form-container {
max-width: 100px;
margin: 0 auto;
padding: 20px;
border: 1px solid #ccc;
border-radius: 5px;
background-color: #f9f9f9;
}
label {
display: block;
margin-bottom: 5px;
font-weight: bold;
}
.form-control {
width: 100%;
padding: 8px;
margin-bottom: 10px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
font-size: 14px;
}
<!--Kode diatas merupakan kode yang mengatur style tampilan pada halaman tambah prestasi-->
</style>
</head>
<body>
<header>
    <!--Bagian Navigasi-->
    <a href="#" class="logo">SI Prestasi</a>
    <div class="navbar"> 
<!--Membuat sebuah navigasi yang berisi tombol Berita, Prestasi dan Home-->
             <a href="/berita">Berita</a>
             <a href="/dataprestasi">Prestasi</a>
             <a href="/home">Home</a>
</div>
    </header>
    <!--Membuat sebuah halaman untuk formulir data prestasi-->
    <h1>Tambah Data Prestasi</h1>
    
    <!-- Formulir untuk menambah data prestasi -->
    <form action="/tambah-mahasiswa" method="post">
        @csrf 
        
        <!-- Tambah data NISN -->
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn" required>
        </div>
        
        <!-- Tambah data Nama -->
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        
        <!-- Tambah data Kelas -->
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select class="form-control" id="kelas" name="kelas">
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>

        <!-- Tambah data Alamat -->
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        
        <!-- Tambah data Prestasi -->
        <div class="form-group">
            <label for="prestasi">Prestasi</label>
            <input type="text" class="form-control" id="prestasi" name="prestasi" required>
        </div>
        
        <!-- Tambah data Tingkat -->
        <div class="form-group">
            <label for="tingkat">Tingkat</label>
            <select class="form-control" id="tingkat" name="tingkat">
                <option value="Kota">Kota</option>
                <option value="Provinsi">Provinsi</option>
                <option value="Nasional">Nasional</option>
            </select>
        </div>

        <!-- Tambah data Tanggal  -->
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        
        
        
        <!-- submit prestasi berfungsi untuk menyimpan data yang telah di input sebelumnya-->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>
