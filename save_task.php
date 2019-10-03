<?php
include("db.php");

if (isset($_POST['save_task'])) {
	$title = $_POST['title'];
	$description = $_POST['description'];

	$query = "INSERT INTO task(title, description) VALUES('$title','$description')";
	$result = mysqli_query($conn,$query);
	if (!result) {
		die("query cagada");
	}
	// almacenar valores en sesión para pintar una notificación
	$_SESSION['message'] = 'task save succesfully';
	$_SESSION['type_message'] = 'success';

	header('location:index.php');
	
}