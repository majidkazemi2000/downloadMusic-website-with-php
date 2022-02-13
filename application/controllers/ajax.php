<?php

class ajax extends Controller {
	
	function addcategory()
	{
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');
		$eng_name=$_POST['english_name'];
		$eng_name=trim($eng_name);
		$eng_name=htmlentities($eng_name);

		$persian_name=$_POST['persian_name'];
		$persian_name=trim($persian_name);
		$persian_name=htmlentities($persian_name);

		$status=$_POST['status'];
		if ($status != "show" && $status != "hide"){
			$status="hide";
		}

		if ($eng_name == "" || $persian_name == "" || $status == ""){
			return false;
		}

		if ($con->query("INSERT INTO `category` (`eng_name`,`persian_name`,`status`) VALUES ('$eng_name','$persian_name','$status')")){
			return true;
		}else{
			return false;
		}

	}
	function getcategory(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');
		$id=$_POST['id'];
		$id=str_replace(" ","",$id);
		if (!is_numeric($id)){
			return false;
		}

		$res=$con->query("SELECT * FROM `category` WHERE `id`='$id'");
		if ($res->num_rows > 0 && $res != null){
			$result=$res->fetch_assoc();
			return $result['eng_name']."_".$result['persian_name']."_".$result['status'];
		}else{
			return false;
		}
	}
	function updatecategory(){

		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');
		$eng_name=$_POST['english_name_edit'];
		$eng_name=trim($eng_name);
		$eng_name=htmlentities($eng_name);

		$persian_name=$_POST['persian_name_edit'];
		$persian_name=trim($persian_name);
		$persian_name=htmlentities($persian_name);

		$status=$_POST['status_edit'];
		if ($status != "show" && $status != "hide"){
			$status="hide";
		}

		$id=$_POST['id'];
		$id=str_replace(" ","",$id);

		if (!is_numeric($id)){
			return false;
		}

		if ($eng_name == "" || $persian_name == "" || $status == ""){
			return false;
		}

		if ($con->query("UPDATE `category` SET `eng_name`='$eng_name',`persian_name`='$persian_name',`status`='$status' WHERE `id`='$id'")){
			return true;
		}else{
			return false;
		}


	}

	function addsong(){

		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$name=$_POST['name'];
		$name=htmlentities($name);
		$name=trim($name);

		$url=$_POST['url'];
		$url=trim($url);

		$img=$_POST['img'];
		$img=trim($img);

		$category=$_POST['category'];
		$category=htmlentities($category);
		$category=trim($category);

		$singer=$_POST['singer'];
		$singer=htmlentities($singer);
		$singer=trim($singer);

		$status=$_POST['status'];
		if ($status != "show" && $status != "hide"){
			return false;
		}

		$text=$_POST['text'];
		$text=trim($text);

		$analyze_text=$_POST['analyze_text'];
		$analyze_text=trim($analyze_text);

		if ($name == "" || $url == "" || $img == "" || $category == "" || $singer == "" || $status == "" || $text == "" || $analyze_text == ""){
			return false;
		}

		include_once 'calender.php';
		$dat=new persian_calendar();
		$date=$dat->date("Y/m/d");

		if ($con->query("INSERT INTO `song` (`name`,`singer`,`category`,`url`,`img`,`status`,`text`,`analyze_text`,`date`) VALUES ('$name','$singer','$category','$url','$img','$status','$text','$analyze_text','$date')")){
			return true;
		}else{
			return false;
		}


	}

	function getsong(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');
		$id=$_POST['id'];
		$id=str_replace(" ","",$id);
		if (!is_numeric($id)){
			return false;
		}

		$res=$con->query("SELECT * FROM `song` WHERE `id`='$id'");
		if ($res->num_rows > 0 && $res != null){
			$result=$res->fetch_assoc();
			return $result['id']."%".$result['text']."%".$result['analyze_text']."%".$result['img'];
		}else{
			return false;
		}

	}

