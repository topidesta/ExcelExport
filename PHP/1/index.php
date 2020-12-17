<!--
-- Source Code from My Notes Code (www.mynotescode.com)
-- 
-- FOLLOW US on Social Media
-- Facebook : http://facebook.com/mynotescode/
-- Twitter  : http://twitter.com/code_notes
-- Google+  : http://plus.google.com/118319575543333993544
--
-- SUBSCRIBE US on Youtube
-- https://www.youtube.com/channel/UCO394itv-u7Tn4CgI3bMYIg 
--
-- Terimakasih telah mengunjungi blog kami.
-- Jangan lupa untuk Like dan Share catatan-catatan yang ada di blog kami.
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>Export Data ke Excel dengan PHPExcel</title>

	</head>
	<body>
		<!-- HEADER
		-- SKRIP HANYA UNTUK HEADER
		-- HAPUS SAJA JIKA TIDAK DIPERLUKAN
		-->
		<div style="background: whitesmoke;padding: 10px;">
			<h1 style="margin-top: 0;">Export Data ke Excel dengan PHPExcel</h1>
			<p>
				FOLLOW US ON &nbsp;
				<a target="_blank" style="background: #3b5998; padding: 0 5px; border-radius: 4px; color: #f7f7f7; text-decoration: none;" href="https://www.facebook.com/mynotescode">Facebook</a> 
				<a target="_blank" style="background: #00aced; padding: 0 5px; border-radius: 4px; color: #ffffff; text-decoration: none;" href="https://twitter.com/mynotescode">Twitter</a> 
				<a target="_blank" style="background: #d34836; padding: 0 5px; border-radius: 4px; color: #ffffff; text-decoration: none;" href="https://plus.google.com/118319575543333993544">Google+</a>
				<a target="_blank" style="background: black; padding: 0 5px; border-radius: 4px; color: #ffffff; text-decoration: none;" href="https://www.youtube.com/channel/UCO394itv-u7Tn4CgI3bMYIg">YouTube</a>
			</p>
		</div>
		<!-- END HEADER -->
		
		<h3>Data Siswa</h3>
		
		<a href="proses.php">Export ke Excel</a><br><br>
		
		<table border="1" cellpadding="5">
			<tr>
				<th>No</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Telepon</th>
				<th>Alamat</th>
			</tr>
			<?php
			// Load file koneksi.php
			include "koneksi.php";
			
			// Buat query untuk menampilkan semua data siswa
			$sql = mysqli_query($connect, "SELECT * FROM siswa");
	
			$no = 1; // Untuk penomoran tabel, di awal set dengan 1
			while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$data['nis']."</td>";
				echo "<td>".$data['nama']."</td>";
				echo "<td>".$data['jenis_kelamin']."</td>";
				echo "<td>".$data['telp']."</td>";
				echo "<td>".$data['alamat']."</td>";
				echo "</tr>";
				
				$no++; // Tambah 1 setiap kali looping
			}
			?>
		</table>
	</body>
</html>
