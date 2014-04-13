
<!--File: /app/View/Movies/index.ctp -->

<h1>Movies</h1>
<div>
<?php echo $this->element('database_header');?>
</div>

<div>
	<?php echo $this->Html->link( 'Add', array('controller' => 'movies', 'action' => 'add')); ?>
</div>

<table>
	<tr>
		<th>movie_id</th>
		<th>title</th>
		<th>rating</th>
		<th>stars</th>
		<th>release</th>
		<th>posterFilename</th>
		<th>trailerurl</th>
		<th>tagline</th>
		<th>summary</th>
	</tr>
	<?php if(!$movies): ?>
	<tr> <td> No Movies in Database. </td></tr>
	<?php else: ?>
	<?php foreach ($movies as $movie): ?>
		<tr> 
			<td> <?php echo $movie['Movie']['movie_id']?></td>
			<td> <?php echo $this->Html->link( $movie['Movie']['title'],
			array('controller' => 'movies', 'action' => 'view', $movie['Movie']['movie_id']));?></td>
			<td> <?php echo $movie['Movie']['rating']?></td>
			<td> <?php echo $movie['Movie']['stars']?></td>
			<td> <?php echo $movie['Movie']['release']?></td>
			<td> <?php echo $movie['Movie']['posterFilename']?></td>
			<td> <?php echo $movie['Movie']['trailerurl']?></td>
			<td> <?php echo $movie['Movie']['tagline']?></td>
			<td> <?php echo $movie['Movie']['summary']?></td>
			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $movie['Movie']['movie_id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $movie['Movie']['movie_id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($movie); ?>
	
	<?php endif; ?>
</table>