	function addsinger(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$name=$_POST['name'];
		$name=trim($name);
		$name=htmlentities($name);

		$img=$_POST['img'];
		$img=trim($img);
		$img=htmlentities($img);

		$category=$_POST['category'];
		$category=trim($category);
		$category=htmlentities($category);

		$about=$_POST['about'];
		$about=trim($about);

		if ($name == "" || $img == "" || $category == "" || $about == ""){
			return false;
		}

		if ($con->query("INSERT INTO `singer` (`name`,`img`,`category`,`about`) VALUES ('$name','$img','$category','$about')")){
			return true;
		}else{
			return false;
		}

	}

	function getsinger(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$id=$_POST['id'];
		$id=str_replace(" ","",$id);
		if (!is_numeric($id)){
			return false;
		}

		$res=$con->query("SELECT * FROM `singer` WHERE `id`='$id'");
		if ($res->num_rows > 0 && $res != null){
			$result=$res->fetch_assoc();

			$singer=$result['name'];
			$res2=$con->query("SELECT COUNT(*) FROM `song` WHERE `singer`='$singer'");

			if ($res2->num_rows >0 && $res2 != null){
				$num=$res2->fetch_assoc();
				$number_music=$num['COUNT(*)'];
			}else{
				$number_music=0;
			}
			return $result['about']."%".$number_music;
		}else{
			return false;
		}
	}

	function addadvertise(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$title=$_POST['title'];
		$title=trim($title);
		$title=htmlentities($title);

		$img=$_POST['img'];
		$img=trim($img);
		$img=htmlentities($img);

		$url=$_POST['url'];
		$url=trim($url);
		$url=htmlentities($url);

		$status=$_POST['status'];
		$status=trim($status);
		$status=htmlentities($status);

		if ($status != "show" && $status != "hide"){
			$status="hide";
		}

		if ($status == "" || $img == "" || $url == "" || $title == ""){
			return false;
		}

		include_once 'calender.php';
		$dat=new persian_calendar();
		$date=$dat->date("Y/m/d");

		if ($con->query("INSERT INTO `advertise` (`img`,`title`,`url`,`status`,`date`) VALUES ('$img','$title','$url','$status','$date')")){
			return true;
		}else{
			return false;
		}

	}

	function getadvertise(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');
		$id=$_POST['id'];
		$id=str_replace(" ","",$id);
		if (!is_numeric($id)){
			return false;
		}

		$res=$con->query("SELECT * FROM `advertise` WHERE `id`='$id'");
		if ($res->num_rows > 0 && $res != null){
			$result=$res->fetch_assoc();
			return $result['title']."*".$result['url']."*".$result['img']."*".$result['status'];
		}else{
			return false;
		}
	}

	function editadvertise(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$title=$_POST['title'];
		$title=trim($title);
		$title=htmlentities($title);

		$img=$_POST['img'];
		$img=trim($img);
		$img=htmlentities($img);

		$url=$_POST['url'];
		$url=trim($url);
		$url=htmlentities($url);

		$status=$_POST['status'];
		$status=trim($status);
		$status=htmlentities($status);

		if ($status != "show" && $status != "hide"){
			$status="hide";
		}

		$id=$_POST['id'];
		$id=str_replace(" ","",$id);
		if (!is_numeric($id)){
			return false;
		}

		if ($status == "" || $img == "" || $url == "" || $title == "" || $id == ""){
			return false;
		}

		if ($con->query("UPDATE `advertise` SET `title`='$title',`img`='$img',`url`='$url',`status`='$status' WHERE `id`='$id'")){
			return true;
		}else{
			return false;
		}


	}

