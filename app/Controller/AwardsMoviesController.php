<?php
/**
*	Controller for the awards and movies joining database and model.
*/



class AwardsMoviesController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	public $uses = array('Movie','Award');
	
	public function index() {
		$this->set('awardsmovies', $this->AwardsMovie->find('all'));
	}
	
	
	public function add() {
	
		if($this->request->is('post')) {
			$this->Movie->create();
			if($this->Movie->save($this->request->data)) {
				$this->Session->setFlash("Movie saved.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add movie.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid movie.");
		}
		$movie = $this->Movie->findByMovieId($id);
		$this->set('allStudios',$this->CompaniesMovie->find('list'));
		
		if(!$movie) {
			throw new NotFoundException("Invalid movie.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->Movie->save($this->request->data['Movie'])) {
				$this->Session->setFlash("Movie Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to update movie.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $movie;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->Movie->delete($id)) {
			$this->Session->setFlash( __('The movie with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}
	
	

}