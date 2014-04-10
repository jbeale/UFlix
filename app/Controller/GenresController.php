<?php
/**
*	Controller for the genres database and model.
*/



class GenresController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function index() {
		$this->set('genres', $this->Genre->find('all'));
	}
	
	public function view($id) {
		if(!$id) {
			throw new NotFoundException(__('Invalid genre.'));
		}
		
		$genre = $this->Genre->findByGenreId($id);
		
		if(!$genre) {
			throw new NotFoundException(__('Invalid genre.'));
		}
		
		$this->set('genre', $genre);
	}
	
	public function add() {
	
		if($this->request->is('post')) {
			$this->Genre->create();
			if($this->Genre->save($this->request->data)) {
				$this->Session->setFlash("Genre saved.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add genre.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid genre.");
		}
		$genre = $this->Genre->findByGenreId($id);
		
		if(!$genre) {
			throw new NotFoundException("Invalid genre.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->Genre->save($this->request->data['Genre'])) {
				$this->Session->setFlash("Genre Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to update genre.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $genre;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->Genre->delete($id)) {
			$this->Session->setFlash( __('The genre with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}

}