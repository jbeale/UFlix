
<!--File: /app/View/Movies/view.ctp -->


<?php echo $this->Html->css('custom'); ?>

<div id="movie-view-header">
	<ul>
		<li><?php echo $this->Html->link(
			'Add a Award',array('controller' => 'movies', 'action' => 'linkaward',
			$movie['Movie']['movie_id']) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Location',array('controller' => 'movies', 'action' => 'add',
			$movie['Movie']['movie_id'] ) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Genre',array('controller' => 'movies', 'action' => 'add',
			$movie['Movie']['movie_id']) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Credit',array('controller' => 'movies', 'action' => 'add',
			$movie['Movie']['movie_id'] ) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Studio',array('controller' => 'movies', 'action' => 'add',
			$movie['Movie']['movie_id'] ) );?> </li>
	</ul>
</div>



<div>
<h1>movie_id</h1>
<h2> <?php echo $movie['Movie']['movie_id'];?></h2>
</div>

<div>
<h1>title</h1>
<h2> <?php echo $movie['Movie']['title'];?></h2>
</div>ll

<div>
<h1>rating</h1>
<h2> <?php echo $movie['Movie']['rating'];?></h2>
</div>

<div>
<h1>stars</h1>
<h2> <?php echo $movie['Movie']['stars'];?></h2>
</div>

<div>
<h1>release</h1>
<h2> <?php echo $movie['Movie']['release'];?></h2>
</div>

<div>
<h1>posterFilename</h1>
<h2> <?php echo $movie['Movie']['posterFilename'];?></h2>
</div>

<div>
<h1>trailerurl</h1>
<h2> <?php echo $movie['Movie']['trailerurl'];?></h2>
</div>

<div>
<h1>tagline</h1>
<h2> <?php echo $movie['Movie']['tagline'];?></h2>
</div>

<div>
<h1>summary</h1>
<h2> <?php echo $movie['Movie']['summary'];?></h2>
</div>

<div>
<?php echo var_dump($allLocations);?>
</div>

<div>
<?php echo var_dump($allGenres);?>
</div>

<div>
<?php echo var_dump($allStudios);?>
</div>

<div>
<?php echo var_dump($allAwards);?>
</div>

<div>
<?php echo var_dump($allCredits);?>
</div>

<div>
<?php echo var_dump($awardsWon);?>
</div>








<div><?php echo $this->Html->link($this->Form->button('Back'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
