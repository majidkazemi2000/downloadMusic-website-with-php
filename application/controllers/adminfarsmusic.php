<?php

class adminfarsmusic extends Controller {

	function __construct()
	{
		if (!isset($_SESSION['admin']) || !$_SESSION['admin'] == "admin/admin"){
			header("location://localhost/farsmusic/index/");
		}
	}

	function index()
	{
		$temp = $this->loadView('admin');
		$temp->render();
	}
	function user(){
		$temp = $this->loadView('user');
		$model= $this->loadModel('muser');

		if (isset($_POST['search_user'])){
			$search_item=$_POST['search_item'];
			if ($search_item == "firstname"){
				$search_text=$_POST['search_text'];
			}elseif ($search_item == "lastname"){
				$search_text=$_POST['search_text'];
			}elseif ($search_item == "logindate"){
				$search_text=$_POST['search_logindate'];
			}elseif ($search_item == "status"){
				$search_text=$_POST['search_status'];
			}else{
				$search_text="";
				$search_item="";
			}

			$search_text=trim($search_text);
			$search_text=htmlentities($search_text);

			$search_item=trim($search_item);
			$search_item=htmlentities($search_item);
			$search_item=str_replace(" ","",$search_item);

			$user=$model->search($search_item,$search_text);

		}else{
			$user=$model->getuser();
		}

		$temp->set('user',$user);

		if (isset($_GET['active']) && $_GET['active'] != "" && is_numeric($_GET['active'])){
			$id=$_GET['active'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("active",$id);
			header("location:../user/");
		} elseif (isset($_GET['inactive']) && $_GET['inactive'] != "" && is_numeric($_GET['inactive'])){
			$id=$_GET['inactive'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("inactive",$id);
			header("location:../user/");
		}elseif (isset($_GET['delete']) && $_GET['delete'] != "" && is_numeric($_GET['delete'])){
			$id=$_GET['delete'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->delete($id);
			header("location:../user/");
		}
		$temp->render();
	}
	function song(){
		$temp = $this->loadView('song');
		$model= $this->loadModel('msong');
		if (isset($_POST['search_song'])){
			$search_item=$_POST['search_item'];
			if ($search_item == "date"){
				$search_text=$_POST['search_date'];
			}elseif ($search_item == "status"){
				$search_text=$_POST['search_text'];

				if ($search_text != "hide" && $search_text != "show"){
					$search_text="";
				}
				$search_text=$_POST['search_status'];
			}elseif ($search_item == "singer" || $search_item == "name"){
				$search_text=$_POST['search_text'];
			}else{
				$search_item = "";
				$search_text = "";
			}

			$search_text=trim($search_text);
			$search_text=htmlentities($search_text);

			$search_item=trim($search_item);
			$search_item=htmlentities($search_item);
			$search_item=str_replace(" ","",$search_item);

			$song=$model->search($search_item,$search_text);

		}else{
			$song=$model->getsong();
		}


		$singer=$model->getsinger();
		$category=$model->getcategory();

		$temp->set('song',$song);
		$temp->set('singer',$singer);
		$temp->set('category',$category);


		if (isset($_GET['show']) && $_GET['show'] != "" && is_numeric($_GET['show'])){
			$id=$_GET['show'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("show",$id);
			header("location:../song/");
		} elseif (isset($_GET['hide']) && $_GET['hide'] != "" && is_numeric($_GET['hide'])){
			$id=$_GET['hide'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("hide",$id);
			header("location:../song/");
		}elseif (isset($_GET['delete']) && $_GET['delete'] != "" && is_numeric($_GET['delete'])){
			$id=$_GET['delete'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->delete($id);
			header("location:../song/");
		}
		$temp->render();
	}
	function advertise(){
		$temp = $this->loadView('advertise');
		$model= $this->loadModel('madvertise');

		$advertise=$model->getadvertise();

		$temp->set('advertise',$advertise);


		if (isset($_GET['show']) && $_GET['show'] != "" && is_numeric($_GET['show'])){
			$id=$_GET['show'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("show",$id);
			header("location:../advertise/");
		} elseif (isset($_GET['hide']) && $_GET['hide'] != "" && is_numeric($_GET['hide'])){
			$id=$_GET['hide'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("hide",$id);
			header("location:../advertise/");
		}elseif (isset($_GET['delete']) && $_GET['delete'] != "" && is_numeric($_GET['delete'])){
			$id=$_GET['delete'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->delete($id);
			header("location:../advertise/");
		}

		$temp->render();
	}
	function setting(){
		$temp = $this->loadView('setting');
		$model= $this->loadModel('msetting');

		$setting=$model->getsetting();
		$temp->set('settings',$setting);
		if (isset($_POST['change'])){
			$telegram=$_POST['telegram'];
			$instagram=$_POST['instagram'];

			if (isset($_POST['like_sys'])){
				$like=$_POST['like_sys'];
			}else{
				$like="off";
			}

			if (isset($_POST['comment_sys'])){
				$comment=$_POST['comment_sys'];
			}else{
				$comment="off";
			}
			$model->updatesetting($telegram,$instagram,$comment,$like);
			header("location:../setting/");
		}

		$temp->render();
	}
	function singer(){
		$temp = $this->loadView('singer');
		$model=$this->loadModel('msinger');
		if (isset($_POST['search_singer'])){
			$search_item=$_POST['search_item'];
			if ($search_item == "name"){
				$search_text=$_POST['search_text'];
			}elseif ($search_item == "category"){
				$search_text=$_POST['search_category'];
			}else{
				$search_text="";
				$search_item="";
			}
			$search_text=trim($search_text);
			$search_text=htmlentities($search_text);

			$search_item=trim($search_item);
			$search_item=htmlentities($search_item);

			$singer=$model->search($search_item,$search_text);
		}else{
			$singer=$model->getsinger();
		}
		$category=$model->getcategory();

		$temp->set('singer',$singer);
		$temp->set('category',$category);

		if (isset($_GET['delete']) && $_GET['delete'] != "" && is_numeric($_GET['delete'])){
			$id=$_GET['delete'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->delete($id);
			header("location:../singer/");
		}

		$temp->render();
	}
	function log(){
		$temp = $this->loadView('log');
		$model=$this->loadModel('mlog');

		if (isset($_POST['search_log'])){
			$search_item=$_POST['search_item'];
			if ($search_item == "date"){
				$search_text=$_POST['search_date'];
			}elseif ($search_item == "operation"){
				$search_text=$_POST['search_operation'];
			}else{
				$search_item="";
				$search_text="";
			}
			$search_text=trim($search_text);
			$search_text=htmlentities($search_text);
			$search_text=str_replace(" ","",$search_text);

			$search_item=trim($search_item);
			$search_item=htmlentities($search_item);
			$search_item=str_replace(" ","",$search_item);

			$log=$model->searchlog($search_item,$search_text);
		}else{
			$log=$model->getlog();
		}

		$temp->set('log',$log);
		$temp->render();
	}
	function comment(){
		$temp = $this->loadView('comment');
		$model= $this->loadModel('mcomment');
		if (isset($_POST['search_comment'])){
			$search_item=$_POST['search_item'];
			if ($search_item == "contain"){
				$search_text=$_POST['search_contain'];
			}elseif ($search_item == "date"){
				$search_text=$_POST['search_date'];

			}elseif ($search_item == "status"){
				$search_text=$_POST['search_status'];

			}else{
				$search_item ="";
				$search_text="";
			}
			$search_text=trim($search_text);
			$search_text=htmlentities($search_text);
			$search_text=str_replace(" ","",$search_text);

			$search_item=trim($search_item);
			$search_item=htmlentities($search_item);
			$search_item=str_replace(" ","",$search_item);

			$comment=$model->search($search_item,$search_text);
		}else{
			$comment=$model->getcomment();
		}
		$temp->set('comment',$comment);
		if (isset($_GET['show']) && $_GET['show'] != "" && is_numeric($_GET['show'])){
			$id=$_GET['show'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("show",$id);
			header("location:../comment/");
		} elseif (isset($_GET['hide']) && $_GET['hide'] != "" && is_numeric($_GET['hide'])){
			$id=$_GET['hide'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("hide",$id);
			header("location:../comment/");
		}elseif (isset($_GET['delete']) && $_GET['delete'] != "" && is_numeric($_GET['delete'])){
			$id=$_GET['delete'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->delete($id);
			header("location:../comment/");
		}


		$temp->render();
	}
	function category(){
		$temp = $this->loadView('category');
		$model=$this->loadModel('mcategory');

		$category=$model->getcategory();
		$temp->set('category',$category);

		if (isset($_GET['show']) && $_GET['show'] != "" && is_numeric($_GET['show'])){
			$id=$_GET['show'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("show",$id);
			header("location:../category/");
		} elseif (isset($_GET['hide']) && $_GET['hide'] != "" && is_numeric($_GET['hide'])){
			$id=$_GET['hide'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->update("hide",$id);
			header("location:../category/");
		}elseif (isset($_GET['delete']) && $_GET['delete'] != "" && is_numeric($_GET['delete'])){
			$id=$_GET['delete'];
			$id=trim($id);
			$id=htmlentities($id);
			$id=str_replace(" ","",$id);
			$model->delete($id);
			header("location:../category/");
		}

		$temp->render();
	}
	function logout(){
		$model=$this->loadModel('mlogin');
		if ($model->addlog($_SERVER['REMOTE_ADDR'],"logout")){
			session_destroy();
			header("location://localhost/farsmusic/index/");
		}
	}
    
}

?>
