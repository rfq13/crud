<?php
//koneksi database
include 'koneksi.php';

//ambil data yg dikirim dari form 
$Produk = $_POST['Produk'];
$keterangan = $_POST['Keterangan'];
$Harga = $_POST['Harga'];
$Jumlah = $_POST['Jumlah'];

mysqli_query($koneksi, "insert into produk values('$Produk','$keterangan','$Harga','$Jumlah')");
//alih halaman ke utama
header("location:index.php");
