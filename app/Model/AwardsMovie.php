<?php
/**
*	Cake Model for the movies and awards join table database.
*/
App::uses('AppModel','Model');

class AwardsMovie extends AppModel {
	public $primaryKey = 'id';
	
	public $belongsTo = array (
		'Movie', 'Award'
	);
}