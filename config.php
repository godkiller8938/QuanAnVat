<?php 
	//file config.php chua thong tin ket noi csdl
	$hostname = "localhost";
	$user = "id6909757_kyquan";
	$password = "sach1708";
	$database = "id6909757_kyquan";
	//thuc hien ket noi
	$db = mysqli_connect($hostname,$user,$password,$database);
	//set charset
	mysqli_set_charset($db,"UTF8");
 ?>