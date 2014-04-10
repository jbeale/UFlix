
<!--File: /app/View/Genres/add.ctp -->


<h1>Add Genre</h1>

<?php
	echo $this->Form->create('Genre');
	echo $this->Form->input('genreName');
	echo $this->Form->end('Save Genre');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>