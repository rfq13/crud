<!DOCTYPE html>
<html>

<head>
	<title> Arkademy </title>
</head>

<body>
	</br>
	<a href="index.php">
		<< KEMBALI </a> </br> </br> <h3> Edit data</h3>

			<?php
			include 'koneksi.php';
			$id = $_GET['produk'];
			$data = mysqli_query($koneksi, "select * from produk where nama_produk='$id'");
			while ($d = mysqli_fetch_array($data, $type = MYSQLI_BOTH)) {
			?>
				<form method="post" action="update.php">
					<table>
						<tr>
							<td>produk</td>
							<td>
								<input type="text" name="produk" value="<?php echo $d['nama_produk']; ?>">
							</td>
						</tr>
						<tr>
							<td>keterangan</td>
							<td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
						</tr>
						<tr>
							<td>harga</td>
							<td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
						</tr>
						<tr>
							<td>jumlah</td>
							<td><input type="text" name="jumlah" value="<?php echo $d['jumlah']; ?>"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Simpan"></td>
						</tr>
					</table>
				</form>
			<?php

			}
			?>

</body>

</html>