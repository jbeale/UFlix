<?php
/**
*	Cake Model for the movies and awards join table database.
*/
App::uses('AppModel','Model');

class Credit extends AppModel {
	public $primaryKey = 'credit_id';

	public $belongsTo = array( 
		'CreditsBelongtoMovie' => array(
			'className' => 'Movie',
			'foreignKey' => 'movie_id'
		),
		'CreditsBelongtoRole' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id'
		),
		'CreditsBelongtoCast' => array(
			'className' => 'Cast',
			'foreignKey' => 'cast_id'
		)
	);
}