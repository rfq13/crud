<?php
include 'koneksi.php';

// tangkap data yg dikirm dari form
$produk = $_POST['produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

//update data ke database 

mysqli_query($koneksi, "update produk set nama_produk='$produk', harga='$harga', jumlah='$jumlah', keterangan='$keterangan' where nama_produk='$produk'");

//kembali ke index.php

header("location:index.php");
