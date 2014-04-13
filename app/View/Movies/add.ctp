
<!--File: /app/View/Movies/add.ctp -->


<h1>Add Movie</h1>

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
	echo $this->Form->end('Save Movie');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
	
	