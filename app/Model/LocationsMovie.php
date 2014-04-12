<?php
/**
*	Cake Model for the locations and movies join table database.
*/
App::uses('AppModel','Model');

class LocationsMovie extends AppModel {
	public $primaryKey = 'id';
	
	public $belongsTo = array( 
		'Movie', 'Location'
	);

}