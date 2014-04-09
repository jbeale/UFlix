
<!--File: /app/View/Movies/view.ctp -->

<div>
<h1>movie_id</h1>
<h2> <?php echo $movie['Movie']['movie_id'];?></h2>
</div>

<div>
<h1>title</h1>
<h2> <?php echo $movie['Movie']['title'];?></h2>
</div>

<div>
<h1>rating</h1>
<h2> <?php echo $movie['Movie']['rating'];?></h2>
</div>

<div>
<h1>stars</h1>
<h2> <?php echo $movie['Movie']['stars'];?></h2>
</div>

<div>
<h1>release</h1>
<h2> <?php echo $movie['Movie']['release'];?></h2>
</div>

<div>
<h1>posterFilename</h1>
<h2> <?php echo $movie['Movie']['posterFilename'];?></h2>
</div>

<div>
<h1>trailerurl</h1>
<h2> <?php echo $movie['Movie']['trailerurl'];?></h2>
</div>

<div>
<h1>tagline</h1>
<h2> <?php echo $movie['Movie']['tagline'];?></h2>
</div>

<div>
<h1>summary</h1>
<h2> <?php echo $movie['Movie']['summary'];?></h2>
</div>

<div><?php echo $this->Html->link($this->Form->button('Back'), array('action' => 'index'), array('escape' => false, 'title' => 'Cancel') ); ?> </div>
