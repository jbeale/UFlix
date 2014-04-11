
<!--File: /app/View/Companies/view.ctp -->

<div>
<h1>Company_id</h1>
<h2> <?php echo $company['Company']['company_id'];?></h2>
</div>

<div>
<h1>title</h1>
<h2> <?php echo $company['Company']['companyName'];?></h2>
</div>

<div><?php echo $this->Html->link($this->Form->button('Back'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
