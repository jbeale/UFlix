
<!--File: /app/View/Locations/edit.ctp -->


<h1>Edit Location</h1>

<?php
	echo $this->Form->create('Location');
	echo $this->Form->input('country');
	echo $this->Form->input('location_id', array('type' => 'hidden'));
	echo $this->Form->end('Update Location');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>