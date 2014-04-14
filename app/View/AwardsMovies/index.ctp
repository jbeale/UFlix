
<!--File: /app/View/AwardsMovies/index.ctp -->

<h1>Movie Nominations</h1>
<div>
<?php echo $this->element('database_header');?>
</div>

<div>
	<?php echo $this->Html->link( 'Add', array('controller' => 'awardsmovies', 'action' => 'add')); ?>
</div>

<table>
	<tr>
		<th>id</th>
		<th>movie_id</th>
		<th>award_id</th>
	</tr>
	<?php if(!$awardsmovies): ?>
	<tr> <td> There are no movies with awards. </td></tr>
	<?php else: ?>
	<?php foreach ($awardsmovies as $awardsmovie): ?>
		<tr> 
			<td> <?php echo $awardsmovie['AwardsMovie']['id']?></td>
			<td> <?php echo $allmovies[$awardsmovie['AwardsMovie']['movie_id']]?></td>
			<td> <?php echo $allawards[$awardsmovie['AwardsMovie']['award_id']]?></td>

			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $awardsmovie['AwardsMovie']['id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $awardsmovie['AwardsMovie']['id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($awardsmovie); ?>
	
	<?php endif; ?>
</table>