<?php
/**
*	Cake Model for the genre and movie join table database.
*/
App::uses('AppModel','Model');

class GenresMovie extends AppModel {
	public $primaryKey = 'id';
	
	public $belongsTo = array(
		'Movie', 'Genre'
	);
}