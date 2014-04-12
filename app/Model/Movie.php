<?php
/**
*	Cake Model for the movies database.
*/
App::uses('AppModel','Model');

class Movie extends AppModel {
	public $primaryKey = 'movie_id';
		
	public $hasMany = array(
		'LocationsMovie', 'GenresMovie', 'CompaniesMovie',
		'AwardsMovie', 
		'CreditList' => array(
			'className' => 'Credit',
			'foreignKey' => 'movie_id'
		),
		'AwardsWon' => array(
			'className' => 'Award',
			'foreignKey' => 'winner_id'
		)
	);
}