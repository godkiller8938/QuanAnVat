<?php 
	class controller_logout{
		public function __construct(){
			unset($_SESSION["user"]);
			echo "<script>location.href='admin.php';</script>";
		}
	}
	new controller_logout();
 ?>