<!--File: /app/View/Movies/seed.ctp -->

<h1>Movies</h1>

<table>
	<?php foreach ($TMDBseeds as $movie) : ?>
		<tr> 
			<td> <?php echo $movie?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($movie); ?>
</table>
