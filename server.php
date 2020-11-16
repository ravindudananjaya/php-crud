<?php
	
	session_start();
	//initializing vars
	$name = "";
	$address = "";
	$id = 0;
	$edit_state = false;

	//connect to db
	$db = mysqli_connect('localhost','root','','crud');
	
	//if save button is clicked
	if (isset($_POST['save'])) {
		
		$name = $_POST['name'];
		$address = $_POST['address'];

		$query = "INSERT INTO info (name, address) VALUES ('$name' , '$address')";
		mysqli_query($db, $query);
		header('location: index.php');
		//header('location: table.php');
		$_SESSION['msg'] = "<div class='display-4'>Saved</div>";
	}


	//if (isset($_POST['update'])) {
	//	$name = mysql_real_escape_string($_POST['name']);
	//	$address = mysql_real_escape_string($_POST['address']);
	//	$id = mysql_real_escape_string($_POST['id']);


	//}


	//retrieve records
	$result = mysqli_query($db, "SELECT * FROM info");

?>