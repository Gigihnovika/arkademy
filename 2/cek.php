<?php
$nama = $_POST['nama'];
 
if($nama == ""){
	header("location:index.php?nama=kosong");
}else{
	echo "Nama anda adalah = ". $nama;
}

$password = $_POST['password'];
 
if($password == ""){
	header("location:index.php?password=kosong");
}else{
	echo "password anda adalah". $password;
}
?>