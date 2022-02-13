<?php

class msinger extends Model {
	
	public function getsinger(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `singer`");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}
	public function search($search_item,$search_text){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		if ($search_item == "name"){
			$res= $con->query("SELECT * FROM `singer` WHERE `$search_item` LIKE '%$search_text%'");
		}else{
			$res= $con->query("SELECT * FROM `singer` WHERE `$search_item`='$search_text'");
		}
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}

	public function delete($id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		if ($con->query("DELETE FROM `singer` WHERE `id`='$id'")){
			return true;
		}
	}

	public function getcategory(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `category`");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}

}

?>
