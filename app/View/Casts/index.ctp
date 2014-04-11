
<!--File: /app/View/Casts/index.ctp -->

<h1>Casts</h1>

<div>
	<ul>
		<li><?php echo $this->Html->link(
			'Add Cast',array('controller' => 'casts', 'action' => 'add') );?> </li>
	</ul>



</div>
<table>
	<tr>
		<th>cast_id</th>
		<th>castName</th>
	</tr>
	<?php if(!$casts): ?>
	<tr> <td> No Cast in Database. </td></tr>
	<?php else: ?>
	<?php foreach ($casts as $cast): ?>
		<tr> 
			<td> <?php echo $cast['Cast']['cast_id']?></td>
			<td> <?php echo $this->Html->link( $cast['Cast']['castName'],
			array('controller' => 'casts', 'action' => 'view', $cast['Cast']['cast_id']));?></td>
			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $cast['Cast']['cast_id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $cast['Cast']['cast_id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($cast); ?>
	
	<?php endif; ?>
</table>