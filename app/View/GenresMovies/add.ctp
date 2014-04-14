
<!--File: /app/View/GenresMovies/add.ctp -->


<h1>Add a Genre</h1>

<?php
	echo $this->Form->create('GenresMovie');
	echo $this->Form->input('movie_id', array(
		'options' => array($allmovies) ));
	echo $this->Form->input('genre_id', array(
		'options' => array($allgenres)) );
	echo $this->Form->end('Save New Genre');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
	
	