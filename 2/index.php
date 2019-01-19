<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Validasi Dengan PHP | www.malasngoding.com</title>
</head>
<body>
	<?php 
	if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
		}
	}
	?>
	<?php 
	if(isset($_GET['password'])){
		if($_GET['password'] == "kosong"){
			echo "<h4 style='color:red'> Nama dan Password Belum Di Masukkan !</h4>";
		}
	}
	?>
 
	<h4>Masukkan Nama Anda :</h4>
	<form action="cek.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<br>
				<td><input type="submit" value="Cek"></td>
			</tr>						
		</table>
	</form>
 
</body>
</html>