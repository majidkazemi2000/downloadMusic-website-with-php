<?php

class muser extends Model {
	
	public function getuser(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `users` ORDER BY `logindate` DESC");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}
	public function search($search_item,$search_text){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		if ($search_item == "firstname" || $search_item == "lastname"){
			$res= $con->query("SELECT * FROM `users` WHERE `$search_item` LIKE '%$search_text%' ORDER BY `logindate` DESC");
		}else{
			$res= $con->query("SELECT * FROM `users` WHERE `$search_item`='$search_text' ORDER BY `logindate` DESC");
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
		if ($con->query("DELETE FROM `users` WHERE `id`='$id'")){
			return true;
		}
	}
	public function update($status,$id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		if ($con->query("UPDATE `users` SET `status`='$status' WHERE `id`='$id'")){
			return true;
		}
	}

}

?>
