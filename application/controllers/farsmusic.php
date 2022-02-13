<?php

class farsmusic extends Controller {
	
	function index()
	{
		$template = $this->loadView('index');
		$model= $this->loadModel('mindex');

		$user_ip=$_SERVER['REMOTE_ADDR'];
		$model->addvisit($user_ip);


		if (isset($_GET['cat']) && !isset($_GET['singer']) && $_GET['cat'] != "" && !is_numeric($_GET['cat'])){
			$cat=$_GET['cat'];
			$cat=htmlentities($cat);
			$cat=htmlspecialchars($cat);
			$cat=str_replace("'","",$cat);
			$cat=str_replace("<","",$cat);
			$cat=str_replace(">","",$cat);
			$cat=str_replace("/","",$cat);
			$cat=str_replace("`","",$cat);
			$cat=str_replace("&","",$cat);
			if (strlen($cat) >=2){
				$all_page=$model->getpage($cat,'');
			}else{
				$all_page=$model->getpage('','');
			}

		}elseif (isset($_GET['singer']) && !isset($_GET['cat'])){
			$singer=$_GET['singer'];
			$singer=htmlentities($singer);
			$singer=htmlspecialchars($singer);
			$singer=str_replace("'","",$singer);
			$singer=str_replace("<","",$singer);
			$singer=str_replace(">","",$singer);
			$singer=str_replace("/","",$singer);
			$singer=str_replace("`","",$singer);
			$singer=str_replace("&","",$singer);
			if (strlen($singer) >=2){
				$all_page=$model->getpage('',$singer);
			}else{
				$all_page=$model->getpage('','');
			}
		}elseif (isset($_GET['cat']) && isset($_GET['singer'])){
			$singer=$_GET['singer'];
			$singer=htmlentities($singer);
			$singer=htmlspecialchars($singer);
			$singer=str_replace("'","",$singer);
			$singer=str_replace("<","",$singer);
			$singer=str_replace(">","",$singer);
			$singer=str_replace("/","",$singer);
			$singer=str_replace("`","",$singer);
			$singer=str_replace("&","",$singer);

			$cat=$_GET['cat'];
			$cat=htmlentities($cat);
			$cat=htmlspecialchars($cat);
			$cat=str_replace("'","",$cat);
			$cat=str_replace("<","",$cat);
			$cat=str_replace(">","",$cat);
			$cat=str_replace("/","",$cat);
			$cat=str_replace("`","",$cat);
			$cat=str_replace("&","",$cat);

			if (strlen($cat) >= 2 && strlen($singer) >=2){
				$all_page=$model->getpage($cat,$singer);
			}else{
				$all_page=$model->getpage('','');
			}
		}else{
			$all_page=$model->getpage('','');
		}

		$template->set('pages',$all_page);


		if (isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] != "" && $_GET['page'] <= $all_page && $_GET['page'] > 1){
			$page=$_GET['page'];
			if (isset($_GET['cat']) && !isset($_GET['singer']) && $_GET['cat'] != "" && !is_numeric($_GET['cat'])){
				$cat=$_GET['cat'];
				$cat=htmlentities($cat);
				$cat=htmlspecialchars($cat);
				$cat=str_replace("'","",$cat);
				$cat=str_replace("<","",$cat);
				$cat=str_replace(">","",$cat);
				$cat=str_replace("/","",$cat);
				$cat=str_replace("`","",$cat);
				$cat=str_replace("&","",$cat);
				if (strlen($cat) >=2){
					$all_song=$model->getsong($page,$cat,'');
				}else{
					$all_song=$model->getsong($page,'','');
				}

			}elseif (isset($_GET['singer']) && !isset($_GET['cat'])){
				$singer=$_GET['singer'];
				$singer=htmlentities($singer);
				$singer=htmlspecialchars($singer);
				$singer=str_replace("'","",$singer);
				$singer=str_replace("<","",$singer);
				$singer=str_replace(">","",$singer);
				$singer=str_replace("/","",$singer);
				$singer=str_replace("`","",$singer);
				$singer=str_replace("&","",$singer);
				if (strlen($singer) >=2){
					$all_song=$model->getsong($page,'',$singer);
				}else{
					$all_song=$model->getsong($page,'','');
				}
			}elseif (isset($_GET['cat']) && isset($_GET['singer'])){
				$singer=$_GET['singer'];
				$singer=htmlentities($singer);
				$singer=htmlspecialchars($singer);
				$singer=str_replace("'","",$singer);
				$singer=str_replace("<","",$singer);
				$singer=str_replace(">","",$singer);
				$singer=str_replace("/","",$singer);
				$singer=str_replace("`","",$singer);
				$singer=str_replace("&","",$singer);

				$cat=$_GET['cat'];
				$cat=htmlentities($cat);
				$cat=htmlspecialchars($cat);
				$cat=str_replace("'","",$cat);
				$cat=str_replace("<","",$cat);
				$cat=str_replace(">","",$cat);
				$cat=str_replace("/","",$cat);
				$cat=str_replace("`","",$cat);
				$cat=str_replace("&","",$cat);

				if (strlen($cat) >= 2 && strlen($singer) >=2){
					$all_song=$model->getsong($page,$cat,$singer);
				}else{
					$all_song=$model->getsong($page,'','');
				}
			}else{
				$all_song=$model->getsong($page,'','');
			}
		}else{
			$page=1;
			if (isset($_GET['cat']) && !isset($_GET['singer']) && $_GET['cat'] != "" && !is_numeric($_GET['cat'])){
				$cat=$_GET['cat'];
				$cat=htmlentities($cat);
				$cat=htmlspecialchars($cat);
				$cat=str_replace("'","",$cat);
				$cat=str_replace("<","",$cat);
				$cat=str_replace(">","",$cat);
				$cat=str_replace("/","",$cat);
				$cat=str_replace("`","",$cat);
				$cat=str_replace("&","",$cat);
				if (strlen($cat) >=2){
					$all_song=$model->getsong($page,$cat,'');
				}else{
					$all_song=$model->getsong($page,'','');
				}

			}elseif (isset($_GET['singer']) && !isset($_GET['cat'])){
				$singer=$_GET['singer'];
				$singer=htmlentities($singer);
				$singer=htmlspecialchars($singer);
				$singer=str_replace("'","",$singer);
				$singer=str_replace("<","",$singer);
				$singer=str_replace(">","",$singer);
				$singer=str_replace("/","",$singer);
				$singer=str_replace("`","",$singer);
				$singer=str_replace("&","",$singer);
				if (strlen($singer) >=2){
					$all_song=$model->getsong($page,'',$singer);
				}else{
					$all_song=$model->getsong($page,'','');
				}
			}elseif (isset($_GET['cat']) && isset($_GET['singer'])){
				$singer=$_GET['singer'];
				$singer=htmlentities($singer);
				$singer=htmlspecialchars($singer);
				$singer=str_replace("'","",$singer);
				$singer=str_replace("<","",$singer);
				$singer=str_replace(">","",$singer);
				$singer=str_replace("/","",$singer);
				$singer=str_replace("`","",$singer);
				$singer=str_replace("&","",$singer);

				$cat=$_GET['cat'];
				$cat=htmlentities($cat);
				$cat=htmlspecialchars($cat);
				$cat=str_replace("'","",$cat);
				$cat=str_replace("<","",$cat);
				$cat=str_replace(">","",$cat);
				$cat=str_replace("/","",$cat);
				$cat=str_replace("`","",$cat);
				$cat=str_replace("&","",$cat);

				if (strlen($cat) >= 2 && strlen($singer) >=2){
					$all_song=$model->getsong($page,$cat,$singer);
				}else{
					$all_song=$model->getsong($page,'','');
				}
			}else{
				$all_song=$model->getsong($page,'','');
			}
		}

		$template->set('all_song',$all_song);



		$advertise=$model->getadvertise();
		$template->set('advertise',$advertise);

		$setting=$model->getsetting();
		$template->set('setting',$setting);

		$category=$model->getcategory();
		$template->set('category',$category);

		$header_song=$model->getheadersong();
		$template->set('header_song',$header_song);

		$new_song=$model->getnewsong();
		$template->set('new_song',$new_song);

		$like_song=$model->getlikesong();
		$template->set('like_song',$like_song);

		$visit_song=$model->getvisitsong();
		$template->set('visit_song',$visit_song);

		$template->render();
	}
    
}

?>
