<?php
// Proses pendaftaran anggota
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    
    // Simpan data anggota ke dalam database
    $query = "INSERT INTO anggota (nama, email, alamat) VALUES ('$nama', '$email', '$alamat')";
    // Jalankan query
    // ...
}
?>