<?php 
// sertakan file koneksi database 
include_once("config.php"); 


$id = $_GET['id']; 

// Hapus baris pengguna dari tabel berdasarkan id yang diberikan 
$result = mysqli_query($mysqli, "DELETE FROM alat WHERE id=$id"); 

// Setelah dihapus, alihkan ke Beranda, sehingga daftar pengguna terbaru akan ditampilkan. 
header("Lokasi:index.php"); 
?>