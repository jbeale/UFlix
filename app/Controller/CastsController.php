<?php
/**
*	Controller for the casts database and model.
*/



class CastsController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function index() {
		$this->set('casts', $this->Cast->find('all'));
	}
	
	public function view($id) {
		if(!$id) {
			throw new NotFoundException(__('Invalid cast.'));
		}
		
		$cast = $this->Cast->findByCastId($id);
		
		if(!$cast) {
			throw new NotFoundException(__('Invalid cast.'));
		}
		
		$this->set('cast', $cast);
	}
	
	public function add() {
	
		if($this->request->is('post')) {
			$this->Cast->create();
			if($this->Cast->save($this->request->data)) {
				$this->Session->setFlash("Cast saved.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add cast member.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid cast.");
		}
		$cast = $this->Cast->findByCastId($id);
		
		if(!$cast) {
			throw new NotFoundException("Invalid cast.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->Cast->save($this->request->data['Cast'])) {
				$this->Session->setFlash("Cast Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to update cast.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $cast;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->Cast->delete($id)) {
			$this->Session->setFlash( __('The cast with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}

}