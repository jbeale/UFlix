
<!--File: /app/View/Locations/view.ctp -->

<div>
<h1>location_id</h1>
<h2> <?php echo $location['Location']['location_id'];?></h2>
</div>

<div>
<h1>country</h1>
<h2> <?php echo $location['Location']['country'];?></h2>
</div>


<div><?php echo $this->Html->link($this->Form->button('Back'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
