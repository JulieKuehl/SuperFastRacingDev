<?php require 'header.php' ?>

	<h1>Race Day Heats Entry</h1>

	<nav class="secondary-nav">
		<ul>
			<li><a href="raceday.php">Race Day</a></li>
			<li><a href="teams.php">Teams</a></li>
			<li><a href="racers.php">Racers</a></li>
			<li><a href="heats.php">Heats</a></li>
		</ul>
	</nav>

	<!-- Create your HTML form here -->

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<label for="vehiclenumber">Vehicle Number: </label>
			<input type="text" name="vehiclenumber" /><br>
		<br>
		<label for="heatnumber">Heat Number: </label>
			<input type="text" name="heatnumber" /><br>
		<br>
		<label for="heattime">Heat Time: </label>
			<input type="number" name="heattime" min="0" max="500" step="any" /><br>
		<br>
		<label for="heatnotes">Notes: </label><br>
			<textarea name="heatnotes" cols="40" rows="3" placeholder="Anything unusual?"></textarea><br>
		<br>

		<input type="submit" value="Send"/><input type="reset" value="Reset">

	</form>

	<br>
	<br>


	<!-- Add your PHP checks here -->

<?php

	$vehiclenumber = $_POST['vehiclenumber'];
	$heatnumber = $_POST['heatnumber'];
	$heattime = $_POST['heattime'];
	$heatnotes = $_POST['heatnotes'];
//	$submitted =

	if (isset($vehiclenumber, $heatnumber, $heattime)) {
//		mail($vehiclenumber, $heatnumber, $heattime) or die("Ooops! You need to fill out all the fields in the form (except notes).");
		echo "Entry saved";
	} else {
		echo "<h2>Ooops!</h2>You need to fill out all the fields in the form (except notes).";
	}
?>

</article>

<?php include 'sidebar.php' ?>

<?php include 'footer.php' ?>