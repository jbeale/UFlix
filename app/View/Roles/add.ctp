
<!--File: /app/View/Roles/add.ctp -->


<h1>Add Role</h1>

<?php
	echo $this->Form->create('Role');
	echo $this->Form->input('roleName');
	echo $this->Form->end('Save Role');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>