<?php

App::uses('Component', 'Controller');

class TmdbWrapperComponent extends Component {
	private $api_key = '291cd0ae04af02e8f1a3da69ef7ef9b0';

	private $token;
	private $client;
	private $repository;
	private $movieSeed;
	
	private $configRepository;
	private $config;
	private $imageHelper;
	
	public function __construct() {
		$this->initTmdb();
	}
	
	private function initTmdb() {

		$this->token = new \Tmdb\ApiToken($this->api_key);
		$this->client = new \Tmdb\Client($this->token);

	}
	
	private function initImageHelper() {
		$configRepository = new \Tmdb\Repository\ConfigurationRepository($this->client);
		$config = $configRepository->load();
		
		$this->imageHelper = new \Tmdb\Helper\ImageHelper($config);
		
	}
	
	public function getPopularMovies($page) {
		$this->repository = new \Tmdb\Repository\MovieRepository($this->client);
		$this->movieSeed = $this->repository->getTopRated(array('page' => $page));
	}
	
	public function getMovieSeed() {
		return $this->movieSeed;
	}
}

?>