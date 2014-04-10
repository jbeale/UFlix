
<!--File: /app/View/Locations/index.ctp -->

<h1>Locations</h1>

<div>
	<ul>
		<li><?php echo $this->Html->link(
			'Add Location',array('controller' => 'locations', 'action' => 'add') );?> </li>
	</ul>



</div>
<table>
	<tr>
		<th>location_id</th>
		<th>country</th>
	</tr>
	<?php if(!$locations): ?>
	<tr> <td> No Locations in Database. </td></tr>
	<?php else: ?>
	<?php foreach ($locations as $location): ?>
		<tr> 
			<td> <?php echo $location['Location']['location_id']?></td>
			<td> <?php echo $this->Html->link( $location['Location']['country'],
			array('controller' => 'locations', 'action' => 'view', $location['Location']['location_id']));?></td>
			
			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $location['Location']['location_id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $location['Location']['location_id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($location); ?>
	
	<?php endif; ?>
</table>