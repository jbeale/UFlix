
<!--File: /app/View/Roles/index.ctp -->

<h1>Roles</h1>
<?php echo $this->element('database_header');?>

<div>
	<?php echo $this->Html->link( 'Add', array('controller' => 'roles', 'action' => 'add')); ?>
</div>

</div>
<table>
	<tr>
		<th>role_id</th>
		<th>roleName</th>

	</tr>
	<?php if(!$roles): ?>
	<tr> <td> No role in database. </td></tr>
	<?php else: ?>
	<?php foreach ($roles as $role): ?>
		<tr> 
			<td> <?php echo $role['Role']['role_id']?></td>
			<td> <?php echo $this->Html->link( $role['Role']['roleName'],
			array('controller' => 'roles', 'action' => 'view', $role['Role']['role_id']));?></td>

			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $role['Role']['role_id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $role['Role']['role_id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($role); ?>
	
	<?php endif; ?>
</table>