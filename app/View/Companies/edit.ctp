
<!--File: /app/View/Companies/edit.ctp -->


<h1>Edit Company</h1>

<?php
	echo $this->Form->create('Company');
	echo $this->Form->input('companyName');
	echo $this->Form->input('company_id', array('type' => 'hidden'));
	echo $this->Form->end('Update Company');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'), 
		array('escape' => false, 'title' => 'Cancel') ); ?> </div>