	function getuserinfo(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');
		$id=$_POST['id'];
		$id=str_replace(" ","",$id);
		if (!is_numeric($id)){
			return false;
		}


		$res=$con->query("SELECT * FROM `users` WHERE `id`='$id'");
		if ($res->num_rows > 0 && $res != null){
			$result=$res->fetch_assoc();

			$firstname=$result['firstname'];
			$lastname=$result['lastname'];
			$name=$firstname." ".$lastname;

			$ip=$result['ip'];

			$res1=$con->query("SELECT COUNT(*) FROM `comment` WHERE `sender`='$name'");
			$res2=$con->query("SELECT COUNT(*) FROM `like_song` WHERE `user_ip`='$ip'");
			$res3=$con->query("SELECT COUNT(*) FROM `visit` WHERE `user_ip`='$ip'");

			if ($res1->num_rows > 0 && $res1 != null){
				$result1=$res1->fetch_assoc();
				$comment=$result1['COUNT(*)'];
			}else{
				$comment=0;
			}

			if ($res2->num_rows > 0 && $res2 != null){
				$result2=$res2->fetch_assoc();
				$like=$result2['COUNT(*)'];
			}else{
				$like=0;
			}

			if ($res3->num_rows > 0 && $res3 != null){
				$result3=$res3->fetch_assoc();
				$visit=$result3['COUNT(*)'];
			}else{
				$visit=0;
			}

			return $like."%".$comment."%".$visit;
		}else{
			 return false;
		}

	}
	function addfavorite(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$song_id=$_POST['id'];
		$song_id=htmlentities($song_id);
		$song_id=str_replace(" ","",$song_id);
		if (!is_numeric($song_id)){
			return false;
		}

		$user_ip=$_POST['ip'];

		$res=$con->query("SELECT * FROM `favorite` WHERE `user_ip`='$user_ip' AND `song_id`='$song_id'");

		if ($res->num_rows >0 && $res != null){
			return false;
		}

		if ($con->query("INSERT INTO `favorite` (`user_ip`,`song_id`) VALUES ('$user_ip','$song_id')")){
			return true;
		}else{
			return false;
		}

	}


	function searchmusic(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$search_text=$_POST['searchtext'];
		$search_text=htmlspecialchars($search_text);
		$search_text=htmlentities($search_text);
		$search_text=str_replace(" ","",$search_text);
		$search_text=str_replace("/","",$search_text);
		$search_text=str_replace("'","",$search_text);
		$search_text=str_replace("<","",$search_text);
		$search_text=str_replace(">","",$search_text);


		if ($search_text != ""){
			$res=$con->query("SELECT * FROM `song` WHERE `name` LIKE '%$search_text%'");

			if ($res->num_rows > 0){
				foreach ($res as $val){
					$id=$val['id'];
					$name=$val['name'];
					$singer=$val['singer'];
					echo "<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center\" style=\"height: 40px;margin-top: 2px;margin-bottom: 2px;\">
						<a href=\"../track/index/$id\">
							<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"padding: 0px;background-color: #00CCFF;border-radius: 10px;height: 40px;\">
								<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center\" style=\"padding: 0px;\">
									<p style=\"line-height: 40px;font-family: 'B Yekan';color: black;\">$name</p>
								</div>
								<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center\" style=\"padding: 0px;\">
									<p style=\"line-height: 40px;font-family: 'B Yekan';color: black;\">$singer</p>
								</div>
							</div>
						</a>
					</div>";
				}
			}else{
				return false;
			}

		}else{
			return false;
		}


	}

	function searchsinger(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$name=$_POST['name'];
		$name=htmlspecialchars($name);
		$name=htmlentities($name);
		$name=str_replace(" ","",$name);
		$name=str_replace("/","",$name);
		$name=str_replace("'","",$name);
		$name=str_replace("<","",$name);
		$name=str_replace(">","",$name);

		if ($name != ""){
			$res=$con->query("SELECT * FROM `singer` WHERE `name` LIKE '$name%'");
			if ($res->num_rows > 0){
				foreach ($res as $val){
					$name=$val['name'];
					$id=$val['id'];
					$img=$val['img'];
					echo "<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center\" style=\"height: 80px;margin-top: 5px;margin-bottom: 2px;\">
								<a href=\"?singer=$name\">
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"padding: 0px;background-color: #00CCFF;border-radius: 10px;height: 80px;position: relative;\">
										<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-7 text-center\" style=\"padding: 0px;\">
											<p style=\"line-height: 80px;font-family: 'B Yekan';color: black;\" id=\"name_singer\">$name</p>
										</div>
										<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-5 text-center\" style=\"padding: 0px;border-left: solid 2px black;\">
											<img id=\"img_singer\" src=\"$img\" style=\"height: 70px;width: 70px;border-radius: 50%;margin-top: 5px;\">
										</div>
									</div>
								</a>
							</div>";
				}
			}else{
				return false;
			}
		}else{
			return false;
		}

	}



