<!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>Forms</title>
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

	<h1>Post Method</h1>
	<br>

	<form action="reports_post.php" method="post">
		<h3 name="keyboardName">Gaming Keyboard</h3><br>
		<img name="keyboardPic" src="gamingKeyboard.jpg" width="300"><br>
		<p class="confined-width" name="keyboardDescription">The GHP Mechanical Keyboard is a 60% keyboard that use Cherry MX Red key switches to allow for optimal response times. The RGB colors allow the user to custimize the keyboard to their own unique preferences. The array of keycap colors helps the user differentiate between letter/symbol keys and the accompanying functional keys. </p> <br>
			
		<p>Keyboard Design/Look: 
		<input type="radio" name="keyboardRadioDesign" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioDesign" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioDesign" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioDesign" value="N/A">N/A
		</p>
		<p>RGB Colors: 
		<input type="radio" name="keyboardRadioRGB" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioRGB" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioRGB" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioRGB" value="N/A">N/A
		</p>
		<p>Keyboard Key Switches:
		<input type="radio" name="keyboardRadioSwitches" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioSwitches" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioSwitches" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioSwitches" value="N/A">N/A
		</p>
		<p>Keyboard Response Time: 
		<input type="radio" name="keyboardRadioResponseTime" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioResponseTime" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioResponseTime" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioResponseTime" value="N/A">N/A		
		</p>
		<p>Keyboard Form Factor: 
		<input type="radio" name="keyboardRadioFormFactor" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioFormFactor" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioFormFactor" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioFormFactor" value="N/A">N/A
		</p>	
		<br>
		<h3 name="headsetName">Gaming Headset</h3><br>
		<img name="headsetPic" src="gamingHeadset.jpg" width="300"><br>
		<p class="confined-width" name="headsetDescription">The GHP Gaming Headset provides top-of-the-line sound to gamers from every type of game. It's sound quality will immerse you in the game and feel like you are truly the character which you are playing. The microphone provides clear quality so that your teammates will forget that you are in a different location, instead of right next to them. </p> <br>
			
		<p>Headset Design/Look: 
		<input type="radio" name="headsetRadioDesign" value="Poor" required>Poor
		<input type="radio" name="headsetRadioDesign" value="Neutral">Neutral
		<input type="radio" name="headsetRadioDesign" value="Excellent">Excellent
		<input type="radio" name="headsetRadioDesign" value="N/A">N/A
		</p>
		<p>Sound Quality: 
		<input type="radio" name="headsetRadioQuality" value="Poor" required>Poor
		<input type="radio" name="headsetRadioQuality" value="Neutral">Neutral
		<input type="radio" name="headsetRadioQuality" value="Excellent">Excellent
		<input type="radio" name="headsetRadioQuality" value="N/A">N/A
		</p>
		<p>Volume:
		<input type="radio" name="headsetRadioVolume" value="Poor" required>Poor
		<input type="radio" name="headsetRadioVolume" value="Neutral">Neutral
		<input type="radio" name="headsetRadioVolume" value="Excellent">Excellent
		<input type="radio" name="headsetRadioVolume" value="N/A">N/A
		</p>
		<p>Comfort: 
		<input type="radio" name="headsetRadioComfort" value="Poor" required>Poor
		<input type="radio" name="headsetRadioComfort" value="Neutral">Neutral
		<input type="radio" name="headsetRadioComfort" value="Excellent">Excellent
		<input type="radio" name="headsetRadioComfort" value="N/A">N/A
		</p>
		<p>Microphone Quality: 
		<input type="radio" name="headsetRadioMicrophone" value="Poor" required>Poor
		<input type="radio" name="headsetRadioMicrophone" value="Neutral">Neutral
		<input type="radio" name="headsetRadioMicrophone" value="Excellent">Excellent
		<input type="radio" name="headsetRadioMicrophone" value="N/A">N/A
		</p>	
		<br>
		<h3 name="mouseName">Gaming Mouse</h3><br>
		<img name="mousePic" src="gamingMouse.jpg" width="300"><br>
		<p class="confined-width" name="mouseDescription">The GHP Wireless Gaming Mouse does away with pesky wires and allows you to focus solely on the game. The mouse comes with a host of button that you can custimize to your liking. The RGB lighting ensures that you never lose your mouse, even when the lights go out. </p> <br>
			
		<p>Mouse Design/Look: 
		<input type="radio" name="mouseRadioDesign" value="Poor"required>Poor
		<input type="radio" name="mouseRadioDesign" value="Neutral">Neutral
		<input type="radio" name="mouseRadioDesign" value="Excellent">Excellent
		<input type="radio" name="mouseRadioDesign" value="N/A">N/A
		</p>
		<p>RGB Colors: 
		<input type="radio" name="mouseRadioRGB" value="Poor" required>Poor
		<input type="radio" name="mouseRadioRGB" value="Neutral">Neutral
		<input type="radio" name="mouseRadioRGB" value="Excellent">Excellent
		<input type="radio" name="mouseRadioRGB" value="N/A">N/A
		</p>
		<p>Mouse Buttons:
		<input type="radio" name="mouseRadioButtons" value="Poor" required>Poor
		<input type="radio" name="mouseRadioButtons" value="Neutral">Neutral
		<input type="radio" name="mouseRadioButtons" value="Excellent">Excellent
		<input type="radio" name="mouseRadioButtons" value="N/A">N/A
		</p>
		<p>Wireless Connectivity: 
		<input type="radio" name="mouseRadioConnectivity" value="Poor" required>Poor
		<input type="radio" name="mouseRadioConnectivity" value="Neutral">Neutral
		<input type="radio" name="mouseRadioConnectivity" value="Excellent">Excellent
		<input type="radio" name="mouseRadioConnectivity" value="N/A">N/A
		</p>
		<p>Response Time: 
		<input type="radio" name="mouseRadioResponseTime" value="Poor" required>Poor
		<input type="radio" name="mouseRadioResponseTime" value="Neutral">Neutral
		<input type="radio" name="mouseRadioResponseTime" value="Excellent">Excellent
		<input type="radio" name="mouseRadioResponseTime" value="N/A">N/A
		</p>	
		<br>
		<p>Name: <input type="text" name="name" size="20" required></p>
		<p>Comments: <textarea name="comment" rows="3" cols="30" required></textarea></p>
		<a href="reports.php">
			<input type="submit" name="postSubmit" value="Submit">
		</a>
	</form>
	<br>
	<hr>
	<br>
	<h1>Get Method</h1>
	<form action="reports_get.php" method="get">
		<h3 name="keyboardName">Gaming Keyboard</h3><br>
		<img name="keyboardPic" src="gamingKeyboard.jpg" width="300"><br>
		<p class="confined-width" name="keyboardDescription">The GHP Mechanical Keyboard is a 60% keyboard that use Cherry MX Red key switches to allow for optimal response times. The RGB colors allow the user to custimize the keyboard to their own unique preferences. The array of keycap colors helps the user differentiate between letter/symbol keys and the accompanying functional keys. </p> <br>
			
		<p>Keyboard Design/Look: 
		<input type="radio" name="keyboardRadioDesign" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioDesign" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioDesign" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioDesign" value="N/A">N/A
		</p>
		<p>RGB Colors: 
		<input type="radio" name="keyboardRadioRGB" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioRGB" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioRGB" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioRGB" value="N/A">N/A
		</p>
		<p>Keyboard Key Switches:
		<input type="radio" name="keyboardRadioSwitches" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioSwitches" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioSwitches" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioSwitches" value="N/A">N/A
		</p>
		<p>Keyboard Response Time: 
		<input type="radio" name="keyboardRadioResponseTime" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioResponseTime" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioResponseTime" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioResponseTime" value="N/A">N/A		
		</p>
		<p>Keyboard Form Factor: 
		<input type="radio" name="keyboardRadioFormFactor" value="Poor" required>Poor
		<input type="radio" name="keyboardRadioFormFactor" value="Neutral">Neutral
		<input type="radio" name="keyboardRadioFormFactor" value="Excellent">Excellent
		<input type="radio" name="keyboardRadioFormFactor" value="N/A">N/A
		</p>	
		<br>
		<h3 name="headsetName">Gaming Headset</h3><br>
		<img name="headsetPic" src="gamingHeadset.jpg" width="300"><br>
		<p class="confined-width" name="headsetDescription">The GHP Gaming Headset provides top-of-the-line sound to gamers from every type of game. It's sound quality will immerse you in the game and feel like you are truly the character which you are playing. The microphone provides clear quality so that your teammates will forget that you are in a different location, instead of right next to them. </p> <br>
			
		<p>Headset Design/Look: 
		<input type="radio" name="headsetRadioDesign" value="Poor" required>Poor
		<input type="radio" name="headsetRadioDesign" value="Neutral">Neutral
		<input type="radio" name="headsetRadioDesign" value="Excellent">Excellent
		<input type="radio" name="headsetRadioDesign" value="N/A">N/A
		</p>
		<p>Sound Quality: 
		<input type="radio" name="headsetRadioQuality" value="Poor" required>Poor
		<input type="radio" name="headsetRadioQuality" value="Neutral">Neutral
		<input type="radio" name="headsetRadioQuality" value="Excellent">Excellent
		<input type="radio" name="headsetRadioQuality" value="N/A">N/A
		</p>
		<p>Volume:
		<input type="radio" name="headsetRadioVolume" value="Poor" required>Poor
		<input type="radio" name="headsetRadioVolume" value="Neutral">Neutral
		<input type="radio" name="headsetRadioVolume" value="Excellent">Excellent
		<input type="radio" name="headsetRadioVolume" value="N/A">N/A
		</p>
		<p>Comfort: 
		<input type="radio" name="headsetRadioComfort" value="Poor" required>Poor
		<input type="radio" name="headsetRadioComfort" value="Neutral">Neutral
		<input type="radio" name="headsetRadioComfort" value="Excellent">Excellent
		<input type="radio" name="headsetRadioComfort" value="N/A">N/A
		</p>
		<p>Microphone Quality: 
		<input type="radio" name="headsetRadioMicrophone" value="Poor" required>Poor
		<input type="radio" name="headsetRadioMicrophone" value="Neutral">Neutral
		<input type="radio" name="headsetRadioMicrophone" value="Excellent">Excellent
		<input type="radio" name="headsetRadioMicrophone" value="N/A">N/A
		</p>	
		<br>
		<h3 name="mouseName">Gaming Mouse</h3><br>
		<img name="mousePic" src="gamingMouse.jpg" width="300"><br>
		<p class="confined-width" name="mouseDescription">The GHP Wireless Gaming Mouse does away with pesky wires and allows you to focus solely on the game. The mouse comes with a host of button that you can custimize to your liking. The RGB lighting ensures that you never lose your mouse, even when the lights go out. </p> <br>
			
		<p>Mouse Design/Look: 
		<input type="radio" name="mouseRadioDesign" value="Poor"required>Poor
		<input type="radio" name="mouseRadioDesign" value="Neutral">Neutral
		<input type="radio" name="mouseRadioDesign" value="Excellent">Excellent
		<input type="radio" name="mouseRadioDesign" value="N/A">N/A
		</p>
		<p>RGB Colors: 
		<input type="radio" name="mouseRadioRGB" value="Poor" required>Poor
		<input type="radio" name="mouseRadioRGB" value="Neutral">Neutral
		<input type="radio" name="mouseRadioRGB" value="Excellent">Excellent
		<input type="radio" name="mouseRadioRGB" value="N/A">N/A
		</p>
		<p>Mouse Buttons:
		<input type="radio" name="mouseRadioButtons" value="Poor" required>Poor
		<input type="radio" name="mouseRadioButtons" value="Neutral">Neutral
		<input type="radio" name="mouseRadioButtons" value="Excellent">Excellent
		<input type="radio" name="mouseRadioButtons" value="N/A">N/A
		</p>
		<p>Wireless Connectivity: 
		<input type="radio" name="mouseRadioConnectivity" value="Poor" required>Poor
		<input type="radio" name="mouseRadioConnectivity" value="Neutral">Neutral
		<input type="radio" name="mouseRadioConnectivity" value="Excellent">Excellent
		<input type="radio" name="mouseRadioConnectivity" value="N/A">N/A
		</p>
		<p>Response Time: 
		<input type="radio" name="mouseRadioResponseTime" value="Poor" required>Poor
		<input type="radio" name="mouseRadioResponseTime" value="Neutral">Neutral
		<input type="radio" name="mouseRadioResponseTime" value="Excellent">Excellent
		<input type="radio" name="mouseRadioResponseTime" value="N/A">N/A
		</p>	
		<br>
		<p>Name: <input type="text" name="name" size="20" required></p>
		<p>Comments: <textarea name="comment" rows="3" cols="30" required></textarea></p>
		<a href="reports.php">
			<input type="submit" name="postSubmit" value="Submit">
		</a>
	</form>
	<br>

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