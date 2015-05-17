<?php require 'header.php' ?>

	<h1>Race Day Teams Entry</h1>

	<nav class="secondary-nav">
		<ul>
			<li><a href="teams.php">Teams</a></li>
			<li><a href="racers.php">Racers</a></li>
			<li><a href="heats.php">Heats</a></li>
		</ul>
	</nav>

	<!-- Create your HTML form here -->

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<label for="team">Team Name: </label>
		<input type="text" name="team" /><br>
		<br>
		<label for="vehiclenumber">Vehicle Number: </label>
		<input type="text" name="vehiclenumber" /><br>
		<br>
		<label for="raceclass">Race Class: </label>
			<select name="raceclass" />
				<option value="stock">Stock</option>
				<option value="modified">Modified</option>
				<option value="custom">Custom</option>
				<option value="motorcycle">Motorcycle</option>
			</select><br>
		<br>
		<label for="teamtenure">First time team? </label><br>
			<input type="radio" id="rookieteam" name="teamtenure" <?php if (isset($teamtenure) && $teamtenure=="Rookie") echo "checked";?> value="Rookie" label="Rookie" accesskey="R" />Rookie<br>
			<input type="radio" id="veteranteam" name="teamtenure" <?php if (isset($teamtenure) && $teamtenure=="Veteran") echo "checked";?> value="Veteran" label="Veteran" accesskey="V" />Veteran<br>
		<br>
		<label for="teamnotes">Notes: </label><br>
			<textarea name="teamnotes" cols="40" rows="3" placeholder="Anything unusual?"></textarea><br>
		<br>

		<input type="submit" value="Send"/><input type="reset" value="Reset">

	</form>

	<br>
	<br>


	<!-- Add your PHP checks here -->

<?php

	$team = $_POST['team'];
	$vehiclenumber = $_POST['vehiclenumber'];
	$raceclass = $_POST['raceclass'];
	$teamtenure = $_POST['teamtenure'];
	$teamnotes = $_POST['teamnotes'];

	if (isset($team, $vehiclenumber, $raceclass)) {
		//		mail($vehiclenumber, $heatnumber, $heattime) or die("Ooops! You need to fill out all the fields in the form (except notes).");
		echo "Entry saved";
	} else {
		echo "<h2>Ooops!</h2>You need to fill out the team's name, vehicle number, and race class.";
	}
?>

</article>

<?php include 'sidebar.php' ?>

<?php include 'footer.php' ?>