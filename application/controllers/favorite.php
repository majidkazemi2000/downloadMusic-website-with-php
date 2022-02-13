<?php

class favorite extends Controller {
	
	function index()
	{
		$template = $this->loadView('favorite');
		$model= $this->loadModel('mfavorite');

		$user_ip=$_SERVER['REMOTE_ADDR'];

		$favorite_song=$model->getfavorite($user_ip);
		$template->set('favorite_song',$favorite_song);



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
