<?php include('server.php'); 

?>
<!DOCTYPE html>
<html>
<head>


	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div class="container" style="border-radius: 20px; margin-top: 20px;">
	<?php if (isset($_SESSION['msg'])) { ?>

		<div class="alert alert-success" id="Message">
			<?php
				echo $_SESSION['msg']; 
				unset($_SESSION['msg']);
			?>
		</div>

	<?php } ?>
</div>



<div class="container">
	

	<table class="table ">
		<thead class="thead-dark">
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col" >Address</th>
				<th scope="col" style="text-align: center">Action</th>
			</tr>
		</thead>
		<tbody >
			<?php while ($row = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td style="text-align: center">
					<a class="btn btn-primary" href="table.php?edt=<?php echo $row['id']; ?>" >Edit</a>
				
				
					<a class="btn btn-danger" href="#" name="delete" >Delete</a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>   
	   
</div>

<div class="container">
	<button class="btn btn-dark"><a href="index.php">back</a></button>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>