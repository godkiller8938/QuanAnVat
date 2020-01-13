<?php 
	//file model.php su dung de thao tac voi csdl
	class model{
		//lay tat ca cac ban ghi
		public function get_all($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			$arr = array();
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
			return $arr;
		}
		//lay mot ban ghi
		public function get_a_record($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_fetch_object($result);
		}
		//thuc thi cau truy van
		public function execute($sql){
			global $db;
			mysqli_query($db,$sql);
		}
		//lay so luong ban ghi (co bao nhieu ban ghi?)
		public function num_rows($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_num_rows($result);
		}
		public function encode($str){
			$str= str_replace("'","\'",$str);
			$str= str_replace("<","&lt;",$str);
			$str= str_replace(">","&gt;",$str);
			$str= str_replace('"',"&quot;",$str);
			$str= str_replace("$","&dollar;",$str);
			$str= str_replace("(","&lpar;",$str);
			$str= str_replace(")","&rpar;",$str);
			$str= str_replace("/","&sol;",$str);
			$str= str_replace("%","&percnt;",$str);
			$str= str_replace("#","&num;",$str);
			$str= str_replace("`","&grave;",$str);
			$str= str_replace("^","&Hat;",$str);
			$str= str_replace("[","&lsqb;",$str);
			$str= str_replace("]","&rsqb;",$str);
			$str= str_replace("%","&percnt;",$str);
			return $str;
		}
	}
 ?>