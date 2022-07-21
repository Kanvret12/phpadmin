<?php
echo "WELCOME, THIS IS BRAZIL";

// LOGIN
$host= "localhost";
$user= "root";
$password= "";
$db="red";
echo"<br>";
	$conn = mysqli_connect($host,$user,$password);
	if(!$conn)
	{
		die("koneksi gagal:".mysqli_connect_error());
	}
echo "KONEKSI BERHASIL";
mysqli_close($conn);

?>