
<!--File: /app/View/LocationsMovies/index.ctp -->

<h1>Movie Locations</h1>
<div>
<?php echo $this->element('database_header');?>
</div>

<div>
	<?php echo $this->Html->link( 'Add', array('controller' => 'locationsmovies', 'action' => 'add')); ?>
</div>

<table>
	<tr>
		<th>id</th>
		<th>movie</th>
		<th>location</th>
	</tr>
	<?php if(!$locationsmovies): ?>
	<tr> <td> There are no movies with locations. </td></tr>
	<?php else: ?>
	<?php foreach ($locationsmovies as $locationsmovie): ?>
		<tr> 
			<td> <?php echo $locationsmovie['LocationsMovie']['id']?></td>
			<td> <?php echo $allmovies[$locationsmovie['LocationsMovie']['movie_id']]?></td>
			<td> <?php echo $alllocations[$locationsmovie['LocationsMovie']['location_id']]?></td>

			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $locationsmovie['LocationsMovie']['id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $locationsmovie['LocationsMovie']['id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($locationsmovie); ?>
	
	<?php endif; ?>
</table>