<?php

class mindex extends Model {

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

	public function getsong($page,$cat='',$singer=''){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		$song_per_page=15;

		if ($cat != "" && $singer != ""){
			$res= $con->query("SELECT * FROM `song` WHERE `category`='$cat' AND `singer`='$singer' ORDER BY `date` DESC");
		}elseif ($cat != "" && $singer == ""){
			$res= $con->query("SELECT * FROM `song` WHERE `category`='$cat' ORDER BY `date` DESC");
		}elseif ($singer != "" && $cat == ""){
			$res= $con->query("SELECT * FROM `song` WHERE `singer`='$singer' ORDER BY `date` DESC");
		}else{
			$res= $con->query("SELECT * FROM `song` ORDER BY `date` DESC");
		}
		if ($res->num_rows > 0 && $res != null){
			$all_song=$res->num_rows;
			$all_page=ceil($all_song/$song_per_page);
			$start=($page-1)*$song_per_page;


			if ($cat != "" && $singer != ""){
				$res2= $con->query("SELECT * FROM `song` WHERE `category`='$cat' AND `singer`='$singer' ORDER BY `date` DESC LIMIT ".$start." , ".$song_per_page);
			}elseif ($cat != "" && $singer == ""){
				$res2= $con->query("SELECT * FROM `song` WHERE `category`='$cat' ORDER BY `date` DESC LIMIT ".$start." , ".$song_per_page);
			}elseif ($singer != "" && $cat == ""){
				$res2= $con->query("SELECT * FROM `song` WHERE `singer`='$singer' ORDER BY `date` DESC LIMIT ".$start." , ".$song_per_page);
			}else{
				$res2= $con->query("SELECT * FROM `song` ORDER BY `date` DESC LIMIT ".$start." , ".$song_per_page);
			}
			return $res2;
		}else{
			return false;
		}
	}

	public function getpage($cat='',$singer=''){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		$song_per_page=15;


		if ($cat != "" && $singer != ""){
			$res= $con->query("SELECT * FROM `song` WHERE `category`='$cat' AND `singer`='$singer' ORDER BY `date` DESC");
		}elseif ($cat != "" && $singer == ""){
			$res= $con->query("SELECT * FROM `song` WHERE `category`='$cat' ORDER BY `date` DESC");
		}elseif ($singer != "" && $cat == ""){
			$res= $con->query("SELECT * FROM `song` WHERE `singer`='$singer' ORDER BY `date` DESC");
		}else{
			$res= $con->query("SELECT * FROM `song` ORDER BY `date` DESC");
		}
		if ($res->num_rows > 0 && $res != null){
			$all_song=$res->num_rows;
			$all_page=ceil($all_song/$song_per_page);
			return $all_page;
		}else{
			return false;
		}
	}

	public function addvisit($user_ip){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		include_once 'calender.php';
		$dat=new persian_calendar();
		$date=$dat->date("Y/m/d");

		if ($con->query("INSERT INTO `visit` (`user_ip`,`date`) VALUES ('$user_ip','$date')")){
			return true;
		}else{
			return false;
		}
	}

}

?>
