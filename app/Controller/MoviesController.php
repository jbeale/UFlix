<?php
/**
*	Controller for the movies database and model.
*/

class MoviesController extends AppController{
	public $helpers = array('Html', 'Form');
	
	public function index() {
		$this->set('movies', $this->Movie->find('all'));
	}
}