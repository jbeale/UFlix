<!--File: /app/View/Movies/seed.ctp -->

<h1>Movie Seed Generator From FreemovieDB.org</h1>

<table>
	<tr>
	<td>properties</td>
	</tr>
	<?php foreach ($movieSeeds as $seed): ?>
		<tr> 
		<td><?php echo var_dump($seed);?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($seed); ?>
</table>
