<?php
/**
*	Controller for the locations and movies joining database and model.
*/



class LocationsMoviesController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	public $uses = array('LocationsMovie','Movie','Location');
	
	public function index() {
	
		$this->set('alllocations', $this->Location->find('list', array('fields' => array('country'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		$this->set('locationsmovies', $this->LocationsMovie->find('all'));
	}
	
	
	public function add() {
	
		$this->set('alllocations', $this->Location->find('list', array('fields' => array('country'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		
		if($this->request->is('post')) {

			$this->LocationsMovie->create();
			if($this->LocationsMovie->save($this->request->data)) {
				$this->Session->setFlash("Movie has new location.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add Movie and Location Relation.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid Locations Movie.");
		}
		$locationsmovie = $this->LocationsMovie->findById($id);
		
		$this->set('alllocations', $this->Location->find('list', array('fields' => array('country'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		
		
		if(!$locationsmovie) {
			throw new NotFoundException("Invalid Locations Movie.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->LocationsMovie->save($this->request->data)) {
				$this->Session->setFlash("Movie joined to Location Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to relate movie and location.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $locationsmovie;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->LocationsMovie->delete($id)) {
			$this->Session->setFlash( __('The movie with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}
	
	

}