
<!--File: /app/View/LocationsMovie/edit.ctp -->


<h1>Edit Location</h1>


<?php
	echo $this->Form->create('LocationsMovie');
	echo $this->Form->input('movie_id', array(
		'options' => array($allmovies)));
	echo $this->Form->input('location_id', array(
		'options' => array($alllocations)));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Update Relation');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'),
	array('escape' => false, 'title' => 'Cancel') ); ?> </div>