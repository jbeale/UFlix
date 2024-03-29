
<!--File: /app/View/Credits/index.ctp -->

<h1>Credits</h1>
<?php echo $this->element('database_header');?>


<div>
	<?php echo $this->Html->link( 'Add', array('controller' => 'credits', 'action' => 'add')); ?>
</div>

<div>
<table>
	<tr>
		<th>credit_id</th>
		<th>movie_id</th>
		<th>role_id</th>
		<th>cast_id</th>
		<th>character</th>
	</tr>
	<?php if(!$credits): ?>
	<tr> <td> No Credits in Database. </td></tr>
	<?php else: ?>
	<?php foreach ($credits as $credit): ?>
		<tr> 
			<td> <?php echo $this->Html->link( $credit['Credit']['credit_id'],
			array('controller' => 'credits', 'action' => 'view', $credit['Credit']['credit_id']));?></td>
			<td> <?php echo $allmovies[$credit['Credit']['movie_id']]?></td>
			<td> <?php echo $allroles[$credit['Credit']['role_id']]?></td>
			<td> <?php echo $allcasts[$credit['Credit']['cast_id']]?></td>
			<td> <?php echo $credit['Credit']['character']?></td>
			
			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $credit['Credit']['credit_id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $credit['Credit']['credit_id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($credit); ?>
	
	<?php endif; ?>
</table>
</div>