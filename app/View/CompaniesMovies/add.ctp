
<!--File: /app/View/CompaniesMovies/add.ctp -->


<h1>Add a Company</h1>

<?php
	echo $this->Form->create('CompaniesMovie');
	echo $this->Form->input('movie_id', array(
		'options' => array($allmovies) ));
	echo $this->Form->input('company_id', array(
		'options' => array($allcompanies)) );
	echo $this->Form->end('Save New Company');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
	
	