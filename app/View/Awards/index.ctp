
<!--File: /app/View/Movies/index.ctp -->

<h1>Awards</h1>

<div>
	<ul>
		<li><?php echo $this->Html->link(
			'Add Award',array('controller' => 'awards', 'action' => 'add') );?> </li>
	</ul>



</div>
<table>
	<tr>
		<th>award_id</th>
		<th>awardName</th>
		<th>category</th>
		<th>year</th>
		<th>winner_id</th>
	</tr>
	<?php if(!$awards): ?>
	<tr> <td> No Awards in Database. </td></tr>
	<?php else: ?>
	<?php foreach ($awards as $award): ?>
		<tr> 
			<td> <?php echo $award['Award']['award_id']?></td>
			<td> <?php echo $this->Html->link( $award['Award']['awardName'],
			array('controller' => 'awards', 'action' => 'view', $award['Award']['award_id']));?></td>
			<td> <?php echo $award['Award']['category']?></td>
			<td> <?php echo $award['Award']['year']?></td>
			<td> <?php echo $award['Award']['winner_id']?></td>
			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $award['Award']['award_id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $award['Award']['award_id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($award); ?>
	
	<?php endif; ?>
</table>