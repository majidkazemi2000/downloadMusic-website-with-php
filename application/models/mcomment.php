<?php

class mcomment extends Model {
	
	public function getcomment(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `comment` ORDER BY `date` DESC");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}
	public function search($search_item,$search_text){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		if ($search_item == "contain"){
			$res= $con->query("SELECT * FROM `comment` WHERE `contain` LIKE '%$search_text%' ORDER BY `date` DESC");
		}else{
			$res= $con->query("SELECT * FROM `comment` WHERE `$search_item`='$search_text' ORDER BY `date` DESC");
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
		if ($con->query("DELETE FROM `comment` WHERE `id`='$id'")){
			return true;
		}
	}
	public function update($status,$id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		if ($con->query("UPDATE `comment` SET `status`='$status' WHERE `id`='$id'")){
			return true;
		}
	}

}

?>
