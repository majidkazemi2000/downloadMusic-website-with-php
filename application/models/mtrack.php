<?php

class mtrack extends Model {

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
	function getsong($id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res=$con->query("SELECT * FROM `song` WHERE `id`='$id' AND `status`='show'");
		if ($res != null && $res->num_rows >0){
			$result=$res->fetch_assoc();
			return $result;
		}else{
			return false;
		}
	}


	function getsamesong($id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");
		$res=$con->query("SELECT * FROM `song` WHERE `id`='$id' AND `status`='show'");
		if ($res != null && $res->num_rows > 0){
			$result=$res->fetch_assoc();
			$song=$result['name'];
			$singer=$result['singer'];
			$res2=$con->query("SELECT * FROM `song` WHERE `singer`='$singer' AND `name`<>'$song' AND `status`='show'");
			if ($res2 != null && $res2->num_rows > 0){
				return $res2;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	function getcomment($id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		$res=$con->query("SELECT * FROM `comment` WHERE `song_id`='$id' AND `status`='show'");
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

	function visit($id){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		$res=$con->query("SELECT * FROM `song` WHERE `id`='$id' AND `status`='show'");

		if ($res != null && $res->num_rows > 0){
			$result=$res->fetch_assoc();

			$visit_count=$result['visit_count'];
			$visit = ++$visit_count;
			if ($con->query("UPDATE `song` SET `visit_count`='$visit' WHERE `id`='$id'")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}

?>
