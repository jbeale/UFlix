
<!--File: /app/View/Movies/edit.ctp -->


<h1>Edit Movie</h1>


<?php
	echo $this->Form->create('Movie');
	echo $this->Form->input('title');
	echo $this->Form->input('rating');
	echo $this->Form->input('stars');
	echo $this->Form->input('release');
	echo $this->Form->input('posterFilename');
	echo $this->Form->input('trailerurl');
	echo $this->Form->input('tagline');
	echo $this->Form->input('summary');
	echo $this->Form->input('movie_id', array('type' => 'hidden'));
	echo $this->Form->end('Update Movie');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'),
	array('escape' => false, 'title' => 'Cancel') ); ?> </div>