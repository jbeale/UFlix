
<!--File: /app/View/Genres/edit.ctp -->


<h1>Edit Genre</h1>

<?php
	echo $this->Form->create('Genre');
	echo $this->Form->input('genreName');
	echo $this->Form->input('genre_id', array('type' => 'hidden'));
	echo $this->Form->end('Update Movie');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>