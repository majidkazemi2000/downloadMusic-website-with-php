<?php

class msetting extends Model {

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

	function updatesetting($telegram,$instagram,$comment,$like){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$telegram=trim($telegram);
		$telegram=str_replace(" ","",$telegram);

		$instagram=trim($instagram);
		$instagram=str_replace(" ","",$instagram);

		if ($comment != "off" && $comment != "on"){
			$comment = "off";
		}
		if ($like != "off" && $like != "on"){
			$like = "off";
		}

		if ($con->query("UPDATE `setting` SET `telegram_address`='$telegram',`instagram_address`='$instagram',`comment_sys`='$comment',`like_sys`='$like'")){
			return true;
		}else{
			return false;
		}

	}


}

?>
