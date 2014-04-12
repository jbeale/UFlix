
<!--File: /app/View/Credits/view.ctp -->

<div>
<h1>credit_id</h1>
<h2> <?php echo $credit['Credit']['credit_id'];?></h2>
</div>

<div>
<h1>movie_id</h1>
<h2> <?php echo $credit['Credit']['movie_id'];?></h2>
</div>

<div>
<h1>role_id</h1>
<h2> <?php echo $credit['Credit']['role_id'];?></h2>
</div>

<div>
<h1>cast_id</h1>
<h2> <?php echo $credit['Credit']['cast_id'];?></h2>
</div>

<div>
<h1>character</h1>
<h2> <?php echo $credit['Credit']['character'];?></h2>
</div>


<div><?php echo $this->Html->link($this->Form->button('Back'),
	array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
