
<!--File: /app/View/Awards/view.ctp -->

<div>
<h1>award_id</h1>
<h2> <?php echo $award['Award']['award_id'];?></h2>
</div>

<div>
<h1>awardName</h1>
<h2> <?php echo $award['Award']['awardName'];?></h2>
</div>

<div>
<h1>category</h1>
<h2> <?php echo $award['Award']['category'];?></h2>
</div>

<div>
<h1>year</h1>
<h2> <?php echo $award['Award']['year'];?></h2>
</div>

<div>
<h1>winner_id</h1>
<h2> <?php echo $award['Award']['winner_id'];?></h2>
</div>

<div><?php echo $this->Html->link($this->Form->button('Back'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
