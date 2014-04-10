
<!--File: /app/View/Roles/edit.ctp -->


<h1>Edit Role</h1>

<?php
	echo $this->Form->create('Role');
	echo $this->Form->input('roleName');
	echo $this->Form->input('role_id', array('type' => 'hidden'));
	echo $this->Form->end('Update Role');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'),
			array('escape' => false, 'title' => 'Cancel') ); ?> </div>