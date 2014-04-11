<?php
/**
*	Controller for the companies database and model.
*/



class CompaniesController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function index() {
		$this->set('companies', $this->Company->find('all'));
	}
	public function view($id) {
		if(!$id) {
			throw new NotFoundException(__('Invalid company.'));
		}
		
		$company = $this->Company->findByCompanyId($id);
		
		if(!$company) {
			throw new NotFoundException(__('Invalid company.'));
		}
		
		$this->set('company', $company);
	}
	
	public function add() {
	
		if($this->request->is('post')) {
			$this->Company->create();
			if($this->Company->save($this->request->data)) {
				$this->Session->setFlash("Company saved.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add company.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid company.");
		}
		$company = $this->Company->findByCompanyId($id);
		
		if(!$company) {
			throw new NotFoundException("Invalid company.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->Company->save($this->request->data['Company'])) {
				$this->Session->setFlash("Company Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to update company.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $company;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->Company->delete($id)) {
			$this->Session->setFlash( __('The company with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}

}