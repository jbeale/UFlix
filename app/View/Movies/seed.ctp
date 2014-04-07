<!--File: /app/View/Movies/seed.ctp -->

<h1>Movie Seed Generator From FreemovieDB.org</h1>

<table>
	<tr>
		<th>Title</th>
		<th>Year</th>
		<th>Rating</th>
		<th>Release</th>
		<th>Budget</th>
		<th>Keywords</th>
		<th>TrailerURL</th>
		<th>PostFilename</th>
		<th>Tagline</th>
		<th>Summary</th>
		<th>Studio</th>
	</tr>
	<?php foreach ($TMDBseeds as $movie): ?>
		<tr> 
			<td> <?php echo $movie->getTitle(); ?></td>
			<td> <?php echo date("Y", $movie->getReleaseDate()->getTimeStamp()); ?></td>
			<td> <?php echo $movie->getVoteAverage(); ?></td>
			<td> <?php echo date("M d,Y", $movie->getReleaseDate()->getTimeStamp()); ?></td>
			<td> <?php echo $movie->getBudget(); ?></td>
			<td> <?php echo $movie->getKeywords(); ?></td>
			<td> <?php echo $movie->getTrailers(); ?></td>
			<td> <?php echo $movie->getPosterImage(); ?></td>
			<td> <?php echo $movie->getTagLine(); ?></td>
			
		</tr>
	<?php endforeach; ?>
	<?php unset ($movie); ?>
</table>
