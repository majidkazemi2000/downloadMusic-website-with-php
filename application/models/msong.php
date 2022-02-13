<?php

class msong extends Model {
	
	public function getsong(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `song` ORDER BY `date` DESC");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}
	public function search($search_item,$search_text){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		if ($search_item == "singer" || $search_item == "name"){
			$res= $con->query("SELECT * FROM `song` WHERE `$search_item` LIKE '%$search_text%' ORDER BY `date` DESC");
		}else{
			$res= $con->query("SELECT * FROM `song` WHERE `$search_item`='$search_text' ORDER BY `date` DESC");
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
		if ($con->query("DELETE FROM `song` WHERE `id`='$id'")){
			return true;
		}
	}
	public function update($status,$id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		if ($con->query("UPDATE `song` SET `status`='$status' WHERE `id`='$id'")){
			return true;
		}
	}


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
