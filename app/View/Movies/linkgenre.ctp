<!--File: /app/View/Movies/linkgenre.ctp -->

<div>
<?php
	echo $this->Form->create('Genre');
	echo $this->Form->input('genre_id', array(
		'options' => array($allGenres)));
	echo $this->Form->input('movie_id', array('type' => 'hidden'));
	echo $this->Form->end('Link Genre');
?>
</div>