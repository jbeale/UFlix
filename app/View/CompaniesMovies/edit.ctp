
<!--File: /app/View/CompaniesMovie/edit.ctp -->


<h1>Edit Comapny</h1>


<?php
	echo $this->Form->create('CompaniesMovie');
	echo $this->Form->input('movie_id', array(
		'options' => array($allmovies)));
	echo $this->Form->input('company_id', array(
		'options' => array($allcompanies)));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Update Relation');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'),
	array('escape' => false, 'title' => 'Cancel') ); ?> </div>