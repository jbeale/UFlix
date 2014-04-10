
<!--File: /app/View/Locations/add.ctp -->


<h1>Add Location</h1>

<?php
	echo $this->Form->create('Location');
	echo $this->Form->input('country');
	echo $this->Form->end('Save Location');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>