<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SHOUT IT!</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="container">
		<header>
			<h1>SHOUT IT! Shoutbox</h1>
		</header>
		<div id="shouts">
			<ul>
				<li class="shout"><span>10:20PM - </span>Tony: Hey what's up guys?</li>
				<li class="shout"><span>10:20PM - </span>Tony: Hey what's up guys?</li>
				<li class="shout"><span>10:20PM - </span>Tony: Hey what's up guys?</li>
				<li class="shout"><span>10:20PM - </span>Tony: Hey what's up guys?</li>
				<li class="shout"><span>10:20PM - </span>Tony: Hey what's up guys?</li>
				<li class="shout"><span>10:20PM - </span>Tony: Hey what's up guys?</li>
			</ul>
		</div>
		<div id="input">
			<form action="process.php" method="post">
				<input type="text" name="user" placeholder="Enter your name">
				<input type="text" name="message" placeholder="Enter a message">
				<br>
				<input class="shout-btn" type="submit" name="submit" value="Shout it out">
			</form>
		</div>
	</div>
</body>
</html>