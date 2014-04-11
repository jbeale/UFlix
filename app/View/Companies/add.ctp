
<!--File: /app/View/Companies/add.ctp -->


<h1>Add Company</h1>

<?php
	echo $this->Form->create('Company');
	echo $this->Form->input('companyName');
	echo $this->Form->end('Save Company');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>