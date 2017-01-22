<?php

class BaseController extends Controller {

	//protection csrf
    public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
	}

}
