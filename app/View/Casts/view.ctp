
<!--File: /app/View/Casts/view.ctp -->

<div>
<h1>cast_id</h1>
<h2> <?php echo $cast['Cast']['cast_id'];?></h2>
</div>

<div>
<h1>castName</h1>
<h2> <?php echo $cast['Cast']['castName'];?></h2>
</div>

<div><?php echo $this->Html->link($this->Form->button('Back'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
