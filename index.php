<?php 
	//start session
	session_start();
	//load file config.php
	include "config.php";
	//load file model.php
	include "model/model.php";
	//kiem tra xem user da dang nhap chua, neu chua dang nhap thi hien thi MVC login, neu da dang nhap thi hien thi cac chuc nang cua admin
	$controller = isset($_GET["controller"])?$_GET["controller"]:"";
	if($controller==""||file_exists("controller/frontend/controller_$controller.php")==false)
	$controller="controller/frontend/controller_home.php";
	else
	$controller = "controller/frontend/controller_$controller.php";
		//load file master
	include "view/frontend/master.php";
 ?>