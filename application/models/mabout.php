<?php

class mabout extends Model {

	public function getheadersong(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `song` ORDER BY `visit_count`,`date` DESC LIMIT 4");
		if ($res != null && $res->num_rows > 0){
			return $res;
		}else{
			return false;
		}
	}


	public function getnewsong(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `song` ORDER BY `date` DESC LIMIT 15");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}

	public function getlikesong(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `song` ORDER BY `like_count` DESC LIMIT 15");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}


	public function getvisitsong(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `song` ORDER BY `visit_count` DESC LIMIT 15");
		if ( $res != null &&$res->num_rows > 0){
			return $res;
		}else{
			return false;
		}
	}

	public function getcategory(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `category` WHERE `status`='show'");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}

	function getsetting(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$res=$con->query("SELECT * FROM `setting` WHERE `id`=1");
		if ($res->num_rows >0 && $res != null){
			$result=$res->fetch_assoc();
			return $result;
		} else{
			return false;
		}

	}

	public function getadvertise(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res= $con->query("SELECT * FROM `advertise` WHERE `status`='show' ORDER BY `date` DESC");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}


	function getsinger(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		$res=$con->query("SELECT * FROM `singer`");
		if ($res->num_rows > 0 && $res != null){
			return $res;
		}else{
			return false;
		}
	}

}

?>
