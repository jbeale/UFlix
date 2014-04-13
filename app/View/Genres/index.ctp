
<!--File: /app/View/Genres/index.ctp -->

<h1>Genres</h1>
<?php echo $this->element('database_header');?>

<table>
	<tr>
		<th>genre_id</th>
		<th>genreName</th>
	</tr>
	<?php if(!$genres): ?>
	<tr> <td> No genres in Database. </td></tr>
	<?php else: ?>
	<?php foreach ($genres as $genre): ?>
		<tr> 
			<td> <?php echo $genre['Genre']['genre_id']?></td>
			<td> <?php echo $this->Html->link( $genre['Genre']['genreName'],
			array('controller' => 'genres', 'action' => 'view', $genre['Genre']['genre_id']));?></td>
			
			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $genre['Genre']['genre_id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $genre['Genre']['genre_id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($genre); ?>
	
	<?php endif; ?>
</table>