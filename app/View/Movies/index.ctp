
<!--File: /app/View/Movies/index.ctp -->

<h1>Movies</h1>

<table>
	<tr>
		<th>MovieId</th>
		<th>Title</th>
		<th>Year</th>
		<th>Rating</th>
		<th>Star</th>
		<th>Release</th>
		<th>DVDRelease</th>
		<th>PostFilename</th>
		<th>TrailerURL</th>
		<th>Tagline</th>
		<th>Summary</th>
		<th>Studio</th>
	</tr>
	<?php foreach ($movies as $movie): ?>
		<tr> 
			<td> <?php echo $movie['Movie']['MovieId']?></td>
			<td> <?php echo $movie['Movie']['Title']?></td>
			<td> <?php echo $movie['Movie']['Year']?></td>
			<td> <?php echo $movie['Movie']['Rating']?></td>
			<td> <?php echo $movie['Movie']['Star']?></td>
			<td> <?php echo $movie['Movie']['Release']?></td>
			<td> <?php echo $movie['Movie']['DVDRelease']?></td>
			<td> <?php echo $movie['Movie']['PostFilename']?></td>
			<td> <?php echo $movie['Movie']['TrailerURL']?></td>
			<td> <?php echo $movie['Movie']['Tagline']?></td>
			<td> <?php echo $movie['Movie']['Summary']?></td>
			<td> <?php echo $movie['Movie']['Studio']?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset ($movie); ?>
</table>