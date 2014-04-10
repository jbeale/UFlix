
<!--File: /app/View/Awards/edit.ctp -->


<h1>Edit Award</h1>

<?php
	echo $this->Form->create('Award');
	echo $this->Form->input('awardName');
	echo $this->Form->input('category');
	echo $this->Form->input('year');
	echo $this->Form->input('winner_id');
	echo $this->Form->input('award_id', array('type' => 'hidden'));
	echo $this->Form->end('Update Award');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>