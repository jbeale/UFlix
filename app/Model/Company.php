<?php
/**
*	Cake Model for the companies database.
*/
App::uses('AppModel','Model');

class Company extends AppModel {
	public $primaryKey = 'company_id';
	
	public $hasMany = array(
		'CompaniesMovie'
	);
}