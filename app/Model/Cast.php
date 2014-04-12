<?php
/**
*	Cake Model for the casts database.
*/
App::uses('AppModel','Model');

class Cast extends AppModel {
	public $primaryKey = 'cast_id';
	
		public $hasMany = array('CastHaveManyCredits' => array(
		'className' => 'Credit',
		'foreignKey' => 'cast_id')
	);
}