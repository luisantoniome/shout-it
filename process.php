<?php

	include 'database.php';

	// Check if form submitted
	if (isset($_POST['submit']))
	{
		$user = mysqli_real_escape_string($connection, $_POST['user']);
		$message = mysqli_real_escape_string($connection, $_POST['message']);

		// Set timezone
		date_default_timezone_set('America/Mexico_City');
		$time = date('h:i:s A', time());

		// Validate input
		if (!isset($user) || $user == '' || !isset($message) || $message == '')
		{
			$error = "Please fill in your name and a message.";
			header("Location: index.php?error=" . urlencode($error));
			exit();
		}
		else
		{
			$query = "INSERT INTO shouts (user, message, time)
					VALUES ('$user', '$message', '$time')";

			if (!mysqli_query($connection, $query))
			{
				die('Error: ' . mysqli_error($connection));
			}
			else
			{
				header("Location: index.php");
				exit();
			}
		}
	}