<?php
/**
*	Cake Model for the roletypes database.
*/
App::uses('AppModel','Model');

class Role extends AppModel {
	public $primaryKey = 'role_id';
	
	public $hasMany = 'RoleHaveManyCredits' => array(
		'className' => 'Credit',
		'foreignKey' => 'credit_id'	
	);
	
	
}