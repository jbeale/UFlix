
<!--File: /app/View/LocationsMovies/add.ctp -->


<h1>Add Movie</h1>

<?php
	echo $this->Form->create('LocationsMovie');
	echo $this->Form->input('movie_id', array(
		'options' => array($allmovies) ));
	echo $this->Form->input('location_id', array(
		'options' => array($alllocations)) );
	echo $this->Form->end('Save New Location');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
	
	