
<!--File: /app/View/Awards/add.ctp -->


<h1>Add Movie</h1>

<?php
	echo $this->Form->create('Award');
	echo $this->Form->input('awardName');
	echo $this->Form->input('category');
	echo $this->Form->input('year');
	echo $this->Form->input('winner_id');
	echo $this->Form->end('Save Award');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>