
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
			'Add a Genre',array('controller' => 'genresmovies', 'action' => 'add',
			$movie['Movie']['movie_id']) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Credit',array('controller' => 'credits', 'action' => 'add',
			$movie['Movie']['movie_id'] ) );?> </li>
		<li><?php echo $this->Html->link(
			'Add a Company',array('controller' => 'companiesmovies', 'action' => 'add',
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
</div>

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


<div>
	<table>
		<tr>
		<th>filming Genres</th>
		</tr>
		<?php if (!$allGenres):?>
			<tr> <td> No Genres. </td></tr>
		<?php else: ?>

		<?php foreach ($allGenres as $genre):?>
			<tr>
				<td> <?php echo $genre['Genre']['genreName'];?></td>
			</tr>
		<?php endforeach; ?>
		<?php unset ($genre)?>
		<?php endif; ?>
	</table>
</div>

<div>
	<table>
		<tr>
		<th>Role</th>
		<th>Cast Member</th>
		</tr>
		<?php if (!$allCredits):?>
			<tr> <td> No Credits. </td></tr>
		<?php else: ?>

		<?php foreach ($allCredits as $credit):?>
			<tr>
				<td> <?php echo $credit['CreditsBelongtoRole']['roleName'];?></td>
				<td> <?php echo $credit['CreditsBelongtoCast']['castName'];?></td>
			</tr>
		<?php endforeach; ?>
		<?php unset ($credit)?>
		<?php endif; ?>
	</table>
</div>


<div>
	<table>
		<tr>
		<th>Companies</th>
		</tr>
		<?php if (!$allCompanies):?>
			<tr> <td> No Companies. </td></tr>
		<?php else: ?>

		<?php foreach ($allCompanies as $company):?>
			<tr>
				<td> <?php echo $company['Company']['companyName'];?></td>
				<td> <?php echo $company['Company']['companyName'];?></td>
			</tr>
		<?php endforeach; ?>
		<?php unset ($company)?>
		<?php endif; ?>
	</table>
</div>


<div><?php echo $this->Html->link($this->Form->button('Back'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
