
<?php echo $this->Html->css('custom'); ?>

<div id="databaseheader">
	<ul>
		<li><?php echo $this->Html->link(
			'Movie',array('controller' => 'movies', 'action' => 'index') );?> </li>
		<li><?php echo $this->Html->link(
			'Location',array('controller' => 'locations', 'action' => 'index') );?> </li>
		<li><?php echo $this->Html->link(
			'Award',array('controller' => 'awards', 'action' => 'index') );?> </li>
		<li><?php echo $this->Html->link(
			'Genre',array('controller' => 'genres', 'action' => 'index') );?> </li>
		<li><?php echo $this->Html->link(
			'Studio',array('controller' => 'companies', 'action' => 'index') );?> </li>
		<li><?php echo $this->Html->link(
			'Credit',array('controller' => 'credits', 'action' => 'index') );?> </li>
		<li><?php echo $this->Html->link(
			'Role',array('controller' => 'roles', 'action' => 'index') );?> </li>
		<li><?php echo $this->Html->link(
			'Cast Member',array('controller' => 'casts', 'action' => 'index') );?> </li>
	</ul>

