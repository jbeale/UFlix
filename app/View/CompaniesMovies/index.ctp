
<!--File: /app/View/CompaniesMovies/index.ctp -->

<h1>Movie Locations</h1>
<div>
<?php echo $this->element('database_header');?>
</div>

<div>
	<?php echo $this->Html->link( 'Add', array('controller' => 'companiesmovies', 'action' => 'add')); ?>
</div>

<table>
	<tr>
		<th>id</th>
		<th>movie</th>
		<th>company</th>
	</tr>
	<?php if(!$companiesmovies): ?>
	<tr> <td> There are no movies with companies. </td></tr>
	<?php else: ?>
	<?php foreach ($companiesmovies as $companiesmovie): ?>
		<tr> 
			<td> <?php echo $companiesmovie['CompaniesMovie']['id']?></td>
			<td> <?php echo $allmovies[$companiesmovie['CompaniesMovie']['movie_id']]?></td>
			<td> <?php echo $allcompanies[$companiesmovie['CompaniesMovie']['company_id']]?></td>

			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $companiesmovie['CompaniesMovie']['id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $companiesmovie['CompaniesMovie']['id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($companiesmovie); ?>
	
	<?php endif; ?>
</table>