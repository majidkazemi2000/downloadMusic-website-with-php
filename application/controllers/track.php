<?php

class track extends Controller {
	
	function index($id='')
	{
		$template = $this->loadView('single');
		$model= $this->loadModel('mtrack');

		if (!isset($id) || !is_numeric($id) || $id == ""){
			header("location://localhost/farsmusic/index/");
		}else{
			$result=$model->getsong($id);
			if ($result != false){
				$template->set('song',$result);
				$model->visit($id);
			}else{
				header("location://localhost/farsmusic/index/");
			}
		}


		$comment=$model->getcomment($id);
		$template->set('comment',$comment);

		$same_song=$model->getsamesong($id);
		$template->set('same_song',$same_song);

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
