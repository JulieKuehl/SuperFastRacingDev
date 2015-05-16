<?php require 'header.php' ?>

	<h1>Race Day Racers Entry</h1>

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

		<label for="team">Team Name: </label>
		<input type="text" name="team" /><br>
		<br>
		<label for="firstname">Racer First Name: </label>
			<input type="text" name="firstname" /><br>
		<br>
		<label for="lastname">Racer Last Name: </label>
			<input type="text" name="lastname" /><br>
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
		<label for="racertenure">First time racer? </label><br>
			<input type="radio" id="rookie" name="racertenure" <?php if (isset($racertenure) && $racertenure=="Rookie") echo "checked";?> value="Rookie" label="Rookie" accesskey="R" />Rookie<br>
			<input type="radio" id="veteran" name="racertenure" <?php if (isset($racertenure) && $racertenure=="Veteran") echo "checked";?> value="Veteran" label="Veteran" accesskey="V" />Veteran<br>
		<br>
		<label for="notes">Notes: </label><br>
			<textarea name="message" cols="40" rows="3" placeholder="Anything unusual?"></textarea><br>
		<br>

		<input type="submit" value="Send"/><input type="reset" value="Reset">

	</form>

	<br>
	<br>


	<!-- Add your PHP checks here -->

		<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailaddress = $_POST['emailaddress'];
$websiteurl = $_POST['websiteurl'];
$jobtype = $_POST['jobtype'];
$budget = $_POST['budget'];
$features = $_POST['features'];
$message = $_POST['message'];
$recipient = "josh@getflywheel.com";
$subject = "Contact Form Submission from Julie Kuehl";
$mailheader = "From: $emailaddress \r\n";

if (isset($firstname, $lastname, $emailaddress, $message)) {
	mail($recipient, $subject, $message, $mailheader) or die("Oops! You need to fill in your name, email address, and message to send the form.");
	echo "<h2>Thank You!</h2>I'll be in touch shortly.";

} else {
	echo "<h2>ResultsOoops!</h2>You need to fill out all the fields in the form.";
}
?>

</article>

<?php include 'sidebar.php' ?>

<?php include 'footer.php' ?>