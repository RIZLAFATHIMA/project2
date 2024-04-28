<?php
	$teacher_name = $_POST['teacher_name'];
	$review = $_POST['review'];
	$rating = $_POST['rating'];

	// Insert the review into the database
	// ...

	// Redirect to the review page
	header('Location: review.php');
	exit;
?>
