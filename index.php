<!DOCTYPE html>
<html>

<head>
	<title> Arkademy </title>
</head>

<body>
	</br>

	<?php
	if (isset($_GET['pesan'])) {
		$pesan = $_GET['pesan'];
		if ($pesan == "input") {
			echo "data sudah berhasil diinput";
		} else if ($pesan == "update") {
			echo "data sudah berhasil diupdate";
		} else if ($pesan == "hapus") {
			echo "data sudah di hapus";
		}
	}

	?>
	</br>
	<a class="tombol" href="input.php"> + Tambah Data Baru</a>
	<h3>List Data</h3>
	<table border="5">
		<tr>
			<th>No</th>
			<th>Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Opsi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$nomor = 1;
		$data = mysqli_query($koneksi, "select * from produk");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $d['nama_produk']; ?></td>
				<td><?php echo $d['keterangan']; ?> </td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
				<td>
					<a href="edit.php?produk=<?php echo $d['nama_produk']; ?>">Edit</a> |
					<a href="hapus.php?produk=<?php echo $d['nama_produk']; ?>">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>