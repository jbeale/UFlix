
<!--File: /app/View/Casts/edit.ctp -->


<h1>Edit Cast Memeber</h1>

<?php
	echo $this->Form->create('Cast');
	echo $this->Form->input('castName');
	echo $this->Form->input('cast_id', array('type' => 'hidden'));
	echo $this->Form->end('Update Cast Member');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>