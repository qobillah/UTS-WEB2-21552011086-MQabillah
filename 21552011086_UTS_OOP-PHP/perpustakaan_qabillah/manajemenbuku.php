<?php
// Proses penambahan buku
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tambah_buku'])) {
    // Ambil data buku dari form
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $kategori = $_POST['kategori'];
    
    // Simpan data buku ke dalam database
    $query = "INSERT INTO buku (judul, penulis, kategori) VALUES ('$judul', '$penulis', '$kategori')";
    // Jalankan query
    // ...
}
?>