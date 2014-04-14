<?php
/**
*	Controller for the companies and movies joining database and model.
*/



class CompaniesMoviesController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	public $uses = array('CompaniesMovie','Movie','Company');
	
	public function index() {
	
		$this->set('allcompanies', $this->Company->find('list', array('fields' => array('companyName'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		$this->set('companiesmovies', $this->CompaniesMovie->find('all'));
	}
	
	
	public function add() {
	
		$this->set('allcompanies', $this->Company->find('list', array('fields' => array('companyName'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		
		if($this->request->is('post')) {

			$this->CompaniesMovie->create();
			if($this->CompaniesMovie->save($this->request->data)) {
				$this->Session->setFlash("Movie has new company.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add Movie and Company Relation.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid Companies Movie.");
		}
		$companiesmovie = $this->CompaniesMovie->findById($id);
		
		$this->set('allcompanies', $this->Company->find('list', array('fields' => array('companyName'))) );
		$this->set('allmovies', $this->Movie->find('list'));
		
		
		if(!$companiesmovie) {
			throw new NotFoundException("Invalid Companies Movie.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->CompaniesMovie->save($this->request->data)) {
				$this->Session->setFlash("Movie joined to Company Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to relate movie and company.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $companiesmovie;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->CompaniesMovie->delete($id)) {
			$this->Session->setFlash( __('The movie with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}
	
	

}