	function getsingerinfo(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		$id=$_POST['id'];
		$id=htmlentities($id);
		$id=str_replace(" ","",$id);
		if (!is_numeric($id)){
			return false;
		}

		$res=$con->query("SELECT * FROM `singer` WHERE `id`='$id'");
		if ($res->num_rows > 0 && $res != null){
			$result=$res->fetch_assoc();
			$about=$result['about'];
			$img=$result['img'];
			return $about."*".$img;
		} else{
			return false;
		}
	}


	function getsongforsinger(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		$id=$_POST['id'];
		$id=htmlentities($id);
		$id=str_replace(" ","",$id);
		if (!is_numeric($id)){
			return false;
		}

		$res=$con->query("SELECT * FROM `singer` WHERE `id`='$id'");
		if ($res->num_rows > 0 && $res != null){
			$result=$res->fetch_assoc();
			$name=$result['name'];
			$res2=$con->query("SELECT * FROM `song` WHERE `singer`='$name'");
			if ($res2->num_rows > 0 && $res != null){
				foreach ($res2 as $val){
					$song_id=$val['id'];
					$song=$val['name'];
					echo "<div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6 text-center\" style=\"margin-top: 5px;margin-bottom: 5px;height: auto;\">
                   			 <a href=\"../../track/index/$song_id\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"background-color: #00CCFF;color: white;padding: 0px;height: 30px;line-height: 30px;font-family: 'B Yekan';border-radius: 5px;text-decoration: none;\">$song</a>
                		</div>";
				}

			}else{
				return false;
			}

		} else{
			return false;
		}
	}



	function searchmusic2(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$search_text=$_POST['searchtext'];
		$search_text=htmlspecialchars($search_text);
		$search_text=htmlentities($search_text);
		$search_text=str_replace(" ","",$search_text);
		$search_text=str_replace("/","",$search_text);
		$search_text=str_replace("'","",$search_text);
		$search_text=str_replace("<","",$search_text);
		$search_text=str_replace(">","",$search_text);


		if ($search_text != ""){
			$res=$con->query("SELECT * FROM `song` WHERE `name` LIKE '%$search_text%'");

			if ($res->num_rows > 0){
				foreach ($res as $val){
					$id=$val['id'];
					$name=$val['name'];
					$singer=$val['singer'];
					echo "<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center\" style=\"height: 40px;margin-top: 2px;margin-bottom: 2px;\">
						<a href=\"../../track/index/$id\">
							<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"padding: 0px;background-color: #00CCFF;border-radius: 10px;height: 40px;\">
								<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center\" style=\"padding: 0px;\">
									<p style=\"line-height: 40px;font-family: 'B Yekan';color: black;\">$name</p>
								</div>
								<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center\" style=\"padding: 0px;\">
									<p style=\"line-height: 40px;font-family: 'B Yekan';color: black;\">$singer</p>
								</div>
							</div>
						</a>
					</div>";
				}
			}else{
				return false;
			}

		}else{
			return false;
		}


	}

	function searchsinger2(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$name=$_POST['name'];
		$name=htmlspecialchars($name);
		$name=htmlentities($name);
		$name=str_replace(" ","",$name);
		$name=str_replace("/","",$name);
		$name=str_replace("'","",$name);
		$name=str_replace("<","",$name);
		$name=str_replace(">","",$name);

		if ($name != ""){
			$res=$con->query("SELECT * FROM `singer` WHERE `name` LIKE '$name%'");
			if ($res->num_rows > 0){
				foreach ($res as $val){
					$name=$val['name'];
					$id=$val['id'];
					$img=$val['img'];
					echo "<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center\" style=\"height: 80px;margin-top: 5px;margin-bottom: 2px;\">
								<a href=\"../../index/?singer=$name\">
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"padding: 0px;background-color: #00CCFF;border-radius: 10px;height: 80px;position: relative;\">
										<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-7 text-center\" style=\"padding: 0px;\">
											<p style=\"line-height: 80px;font-family: 'B Yekan';color: black;\" id=\"name_singer\">$name</p>
										</div>
										<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-5 text-center\" style=\"padding: 0px;border-left: solid 2px black;\">
											<img id=\"img_singer\" src=\"$img\" style=\"height: 70px;width: 70px;border-radius: 50%;margin-top: 5px;\">
										</div>
									</div>
								</a>
							</div>";
				}
			}else{
				return false;
			}
		}else{
			return false;
		}

	}

