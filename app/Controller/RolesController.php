<?php
/**
*	Controller for the roles database and model.
*/



class RolesController extends AppController{
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function index() {
		$this->set('roles', $this->Role->find('all'));
	}
	
	public function view($id) {
		if(!$id) {
			throw new NotFoundException(__('Invalid role.'));
		}
		
		$role = $this->Role->findByRoleId($id);
		
		if(!$role) {
			throw new NotFoundException(__('Invalid role.'));
		}
		
		$this->set('role', $role);
	}
	
	public function add() {
	
		if($this->request->is('post')) {
			$this->Role->create();
			if($this->Role->save($this->request->data)) {
				$this->Session->setFlash("Role saved.");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash("Unable to add role.");
		}
		
	}
	
	public function edit($id) {

		if(!$id) {
			throw new NotFoundException("Invalid role.");
		}
		$role = $this->Role->findByRoleId($id);
		
		if(!$role) {
			throw new NotFoundException("Invalid role.");
		}
		
		if($this->request->is(array('post','put'))) {
		
			if($this->Role->save($this->request->data['Role'])) {
				$this->Session->setFlash("Role Updated");
				$this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash("Unable to update role.");
		}
		
		if(!$this->request->data) {
			$this->request->data = $role;
		}
		

		
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if($this->Role->delete($id)) {
			$this->Session->setFlash( __('The role with id: %s has been deleted.', h($id) ));
			return $this->redirect(array('action' => 'index'));
		}
	}

}