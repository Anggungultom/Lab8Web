<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Barang</title>
</head>
<body>
	<h1>Data Barang</h1>
	<table border="1">
		<tr>
			<th>Id Barang</th>
			<th>Kategori</th>
			<th>Nama</th>
			<th>Gambar</th>
			<th>Harga Jual</th>
			<th>Harga Beli</th>
			<th>Stok</th>
			<th>Aksi</th>
		</tr>
		<?php 
			include"koneksi.php";

			$no =1;
			$data=mysqli_query($koneksi,"SELECT * FROM data_barang");
			while ($hasil=mysqli_fetch_array($data)) {
				?>
				<tr>
					<td><?php echo $hasil['id_barang'];?></td>
					<td><?php echo $hasil['kategori'];?></td>
					<td><?php echo $hasil['nama'];?></td>
					<td><?php echo $hasil['gambar'];?></td>
					<td><?php echo $hasil['harga_beli'];?></td>
					<td><?php echo $hasil['harga_jual'];?></td>
					<td><?php echo $hasil['stok'];?></td>
					<td>
						<a href="">Ubah</a>
						<a href="">Hapus</a>
					</td>
				</tr>
				<?php
			}
		 ?>
	</table>
</body>
</html>