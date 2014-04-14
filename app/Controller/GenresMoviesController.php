<?php
/**
*	Controller for the genres and movies joining database and model.
*/



class GenresMoviesController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	public $uses = array('GenresMovie','Movie','Genre');
	
	public function index() {
	
		$this->set('allgenres', $this->Genre->find('list', array('fields' => array('genreName'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		$this->set('genresmovies', $this->GenresMovie->find('all'));
	}
	
	
	public function add() {
	
		$this->set('allgenres', $this->Genre->find('list', array('fields' => array('genreName'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		
		if($this->request->is('post')) {

			$this->GenresMovie->create();
			if($this->GenresMovie->save($this->request->data)) {
				$this->Session->setFlash("Movie has new Genre.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add Movie and Genre Relation.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid Genres Movie.");
		}
		$Genresmovie = $this->GenresMovie->findById($id);
		
		$this->set('allgenres', $this->Genre->find('list', array('fields' => array('genreName'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		
		
		if(!$Genresmovie) {
			throw new NotFoundException("Invalid Genres Movie.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->GenresMovie->save($this->request->data)) {
				$this->Session->setFlash("Movie joined to Genre Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to relate movie and Genre.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $Genresmovie;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->GenresMovie->delete($id)) {
			$this->Session->setFlash( __('The movie with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}
	
	

}