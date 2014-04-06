<?php
/**
*	Controller for the movies database and model.
*/

require_once dirname(__DIR__).'/Vendor/autoload.php';

class MoviesController extends AppController{
	
	public $helpers = array('Html', 'Form');

	private $isInit = false;
	private $token;
	private $client;
	private $TMDBseed;
	
	public function index() {
		$this->set('movies', $this->Movie->find('all'));
		

	}
	
	public function seed($num = 100) {
		if(! $this->isInit ){
			$this->init_tmdb();
		}
	
		$this->TMDBseed = $this->client->getMoviesApi()->getMovie($num);
		$this->set('TMDBseeds', $this->TMDBseed);
	}
	
	private function init_tmdb() {
		$this->token = new \Tmdb\ApiToken('291cd0ae04af02e8f1a3da69ef7ef9b0');
		$this->client = new \Tmdb\Client($this->token);
	}
}