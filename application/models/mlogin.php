<?php

class mlogin extends Model {
	
	public function isadmin($username,$password)
	{
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		$username=md5($username);
		$password=md5($password);

		$res= $con->query("SELECT * FROM `main` WHERE `username`='$username' AND `password`='$password'");
		if ($res->num_rows > 0){
			return true;
		}else{
			return false;
		}
	}
	public function addlog($ip,$operation){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		include_once 'calender.php';
		$dat=new persian_calendar();
		$date=$dat->date("Y/m/d");

		$tim=new DateTime("now",new DateTimeZone('Asia/Tehran'));
		$time=$tim->format('H:i:s');

		if ($con->query("INSERT INTO `log` (`date`,`time`,`ip`,`operation`) VALUES ('$date','$time','$ip','$operation')")){
			return true;
		}else{
			return false;
		}

	}

}

?>
