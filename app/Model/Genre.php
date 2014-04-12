<?php
/**
*	Cake Model for the genres database.
*/
App::uses('AppModel','Model');

class Genre extends AppModel {
	public $primaryKey = 'genre_id';
	
	public $hasMany = array (
		'GenresMovie'
	};
}