<?php
/**
*	Controller for the movies database and model.
*/



class MoviesController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('TmdbWrapper', 'Session');
	public $uses = array( 'Movie', 'Award', 'Location', 'Genre', 'Company' );
	
	public function index() {
		$this->set('movies', $this->Movie->find('all'));
	}
	
	public function seed($page = 100) {
		$this->TmdbWrapper->getPopularMovies($page);
		$this->set('movieSeeds', $this->TmdbWrapper->getMovieSeed());
	}
	
	public function view($id) {
		if(!$id) {
			throw new NotFoundException(__('Invalid movie.'));
		}
		
		$movie = $this->Movie->findByMovieId($id);
		
		if(!$movie) {
			throw new NotFoundException(__('Invalid movie.'));
		}
		
		$this->set('allLocations',$this->Movie->LocationsMovie->find('list'));
		$this->set('allGenres',$this->Movie->GenresMovie->find('list'));
		$this->set('allStudios',$this->Movie->CompaniesMovie->find('list'));
		$this->set('allAwards',$this->Movie->AwardsMovie->find('list'));
		$this->set('allCredits',$this->Movie->CreditList->find('list'));
		$this->set('awardsWon',$this->Movie->AwardsWon->find('list'));
		
		$this->set('movie', $movie);
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