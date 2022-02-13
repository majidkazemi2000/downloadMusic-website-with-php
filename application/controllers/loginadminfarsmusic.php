<?php

class loginadminfarsmusic extends Controller {

	function __construct()
	{
		if (isset($_SESSION['admin']) && $_SESSION['admin'] == "admin/admin"){
			header("location:../../adminfarsmusic/index/");
		}
	}


	function index()
	{
		$template = $this->loadView('login');

		if (isset($_POST['login'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$username=trim($username);
			$username=str_replace(" ","",$username);
			$username=htmlentities($username);
			$password=trim($password);
			$password=str_replace(" ","",$password);
			$password=htmlentities($password);
			$model=$this->loadModel('mlogin');
			$res=$model->isadmin($username,$password);
			if ($res){
				$model->addlog($_SERVER['REMOTE_ADDR'],"login");
				$_SESSION['admin']="admin/admin";
				header("location:../../adminfarsmusic/index/");
			}else{
				header("location:../index/");
			}
		}

		$template->render();
	}
    
}

?>
