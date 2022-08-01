<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
	<div class = 'container col-lg-6 mt-5 mx-auto border border-info p-4 bg-light rounded text-danger'>
		<form action = "db.php" method="POST">
			<h3 class = "text-success text-italic text-center">Sign Up</h3>
			<div class = "text-right">
					<p class="text-center text-danger"> <?php if(isset($msg)) echo $msg;?></p>
			</div>
			<div class = "form group row mt-4">
				<div class = "col-lg-4">
					<label><h4>Name</h4></label>
				</div>
				<div class = "col-lg-8">
					<input type = "text" name = "name" class = "form-control"/>
				</div>
			</div>
			<div class = "form group row mt-4">
				<div class = "col-lg-4">
					<label><h4>Mobile</h4></label>
				</div>
				<div class = "col-lg-8">
					<input type = "text" name = "mobile" class = "form-control"/>
				</div>
			</div>
			<div class = "form group row mt-4">
				<div class = "col-lg-4">
					<label><h4>Email</h4></label>
				</div>
				<div class = "col-lg-8">
					<input type = "email" name = "email" class = "form-control"/>
				</div>
			</div>
			<div class = "form group row mt-4">
				<div class = "col-lg-4">
					<label><h4>Password</h4></label>
				</div>
				<div class = "col-lg-8">
					<input type = "password" name = "password" class = "form-control"/>
				</div>
			</div>
			<div class = "row mt-4">
				<div class = "col-lg-8">
					<button type = "submit" name = "signup" class = "btn btn-success col-lg-2">Signup</button>
					<button type = "reset" name = "reset" class = "btn btn-danger col-lg-2">Reset</button>
			    </div>
				<div class = "text-right col-lg-4">
					<a href = "login2.php" class = "btn btn-dark ">Have Account</a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>