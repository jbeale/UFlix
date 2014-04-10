<?php
/**
*	Controller for the locations database and model.
*/



class LocationsController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('TmdbWrapper', 'Session');
	
	public function index() {
		$this->set('locations', $this->Location->find('all'));
	}
	
	public function view($id) {
		if(!$id) {
			throw new NotFoundException(__('Invalid Location.'));
		}
		
		$location = $this->Location->findByLocationId($id);
		
		if(!$location) {
			throw new NotFoundException(__('Invalid location.'));
		}
		
		$this->set('location', $location);
	}
	
	public function add() {
	
		if($this->request->is('post')) {
			$this->Location->create();
			if($this->Location->save($this->request->data)) {
				$this->Session->setFlash("Location saved.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add location.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid location.");
		}
		$location = $this->Location->findByLocationId($id);
		
		if(!$location) {
			throw new NotFoundException("Invalid location.");
		}
		
		if($this->request->is(array('post','put'))) {
			if($this->Location->save($this->request->data['Location'])) {
				$this->Session->setFlash("Location Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to update location.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $location;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->Location->delete($id)) {
			$this->Session->setFlash( __('The location with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}

}