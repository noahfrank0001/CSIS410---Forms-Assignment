<!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>Reports</title>
</head>
<body>
	<!-- This nav bar is for navigating between the home, about us, php configuration, and contact pages -->
	<nav class="nav-bar">
		<a href="index.html" class="nav-item">Home</a>
		<a href="aboutus.php" class="nav-item">About Us</a>
		<a href="configuration.php" class="nav-item">PHP Configuration</a>
		<a href="contactus.php" class="nav-item">Contact</a>
	</nav>
	<!-- This link bar is for navigating between the 8 assignments submitted throughout the course -->
	<div class="link-bar">
		<a href="foundations.php" class="nav-item">Module 1: Week 1 Foundations</a>
		<a href="variables.php" class="nav-item">Module 1: Week 1 Variables</a>
		<a href="forms.php" class="nav-item">Module 2: Week 2 Forms</a>
		<a href="arrays.php" class="nav-item">Module 3: Week 3 Arrays</a>
		<a href="sessions.php" class="nav-item">Module 4: Week 4 Sessions</a>
		<a href="cms_sessions.php" class="nav-item">Module 5: Week 5 CMS Sessions</a>
		<a href="database.php" class="nav-item">Module 6: Week 6 Database</a>
		<a href="cms_database.php" class="nav-item">Module 8: Week 8 CMS Database</a>
	</div>
	<h1>
		<b>	<?php echo "Greetings!" ?> </b>	
	</h1>
	<!-- Customer greeting and comments: -->
	<?php
	$name = $_GET['name'];
	$userComment = $_GET['comment'];

	echo "<h3>Thank you for your feedback, $name!</h3><br>";
	echo "You commented: <q>$userComment</q><br><br>";
	echo "<h3>Your Rankings</h3>";
	?>
	<!-- Keyboard Ratings: -->
	<?php 
	$keyboardDesignRating = $_GET['keyboardRadioDesign'];
	$keyboardRGBRating = $_GET['keyboardRadioRGB'];
	$keyboardSwitchesRating = $_GET['keyboardRadioSwitches'];
	$keyboardResponseRating = $_GET['keyboardRadioResponseTime'];
	$keyboardFormRating = $_GET['keyboardRadioFormFactor'];
	
	
	echo "<h4>Gaming Keyboard</h4><br>";
	echo "<table>
		<tr><th>Attribute</th><th>Rating</th></tr>
		<tr><td>Keyboard Design/Look</td><td>$keyboardDesignRating</td></tr>
		<tr><td>RGB Colors</td><td>$keyboardRGBRating</td></tr>
		<tr><td>Keyboard Key Switches</td><td>$keyboardSwitchesRating</td></tr>
		<tr><td>Keyboard Response Time</td><td>$keyboardResponseRating</td></tr>
		<tr><td>Keyboard Form Factor</td><td>$keyboardFormRating</td></tr>
		</table>";
	?>
	<!-- Headset Ratings:  -->
	<?php 
	$headsetDesignRating = $_GET['headsetRadioDesign'];
	$headsetQualityRating = $_GET['headsetRadioQuality'];
	$headsetVolumeRating = $_GET['headsetRadioVolume'];
	$headsetComfortRating = $_GET['headsetRadioComfort'];
	$headsetMicrophoneRating = $_GET['headsetRadioMicrophone'];
	
	echo "<h4>Gaming Keyboard</h4><br>";
	echo "<table>
		<tr><th>Attribute</th><th>Rating</th></tr>
		<tr><td>Headset Design/Look</td><td>$headsetDesignRating</td></tr>
		<tr><td>Sound Quality</td><td>$headsetQualityRating</td></tr>
		<tr><td>Volume</td><td>$headsetVolumeRating</td></tr>
		<tr><td>Comfort</td><td>$headsetComfortRating</td></tr>
		<tr><td>Microphone Quality</td><td>$headsetMicrophoneRating</td></tr>
		</table>";
	?>
	<!-- Mouse Ratings:  -->
	<?php 
	$mouseDesignRating = $_GET['mouseRadioDesign'];
	$mouseRGBRating = $_GET['mouseRadioRGB'];
	$mouseButtonRating = $_GET['mouseRadioButtons'];
	$mouseConnectivityRating = $_GET['mouseRadioConnectivity'];
	$mouseResponseRating = $_GET['mouseRadioResponseTime'];
	
	echo "<h4>Gaming Mouse</h4><br>";
	echo "<table>
		<tr><th>Attribute</th><th>Rating</th></tr>
		<tr><td>Mouse Design/Look</td><td>$mouseDesignRating</td></tr>
		<tr><td>RGB Colors</td><td>$mouseRGBRating</td></tr>
		<tr><td>Mouse Buttons</td><td>$mouseButtonRating</td></tr>
		<tr><td>Wireless Connectivity</td><td>$mouseConnectivityRating</td></tr>
		<tr><td>Response Time</td><td>$mouseResponseRating</td></tr>
		</table>";
	?>
	<br>
	<br>
	<h3>We will take your input into consideration and make changes to our products accordingly. Thank you!</h3>
	

	<br>
	<footer id="footer">
		<!-- This shows when the page was last modified -->
		<?php echo "Page last changed: ".date("F d Y H:i:s.", filemtime("changelog.txt")); ?>
		<!-- This displays the validation icons for the webpage -->
		<div>
			<img src="https://www.w3.org/Icons/valid-html401-blue">
			<img src="https://www.w3.org/Icons/valid-css-blue">
		</div>
	</footer>
</body>
</html>