
<!--File: /app/View/Credits/edit.ctp -->


<h1>Edit Credit</h1>

<?php
	echo $this->Form->create('Credit');
	echo $this->Form->input('movie_id');
	echo $this->Form->input('role_id');
	echo $this->Form->input('cast_id');
	echo $this->Form->input('character');
	echo $this->Form->input('credit_id', array('type' => 'hidden'));
	echo $this->Form->end('Update Credit');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'),
	array('escape' => false, 'title' => 'Cancel') ); ?> </div>