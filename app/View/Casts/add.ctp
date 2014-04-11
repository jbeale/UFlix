
<!--File: /app/View/Casts/add.ctp -->


<h1>Add Cast Member</h1>

<?php
	echo $this->Form->create('Cast');
	echo $this->Form->input('castName');
	echo $this->Form->end('Save Cast Memeber');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'),
				array('escape' => false, 'title' => 'Cancel') ); ?> </div>