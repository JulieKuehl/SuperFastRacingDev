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