<?php
/**
*	Cake Model for the awards database.
*/
App::uses('AppModel','Model');

class Award extends AppModel {
	public $primaryKey = 'award_id';
	
	public $hasMany = array(
		'AwardsMovie'
	);
	
	public $belongsTo = array(
		'Winner' => array(
			'className' => 'Movie',
			'foreignKey' => 'winner_id'
		)
		
	);
}