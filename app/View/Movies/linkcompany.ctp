<!--File: /app/View/Movies/linkcompany.ctp -->

<div>
<?php
	echo $this->Form->create('Company');
	echo $this->Form->input('company_id', array(
		'options' => array($allCompanies)));
	echo $this->Form->input('movie_id', array('type' => 'hidden'));
	echo $this->Form->end('Link Company');
?>
</div>