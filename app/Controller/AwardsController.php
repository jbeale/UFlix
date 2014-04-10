<?php
/**
*	Controller for the awards database and model.
*/

class AwardsController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function index() {
		$this->set('awards', $this->Award->find('all'));
	}
	
	public function view($id) {
		if(!$id) {
			throw new NotFoundException(__('Invalid award.'));
		}
		
		$award = $this->Award->findByAwardId($id);
		
		if(!$award) {
			throw new NotFoundException(__('Invalid award.'));
		}
		
		$this->set('award', $award);
	}
	
	public function add() {
	
		if($this->request->is('post')) {
			$this->Award->create();
			if($this->Award->save($this->request->data)) {
				$this->Session->setFlash("Award saved.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add award.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid award.");
		}
		$award = $this->Award->findByAwardId($id);
		
		if(!$award) {
			throw new NotFoundException("Invalid award.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->Award->save($this->request->data['Award'])) {
				$this->Session->setFlash("Award Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to update award.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $award;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->Award->delete($id)) {
			$this->Session->setFlash( __('The award with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}

}