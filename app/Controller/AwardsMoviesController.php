<?php
/**
*	Controller for the awards and movies joining database and model.
*/



class AwardsMoviesController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	public $uses = array('AwardsMovie','Movie','Award');
	
	public function index() {
	
		$this->set('allawards', $this->Award->find('list', array('fields' => array('awardName'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		$this->set('awardsmovies', $this->AwardsMovie->find('all'));
	}
	
	
	public function add() {
	
		$this->set('allawards', $this->Award->find('list', array('fields' => array('awardName'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		
		if($this->request->is('post')) {

			$this->AwardsMovie->create();
			if($this->AwardsMovie->save($this->request->data)) {
				$this->Session->setFlash("Movie has new award.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add Movie and Award Relation.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid Awards Movie.");
		}
		$awardsmovie = $this->AwardsMovie->findById($id);
		
		$this->set('allawards', $this->Award->find('list', array('fields' => array('awardName'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		
		
		if(!$awardsmovie) {
			throw new NotFoundException("Invalid Awards Movie.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->AwardsMovie->save($this->request->data)) {
				$this->Session->setFlash("Movie joined to Award Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to relate movie and award.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $awardsmovie;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->AwardsMovie->delete($id)) {
			$this->Session->setFlash( __('The movie with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}
	
	

}