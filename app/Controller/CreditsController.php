<?php
/**
*	Controller for the credits database and model.
*/



class CreditsController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function index() {
		$this->set('credits', $this->Credit->find('all'));
	}
	
	public function view($id) {
		if(!$id) {
			throw new NotFoundException(__('Invalid credit.'));
		}
		
		$credit = $this->Credit->findByCreditId($id);
		
		if(!$credit) {
			throw new NotFoundException(__('Invalid credit.'));
		}
		
		$this->set('credit', $credit);
	}
	
	public function add() {
	
		if($this->request->is('post')) {
			$this->Credit->create();
			if($this->Credit->save($this->request->data)) {
				$this->Session->setFlash("Credit saved.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add credit.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid credit.");
		}
		$credit = $this->Credit->findByMovieId($id);
		
		if(!$credit) {
			throw new NotFoundException("Invalid credit.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->Credit->save($this->request->data['Credit'])) {
				$this->Session->setFlash("Credit Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to update credit.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $credit;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->Credit->delete($id)) {
			$this->Session->setFlash( __('The credit with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}

}