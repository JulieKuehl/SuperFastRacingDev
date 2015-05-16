<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forms Exercise</title>
</head>
<body>

	<h1>Contact Form Exercise</h1>

	<!-- Create your HTML form here -->

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<label for="firstname">First Name: </label>
			<input type="text" name="firstname" /><br>
		<br>
		<label for="lastname">Last Name: </label>
			<input type="text" name="lastname" /><br>
		<br>
		<label for="emailaddress">Email address: </label>
			<input type="email" name="emailaddress" /><br>
		<br>
		<label for="website-url">Website URL: </label>
			<input type="url" name="websiteurl" /><br>
		<br>
		<label for="jobtype">Type of job: </label><br>
			<input type="radio" id="newbuild" name="jobtype" <?php if (isset($jobtype) && $jobtype=="New Build") echo "checked";?> value="New Build" label="New build" accesskey="N" />New build<br>
			<input type="radio" id="redesign" name="jobtype" <?php if (isset($jobtype) && $jobtype=="Redesign") echo "checked";?> value="Redesign" label="Redesign" accesskey="R" />Redesign<br>
		<br>
		<label for="budget">Budget selector: </label>
			<select name="budget" />
				<option value="$0-1,000">$0-1,000</option>
				<option value="$1,001-5,000">$1,001-5,000</option>
				<option value="$5,001-10,000" selected="selected">$5,001-10,000</option>
			</select><br>
		<br>
		<label for="features">Will You Need: </label><br>
			<label for="contactform">Contact Form: </label><input type="checkbox" value="contactform" name="features"><br>
			<label for="photogallery">Photo Gallery: </label><input type="checkbox" value="photogallery" name="features"><br>
		<br>
		<label for="message">Message: </label><br>
			<textarea name="message" cols="40" rows="10" placeholder="Say please..."></textarea><br>
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

</body>
</html>