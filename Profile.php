<?php
$uid = $_SESSION['id'];
$sql = "select * from userdetails where uid = '$uid'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);
?>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
	<div class = "container-fluid">
		<div class = "row">
			<div class = "mt-5 ml-4">
				<div class = "card border-info" style = "box-shadow: 10px 10px lightskyblue;">
					<div class = "card-header">
						<h3 class = "card-title text-center text-secondary">User Profile</h3>
						<p class = "text-danger"><?php if(isset($m)) echo $m;?></p>
					</div>
					<div class = "card-body">
						<h5 class = 'card-text text-success'>Name : <?php echo $row['uname'];?></h5>
						<h5 class = 'card-text text-info'>Email : <?php echo $row['mobile'];?></h5>
						<h5 class = 'card-text text-warning'>Phone : <?php echo $row['email'];?></h5>
					</div>
					<div class = "card-footer">
						<a href = "db.php?edit" class ="btn btn-info mb-3" name = "edit">Edit</a>
						<a href = "db.php?delete=<?php echo $row['email'];?>" class ="btn btn-danger mb-3" name = "delete" value = '$email'>Delete account</a>
						<a href = "db.php?logout" class ="btn btn-dark mb-3" name = "logout">Sign Out</a>
						<a href = "db.php?changepassword=<?php echo $row['email']?>" class ="btn btn-success mb-3" name = "changepassword">Change Password</a>
					</div>
				</div>
			</div>
	    </div>
    </div>
</body>
</html>
