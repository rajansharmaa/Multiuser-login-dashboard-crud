<?php 
    session_start();  
    include ('includes/config.php');
?>
<?php

	// Connect to database
	$conn=mysqli_connect("localhost","user","password","flippappx");

	// Check if id is set or not if true toggle,
	// else simply go back to the page
	if (isset($_GET['id'])){

		// Store the value from get to a
		// local variable "course_id"
		$user_id=$_GET['id'];

		// SQL query that sets the status
		// to 1 to indicate activation.
		$sql="UPDATE `users` SET
			`status`=0 WHERE id='$user_id'";

		// Execute the query
		mysqli_query($conn,$sql);
	}

	// Go back to course-page.php
	header('location: admindashboard.php');
?>
