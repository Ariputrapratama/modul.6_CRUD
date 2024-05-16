<?php 
// sertakan file koneksi database 
include_once("config.php"); 

// Periksa apakah formulir dikirimkan untuk pembaruan pengguna, lalu arahkan ke beranda setelah pembaruan 
if(isset($_POST['update'])) 
{ 
    $id = $_POST['id']; 
    $nama_alat= $_POST['nama_alat']; 
    $tahun = $_POST['tahun']; 
    $merek= $_POST['merek']; 
    $lokasi = $_POST['lokasi']; 

    // perbarui data pengguna 
    $result = mysqli_query($mysqli, "UPDATE alat SET nama_alat='$nama_alat',tahun='$tahun',merek='$merek',lokasi='$lokasi' WHERE id=$id" ); 

    // Redirect ke beranda untuk menampilkan pengguna yang diperbarui di 
    header daftar("Lokasi: index.php"); 
} 
?> 
<?php 
// Menampilkan data pengguna yang dipilih berdasarkan id 
// Mendapatkan id dari url 
$id = $_GET['id']; 

// Ambil data pengguna berdasarkan id 
$result = mysqli_query($mysqli, "SELECT * FROM alat WHERE id=$id"); 

while($user_data = mysqli_fetch_array($hasil)) 
{ 
    $nama_alat = $user_data['nama_alat']; 
    $tahun = $data_pengguna['tahun']; 
    $merek= $data_pengguna['merek']; 
    $lokasi = $user_data['lokasi']; 
} 
?> 
<html> 
<head> 
    <title>Edit Data Pengguna</title> 
</head> 

<body> 
<a href="index.php">Beranda</a> 
<br/><br/> 

< formulir nama="update_user" metode="posting" action="edit.php"> 
    <table border="0"> 
        <tr> 
            <td>Nama Alat</td> 
            <td><input type="text" name="nama_alat" value=<?php echo $nama_alat;?>> </td> 
        </tr> 
        <tr> 
            <td>Tahun</td> 
            <td><input type="text" name="tahun" value=<?php echo $tahun;?>></td> 
        </tr> 
        <tr> 
            <td>Merek</td> 
            <td><input type="text" name="merek" value=<?php echo $merek;?>></td> 
        </tr> 
        <tr> 
            <td>Lokasi</td> 
            <td><input type="text" name="lokasi" value=<?php echo $lokasi;?>></td> 
        </tr> 
        <tr> 
            < td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td> 
            <td><input type="submit" name="update" value="Update"></td> 
        </tr> 
    </tabel> 
</form> 
</body> 
</html>