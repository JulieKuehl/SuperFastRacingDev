<?php require 'header.php' ?>

	<h1>Race Day Racers Entry</h1>

	<nav class="secondary-nav">
		<ul>
			<li><a href="teams.php">Teams</a></li>
			<li><a href="racers.php">Racers</a></li>
			<li><a href="heats.php">Heats</a></li>
		</ul>
	</nav>

	<!-- Create your HTML form here -->

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<label for="firstname">Racer First Name: </label>
			<input type="text" name="firstname" /><br>
		<br>
		<label for="lastname">Racer Last Name: </label>
			<input type="text" name="lastname" /><br>
		<br>
		<label for="team">Team Name: </label>
			<input type="text" name="team" /><br>
		<br>
		<label for="raceraddress">Address: </label>
			<input type="text" name="raceraddress" /><br>
		<label for="racercity">City: </label>
			<input type="text" name="racercity" /><br>
		<label for="racerstate">State: </label>
			<input type="text" name="racerstate" /><br>
		<label for="racerzip">Zip Code: </label>
			<input type="text" name="racerzip" />
		<br>
		<label for="racertenure">First time racer? </label><br>
			<input type="radio" id="rookie" name="racertenure" <?php if (isset($racertenure) && $racertenure=="Rookie") echo "checked";?> value="Rookie" label="Rookie" accesskey="R" />Rookie<br>
			<input type="radio" id="veteran" name="racertenure" <?php if (isset($racertenure) && $racertenure=="Veteran") echo "checked";?> value="Veteran" label="Veteran" accesskey="V" />Veteran<br>
		<br>
		<label for="racernotes">Notes: </label><br>
			<textarea name="racernotes" cols="40" rows="3" placeholder="Anything unusual?"></textarea><br>
		<br>

		<input type="submit" value="Send"/><input type="reset" value="Reset">

	</form>

	<br>
	<br>


	<!-- Add your PHP checks here -->

<?php

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$team = $_POST['team'];
	$raceraddress = $_POST['raceraddress'];
	$racercity = $_POST['racercity'];
	$racerstate = $_POST['racerstate'];
	$racerzip = $_POST['racerzip'];
	$racertenure = $_POST['racertenure'];
	$racernotes = $_POST['racernotes'];


	if (isset($firstname, $lastname, $team)) {
	//		mail($vehiclenumber, $heatnumber, $heattime) or die("Ooops! You need to fill out all the fields in the form (except notes).");
		echo "Entry saved";
	} else {
		echo "<h2>Ooops!</h2>You need to fill out the racer's name and team.";
	}
?>

</article>

<?php include 'sidebar.php' ?>

<?php include 'footer.php' ?>