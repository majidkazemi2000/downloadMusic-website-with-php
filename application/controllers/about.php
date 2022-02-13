<?php

class about extends Controller {
	
	function index()
	{
		$template = $this->loadView('about');
		$model= $this->loadModel('mabout');

		$singer=$model->getsinger();
		$template->set('singer',$singer);

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
