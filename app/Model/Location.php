<?php
/**
*	Cake Model for the locations database.
*/
App::uses('AppModel','Model');

class Location extends AppModel {
	public $primaryKey = 'location_id';
	
	public $hasAndBelongsToMany = array (
			'movielocations' => array( 'className' => 'Movie'));
}