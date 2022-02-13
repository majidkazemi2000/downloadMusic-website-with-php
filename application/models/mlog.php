<?php

class mlog extends Model {
	
	public function getlog(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `log` ORDER BY `time` DESC");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}
	public function searchlog($search_item,$search_text){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `log` WHERE `$search_item`='$search_text' ORDER BY `time` DESC");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}


}

?>
