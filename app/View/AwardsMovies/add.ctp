
<!--File: /app/View/AwardsMovies/add.ctp -->


<h1>Add Movie</h1>

<?php
	echo $this->Form->create('AwardsMovie');
	echo $this->Form->input('movie_id', array(
		'options' => array($allmovies)) );
	echo $this->Form->input('award_id', array(
		'options' => array($allawards)) );
	echo $this->Form->end('Save New Nomination');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
	
	