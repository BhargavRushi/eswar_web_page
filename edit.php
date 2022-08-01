<?php
$uid=$_SESSION['id'];
$sql = "select * from userdetails where sno= '$uid'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);
?>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
	<div class = 'container col-lg-6 mt-5 mx-auto border border-info p-4 bg-light rounded text-danger'>
		<form action = "db.php?update" method="POST">
			<h3 class = "text-success text-italic text-center">Edit details</h3>
			<div class = "form group row mt-4">
				<div class = "col-lg-4">
					<label><h4>Name</h4></label>
				</div>
				<div class = "col-lg-8">
					<input type = "text" name = "name" value = "<?php echo $row['name'];?>" class = "form-control"/>
				</div>
			</div>
			<div class = "form group row mt-4">
				<div class = "col-lg-4">
					<label><h4>Mobile</h4></label>
				</div>
				<div class = "col-lg-8">
					<input type = "text" name = "mobile" value = "<?php echo $row['mobile'];?>" class = "form-control"/>
				</div>
			</div>
			<div class = "form group row mt-4">
				<div class = "col-lg-4">
					<label><h4>Email</h4></label>
				</div>
				<div class = "col-lg-8">
					<input type = "email" name = "email" value = "<?php echo $row['email'];?>" class = "form-control"/>
				</div>
			</div>
			<div class = "mt-4">
				<button type = "submit" name = "update" class = "btn btn-success col-lg-2">Update</button>
			</div>
		</form>
	</div>
</body>
</html>