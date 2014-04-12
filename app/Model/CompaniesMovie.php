<?php
/**
*	Cake Model for the companies and movie join table database.
*/
App::uses('AppModel','Model');

class CompaniesMovie extends AppModel {
	public $primaryKey = 'id';
	
	public $belongsTo = array (
		'Movie', 'Company'
	);
}