
<!--File: /app/View/Genres/view.ctp -->

<div>
<h1>genre_id</h1>
<h2> <?php echo $genre['Genre']['genre_id'];?></h2>
</div>

<div>
<h1>genreName</h1>
<h2> <?php echo $genre['Genre']['genreName'];?></h2>
</div>


<div><?php echo $this->Html->link($this->Form->button('Back'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
