<!--File: /app/View/Movies/linklocation.ctp -->

<div>
<?php
	echo $this->Form->create('Location');
	echo $this->Form->input('location_id', array(
		'options' => array($allLocations)));
	echo $this->Form->input('movie_id', array('type' => 'hidden'));
	echo $this->Form->end('Link Location');
?>
</div>