<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$produk = $_GET['produk'];


// menghapus data dari database
mysqli_query($koneksi,"delete from produk where nama_produk='$produk'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