	function likesong(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$song_id=$_POST['id'];
		$song_id=htmlentities($song_id);
		$song_id=str_replace(" ","",$song_id);
		if (!is_numeric($song_id)){
			return false;
		}

		$user_ip=$_POST['ip'];

		$res=$con->query("SELECT * FROM `like_song` WHERE `user_ip`='$user_ip' AND `song_id`='$song_id'");

		if ($res->num_rows >0 && $res != null){
			return false;
		}

		include_once 'calender.php';
		$dat=new persian_calendar();
		$date=$dat->date("Y/m/d");

		if ($con->query("INSERT INTO `like_song` (`user_ip`,`song_id`,`date`) VALUES ('$user_ip','$song_id','$date')")){

			$res1=$con->query("SELECT * FROM `song` WHERE `id`='$song_id'");

			if ($res1  != false && $res1->num_rows > 0){
				$result=$res1->fetch_assoc();

				$like_count=$result['like_count'];
				$like = ++$like_count;

				if ($con->query("UPDATE `song` SET `like_count`='$like' WHERE `id`='$song_id'")){
					return true;
				}else{
					return false;
				}

			}else{
				return false;
			}
		}else{
			return false;
		}
	}


	function rateup(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$comment_id=$_POST['id'];
		$comment_id=htmlentities($comment_id);
		$comment_id=str_replace(" ","",$comment_id);
		if (!is_numeric($comment_id)){
			return false;
		}

		$user_ip=$_POST['ip'];
		$operation='up';

		$res1=$con->query("SELECT * FROM `rate_comment` WHERE `user_ip`='$user_ip' AND `comment_id`='$comment_id' AND `operation`='$operation'");

		if ($res1 != null && $res1->num_rows > 0){
			return false;
		}else{
			if ($con->query("INSERT INTO `rate_comment` (`user_ip`,`comment_id`,`operation`) VALUES ('$user_ip','$comment_id','$operation')")){
				$res3=$con->query("SELECT * FROM `comment` WHERE `id`='$comment_id'");

				if ($res3 != null && $res3->num_rows >0){
					$result=$res3->fetch_assoc();
					$rate_comment=$result['rate'];
					$rate= ++$rate_comment;

					if ($con->query("UPDATE `comment` SET `rate`='$rate' WHERE `id`='$comment_id'")){
						return $rate."*";
					}else{
						return false;
					}

				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
	function ratedown(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$comment_id=$_POST['id'];
		$comment_id=htmlentities($comment_id);
		$comment_id=str_replace(" ","",$comment_id);
		if (!is_numeric($comment_id)){
			return false;
		}

		$user_ip=$_POST['ip'];
		$operation='down';

		$res1=$con->query("SELECT * FROM `rate_comment` WHERE `user_ip`='$user_ip' AND `comment_id`='$comment_id' AND `operation`='$operation'");

		if ($res1 != null && $res1->num_rows > 0){
			return false;
		}else{
			if ($con->query("INSERT INTO `rate_comment` (`user_ip`,`comment_id`,`operation`) VALUES ('$user_ip','$comment_id','$operation')")){
				$res3=$con->query("SELECT * FROM `comment` WHERE `id`='$comment_id'");

				if ($res3 != null && $res3->num_rows >0){
					$result=$res3->fetch_assoc();
					$rate_comment=$result['rate'];
					$rate= --$rate_comment;

					if ($con->query("UPDATE `comment` SET `rate`='$rate' WHERE `id`='$comment_id'")){
						return $rate."*";
					}else{
						return false;
					}

				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}

	function sendcomment(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,"utf8");

		$username=$_POST['username'];
		$username=str_replace(" ","",$username);

		$password=$_POST['password'];
		$password=str_replace(" ","",$password);

		$contain=$_POST['contain'];
		$contain=htmlentities($contain);
		$contain=htmlspecialchars($contain);
		$contain=str_replace("'","",$contain);
		$contain=str_replace(">","",$contain);
		$contain=str_replace("<","",$contain);
		$contain=str_replace("/","",$contain);

		$song_id=$_POST['song_id'];
		$song_id=htmlentities($song_id);
		$song_id=str_replace(" ","",$song_id);
		if (!is_numeric($song_id)){
			return false;
		}

		if (strlen($username) > 16 && strlen($username)<4){
			return false;
		}
		if (strlen($password) > 16 && strlen($password)<4){
			return false;
		}

		if (strlen($password) > 256 && strlen($password)<3){
			return false;
		}


		if ($username == "" || $password == "" || $contain == ""){
			return false;
		}

		$username=md5($username);
		$password=md5($password);

		$res=$con->query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' AND `status`='active'");
		if ($res != null && $res->num_rows > 0){
			include_once 'calender.php';
			$dat=new persian_calendar();
			$date=$dat->date("Y/m/d");

			$result=$res->fetch_assoc();
			$fname=$result['firstname'];
			$lname=$result['lastname'];
			$sender=$fname." ".$lname;

			$res1=$con->query("SELECT * FROM `comment` WHERE `sender`='$sender' AND `song_id`='$song_id'");

			if ($res1 != null && $res1->num_rows < 3){

				if ($con->query("INSERT INTO `comment` (`date`,`sender`,`song_id`,`contain`) VALUES ('$date','$sender','$song_id','$contain')")){

					$res2=$con->query("SELECT * FROM `song` WHERE `id`='$song_id' AND `status`='show'");
					if ($res2 != null && $res2->num_rows >0){
						$result2=$res2->fetch_assoc();
						$comment_count=$result2['comment_count'];
						$comment= ++$comment_count;
						if ($con->query("UPDATE `song` SET `comment_count`='$comment' WHERE `id`='$song_id'")){
							return "100";
						}else{
							return false;
						}
					}
				}else{
					return false;
				}

			}else{
				return "101";
			}
		}else{
			return false;
		}

	}

	function register(){
		$con=new mysqli("localhost","root","","music");
		mysqli_set_charset($con,'utf8');

		$fname=$_POST['fname'];
		$fname=trim($fname);
		$fname=htmlspecialchars($fname);
		$fname=htmlentities($fname);

		$lname=$_POST['lname'];
		$lname=trim($lname);
		$lname=htmlspecialchars($lname);
		$lname=htmlentities($lname);

		$username=$_POST['username'];
		$username=trim($username);
		$username=str_replace(" ","",$username);
		$username=htmlentities($username);
		$username=htmlspecialchars($username);

		$password=$_POST['password'];
		$password=trim($password);
		$password=htmlspecialchars($password);
		$password=htmlentities($password);
		$password=str_replace(" ","",$password);

		$phone=$_POST['phone'];
		$phone=str_replace(" ","",$phone);
		$phone=htmlentities($phone);
		$phone=htmlspecialchars($phone);

		$user_ip=$_POST['user_ip'];


		if (strlen($fname) <=2 || strlen($fname>32)){
			return false;
		}

		if (strlen($lname) <2 || strlen($lname>32)){
			return false;
		}

		if (strlen($username)<4 || strlen($username) >16){
			return false;
		}
		if (strlen($password) < 4 || strlen($password) > 16){
			return false;
		}
		$username=md5($username);
		$password=md5($password);

		if (strlen($phone) != 11 || !is_numeric($phone)){
			return false;
		}


		$res=$con->query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");
		if ($res != null && $res->num_rows >0){
			return false;
		}else{
			include_once 'calender.php';
			$dat=new persian_calendar();
			$date=$dat->date("Y/m/d");

			if ($con->query("INSERT INTO `users` (`ip`,`firstname`,`lastname`,`numberphone`,`username`,`password`,`logindate`) VALUES ('$user_ip','$fname','$lname','$phone','$username','$password','$date')")){
				return true;
			}else{
				return false;

			}
		}

	}

}

?>
