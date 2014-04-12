
<!--File: /app/View/Companies/index.ctp -->

<h1>Companies</h1>

<div>
	<ul>
		<li><?php echo $this->Html->link(
			'Add Company',array('controller' => 'companies', 'action' => 'add') );?> </li>
	</ul>



</div>
<table>
	<tr>
		<th>company_id</th>
		<th>companyName</th>
	</tr>
	<?php if(!$companies): ?>
	<tr> <td> No Companies in Database. </td></tr>
	<?php else: ?>
	<?php foreach ($companies as $company): ?>
		<tr> 
			<td> <?php echo $company['Company']['company_id']?></td>
			<td> <?php echo $this->Html->link( $company['Company']['companyName'],
			array('controller' => 'companies', 'action' => 'view', $company['Company']['company_id']));?></td>
			
			<td><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $company['Company']['company_id']));?></td>
			<td><?php echo $this->Form->postLink( 'Delete', array('action' => 'delete', $company['Company']['company_id']), 
													array('confirm' => 'Are you sure?') );?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($company); ?>
	
	<?php endif; ?>
</table>