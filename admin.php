<?php
	//start session
	session_start();
	//load file config.php
	include "config.php";
	//load file model.php
	include "model/model.php";
	//kiem tra xem user da dang nhap chua, neu chua dang nhap thi hien thi MVC login, neu da dang nhap thi hien thi cac chuc nang cua admin
	if(isset($_SESSION["user"]) == false)
		include "controller/backend/controller_login.php";
	else{
		//lay bien controller truyen tu url
		$controller = isset($_GET["controller"])?$_GET["controller"]:"";
		//gan gia tri de bien $controller tro thanh duong dan thuc (la duong dan tro den file controller can load ra)
		$controller = "controller/backend/controller_$controller.php";
		//load file master
		include "view/backend/master.php";
	}
 ?>