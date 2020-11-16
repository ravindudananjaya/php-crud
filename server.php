<?php
	
	session_start();
	//initializing vars
	$name = "";
	$address = "";
	$id = 0;
	$edit_state = false;
	$idd = "<";

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


	if (isset($_GET['edit'])) {
		
		$id = $_GET['edit'];



		$rec = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
		$record = mysqli_fetch_array($rec);
		$name = $record['name'];
		$address = $record['address'];
		$id = $record['id'];




	}

	if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$id = $_POST['id'];
		
		$query = "UPDATE info SET name = '$name', address = '$address' WHERE  id= '$id'";
		mysqli_query($db, $query);
		$id= 0;
		header('location: index.php');


		

	}

	if (isset($_POST['delete'])) {
		//$query = "DELETE FROM info WHERE id= 5";
		 $sql = "DELETE FROM info WHERE id=5";	
		header('location: index.php');
	}


	//retrieve records
	$result = mysqli_query($db, "SELECT * FROM info");

?>