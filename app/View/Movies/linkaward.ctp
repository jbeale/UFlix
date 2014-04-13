<!--File: /app/View/Movies/linkaward.ctp -->

<div>
<?php
	echo $this->Form->create('Award');
	echo $this->Form->input('award_id', array(
		'options' => array($allAwards)));
	echo $this->Form->input('movie_id', array('type' => 'hidden'));
	echo $this->Form->end('Link Award');
?>
</div>