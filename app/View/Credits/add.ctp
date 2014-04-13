
<!--File: /app/View/Credits/add.ctp -->


<h1>Add Credit</h1>

<?php
	echo $this->Form->create('Credit');
	echo $this->Form->input('movie_id', array(
		'options' => array($allMovies)) );
	echo $this->Form->input('role_id', array(
		'options' => array($allRoles)) );
	echo $this->Form->input('cast_id', array(
		'options' => array($allCasts)) );
	echo $this->Form->input('character');

	echo $this->Form->end('Save Credit');
?>

<div><?php echo $this->Html->link($this->Form->button('Cancel'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
	
	<div>
	<?php var_dump($allMovies);?>
	</div>
	
	<div>
	<?php var_dump($allRoles);?>
	</div>
	
	<div>
	<?php var_dump($allCasts);?>
	</div>