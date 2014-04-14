
<!--File: /app/View/GenresMovies/index.ctp -->

<h1>Movie Genres</h1>
<div>
<?php echo $this->element('database_header');?>
</div>

<div>
	<?php echo $this->Html->link( 'Add', array('controller' => 'genresmovies', 'action' => 'add')); ?>
</div>

<table>
	<tr>
		<th>id</th>
		<th>movie</th>
		<th>genre</th>
	</tr>
	<?php if(!$genresmovies): ?>
	<tr> <td> There are no movies with genres. </td></tr>
	<?php else: ?>
	<?php foreach ($genresmovies as $genresmovie): ?>
		<tr> 
			<td> <?php echo $genresmovie['GenresMovie']['id']?></td>
			<td> <?php echo $allmovies[$genresmovie['GenresMovie']['movie_id']]?></td>
			<td> <?php echo $allgenres[$genresmovie['GenresMovie']['genre_id']]?></td>

			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $genresmovie['GenresMovie']['id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $genresmovie['GenresMovie']['id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($genresmovie); ?>
	
	<?php endif; ?>
</table>