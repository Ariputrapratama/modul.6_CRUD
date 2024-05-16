<html> 
<head> 
    <title>Tambahkan Alat</title> 
</head> 

<body> 
<a href="index.php">Buka Beranda</a> 
<br/><br/> 

<form action ="add.php" method="post" name="form1"> 
    <table width="25%" border="0"> 
        <tr> 
            <td>Nama Alat</td> 
            <td><input type= "text" name="nama_alat"></td> 
        </tr> 
        <tr> 
            <td>Tahun</td> 
            <td><input type="text" name="tahun"></td> 
        </ tr> 
        <tr> 
            <td>Merek</td> 
            <td><input type="text" name="merek"></td> 
        </tr> 
        <tr> 
            <td>Lokasi</td> 
            <td ><input type="text" name="lokasi"></td> 
        </tr> 
        <tr> 
            <td></td> 
            <td><input type="submit" name="Kirim" value=" Tambahkan"></td> 
        </tr> 
    </table> 
</form> 

<?php 

// Centang Jika formulir dikirimkan, masukkan data formulir ke tabel pengguna. 
if(isset($_POST['Kirim'])) { 
    $nama_alat= $_POST['nama_alat']; 
    $tahun = $_POST['tahun']; 
    $merek= $_POST['merek']; 
    $lokasi = $_POST['lokasi']; 

    // sertakan file koneksi database 
    include_once("config.php"); 

    // Masukkan data pengguna ke dalam tabel 
    $result = mysqli_query($mysqli, "INSERT INTO alat(nama_alat,tahun,merek,lokasi) VALUES('$nama_alat','$tahun','$merek','$lokasi') "); 

    // Tampilkan pesan ketika pengguna menambahkan 
    echo "Pengguna berhasil ditambahkan. <a href='index.php'>Lihat Alat</a>"; 
} 
?> 
</tubuh> 
</html>
