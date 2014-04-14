
<!--File: /app/View/Movies/view.ctp -->


<?php echo $this->Html->css('custom'); ?>

<div id="movie-view-header">
	<ul>
		<li><?php echo $this->Html->link(
			'Add a Award',array('controller' => 'awardsmovies', 'action' => 'add',
			$movie['Movie']['movie_id']) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Location',array('controller' => 'locationsmovies', 'action' => 'add',
			$movie['Movie']['movie_id'] ) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Genre',array('controller' => 'movies', 'action' => 'add',
			$movie['Movie']['movie_id']) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Credit',array('controller' => 'movies', 'action' => 'add',
			$movie['Movie']['movie_id'] ) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Company',array('controller' => 'movies', 'action' => 'add',
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
	<table>
		<tr>
		<th>award nominations</th>
		<th> year</th>
		</tr>
		<?php if (!$allAwards):?>
			<tr> <td> No Awards </td></tr>
		<?php else: ?>

		<?php foreach ($allAwards as $award):?>
			<tr>
				<td> <?php echo $award['Award']['awardName'];?></td>
				<td> <?php echo $award['Award']['year'];?></td>
			</tr>
		<?php endforeach; ?>
		<?php unset ($award)?>
		<?php endif; ?>
	</table>
</div>


<div>
	<table>
		<tr>
		<th>award won</th>
		<th> year</th>
		</tr>
		<?php if (!$awardsWon):?>
			<tr> <td> No Awards </td></tr>
		<?php else: ?>

		<?php foreach ($awardsWon as $awardwon):?>
			<tr>
				<td> <?php echo $awardwon['AwardsWon']['awardName'];?></td>
				<td> <?php echo $awardwon['AwardsWon']['year'];;?></td>
			</tr>
		<?php endforeach; ?>
		<?php unset ($award)?>
		<?php endif; ?>
	</table>
</div>


<div>
	<table>
		<tr>
		<th>filming locations</th>
		</tr>
		<?php if (!$allLocations):?>
			<tr> <td> No filming locations </td></tr>
		<?php else: ?>

		<?php foreach ($allLocations as $alllocation):?>
			<tr>
				<td> <?php echo $alllocation['Location']['country'];?></td>
			</tr>
		<?php endforeach; ?>
		<?php unset ($alllocation)?>
		<?php endif; ?>
	</table>
</div>


<?php var_dump($allLocations);?>




<div><?php echo $this->Html->link($this->Form->button('Back'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
