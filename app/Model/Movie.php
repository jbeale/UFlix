<?php
/**
*	Cake Model for the movies database.
*/
App::uses('AppModel','Model');

class Movie extends AppModel {
	public $primaryKey = 'movie_id';
	
	
	public $hasAandBelongsToMany = array(
	);
}