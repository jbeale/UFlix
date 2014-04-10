
<!--File: /app/View/Roles/view.ctp -->

<div>
<h1>role_id</h1>
<h2> <?php echo $role['Role']['role_id'];?></h2>
</div>

<div>
<h1>roleName</h1>
<h2> <?php echo $role['Role']['roleName'];?></h2>
</div>


<div><?php echo $this->Html->link($this->Form->button('Back'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
