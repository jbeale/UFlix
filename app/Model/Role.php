<?php
/**
*	Cake Model for the roletypes database.
*/
App::uses('AppModel','Model');

class Role extends AppModel {
	public $primaryKey = 'role_id';
	
	public $hasMany = array(
		'RoleHaveManyCredits' => array(
			'className' => 'Credit',
			'foreignKey' => 'role_id'
		)
	);
	
	
}