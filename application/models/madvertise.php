<?php

class madvertise extends Model {
	
	public function getadvertise(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `advertise` ORDER BY `date` DESC");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}

	public function delete($id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		if ($con->query("DELETE FROM `advertise` WHERE `id`='$id'")){
			return true;
		}
	}

	public function update($status,$id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		if ($con->query("UPDATE `advertise` SET `status`='$status' WHERE `id`='$id'")){
			return true;
		}
	}

}

?>
