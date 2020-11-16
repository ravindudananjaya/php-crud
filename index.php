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
<body style="background-color:	#696969;">




<div class="container" >
	<div class="jumbotron" id="form">
		<form method="post" action="server.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control"name="name" placeholder="<?php echo $name; ?>" value="<?php echo $name; ?>" >
		  </div>
		  <div class="form-group">
		    <label>Address</label>
		    <input type="text" class="form-control"name="address" placeholder="<?php echo $address; ?>"
		    value="<?php echo $address; ?>"; >
		  </div>
		  <div class="input-group">

		 <?php if ($edit_state == true): ?>
			<button type="submit" name="update" class="btn btn-dark">Update</button>
			
		 <?php endif ?>

		 <?php if ($edit_state == false): ?>
			<button type="submit" name="save" class="btn btn-dark" >Submit</button>
		 <?php endif ?>

		
		  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="margin-left: 5px;">
		    Data Table 
		  </button>
		 

	
		

		  </div>
		</form>
	</div>
</div>



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

<div class="collapse" id="collapseExample">
  <div class="card card-body">
  	<div class="container">
	

	<table class="table ">
		<thead class="thead-dark">
			<tr>
				
				<th scope="col">Name</th>
				<th scope="col" >Address</th>
				<th scope="col" style="text-align: center">Action</th>
			</tr>
		</thead>
		<tbody >
			<?php while ($row = mysqli_fetch_array($result)) { ?>
			<tr>
				
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td style="text-align: center">
					<?php $id =  $row['id']; ?>

				 <form method="post" action="server.php">
					<a class="btn btn-primary" href="index.php?edit=<?php echo $row['id']; ?>" >Edit</a>
					<a class="btn btn-danger" href="index.php?del=<?php echo $row['id']; ?>" name="delete " >Delete</a>
				</form>
					
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
				
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>   
	   
</div>
  </div>
</div>
</div>

  	

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!--<div class="container">
	

	<table class="table ">
		<thead class="thead-dark">
			<tr>
				
				<th scope="col">Name</th>
				<th scope="col" >Address</th>
				<th scope="col" style="text-align: center">Action</th>
			</tr>
		</thead>
		<tbody >
			<?php while ($row = mysqli_fetch_array($result)) { ?>
			<tr>
				
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td style="text-align: center">
					<?php $id =  $row['id']; ?>

				<form method="post" action="server.php">
					<a class="btn btn-primary" href="index.php?edit=<?php echo $row['id']; ?>" >Edit</a>
				
					<a class="btn btn-danger" href="index.php?del=<?php echo $row['id']; ?>" name="delete " >Delete</a>
				</form>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>   
	   
</div>-->






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>