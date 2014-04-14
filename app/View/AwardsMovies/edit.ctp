
<!--File: /app/View/AwardsMovie/edit.ctp -->


<h1>Edit Nomination</h1>


<?php
	echo $this->Form->create('AwardsMovie');
	echo $this->Form->input('movie_id', array(
		'options' => array($allmovies)));
	echo $this->Form->input('award_id', array(
		'options' => array($allawards)));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Update Relation');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'), array('action' => 'index'),
	array('escape' => false, 'title' => 'Cancel') ); ?> </div>