<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type = "text/css">
			@media(min-width:768px) {
			    body {
			        margin-top: 50px;
			    }
			    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
			}

			#wrapper {
			    padding-left: 0;    
			}

			#page-wrapper {
			    width: 100%;        
			    padding: 0;
			    background-color: #fff;
			}

			@media(min-width:768px) {
			    #wrapper {
			        padding-left: 225px;
			    }

			    #page-wrapper {
			        padding: 22px 10px;
			    }
			}

			/* Top Navigation */

			.top-nav {
			    padding: 0 15px;
			}

			.top-nav>li {
			    display: inline-block;
			    float: left;
			}

			.top-nav>li>a {
			    padding-top: 20px;
			    padding-bottom: 20px;
			    line-height: 20px;
			    color: #fff;
			}

			.top-nav>li>a:hover,
			.top-nav>li>a:focus,
			.top-nav>.open>a,
			.top-nav>.open>a:hover,
			.top-nav>.open>a:focus {
			    color: #fff;
			    background-color: #1a242f;
			}

			.top-nav>.open>.dropdown-menu {
			    float: left;
			    position: absolute;
			    margin-top: 0;
			    /*border: 1px solid rgba(0,0,0,.15);*/
			    border-top-left-radius: 0;
			    border-top-right-radius: 0;
			    background-color: #fff;
			    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
			    box-shadow: 0 6px 12px rgba(0,0,0,.175);
			}

			.top-nav>.open>.dropdown-menu>li>a {
			    white-space: normal;
			}

			/* Side Navigation */

			@media(min-width:768px) {
			    .side-nav {
			        position: fixed;
			        top: 60px;
			        left: 225px;
			        width: 225px;
			        margin-left: -225px;
			        border: none;
			        border-radius: 0;
			        border-top: 1px rgba(0,0,0,.5) solid;
			        overflow-y: auto;
			        background-color: #222;
			        /*background-color: #5A6B7D;*/
			        bottom: 0;
			        overflow-x: hidden;
			        padding-bottom: 40px;
			    }

			    .side-nav>li>a {
			        width: 225px;
			        border-bottom: 1px rgba(0,0,0,.3) solid;
			    }

			    .side-nav li a:hover,
			    .side-nav li a:focus {
			        outline: none;
			        background-color: #1a242f !important;
			    }
			}

			.side-nav>li>ul {
			    padding: 0;
			    border-bottom: 1px rgba(0,0,0,.3) solid;
			}

			.side-nav>li>ul>li>a {
			    display: block;
			    padding: 10px 15px 10px 38px;
			    text-decoration: none;
			    /*color: #999;*/
			    color: #fff;    
			}

			.side-nav>li>ul>li>a:hover {
			    color: #fff;
			}

			.navbar .nav > li > a > .label {
			  -webkit-border-radius: 50%;
			  -moz-border-radius: 50%;
			  border-radius: 50%;
			  position: absolute;
			  top: 14px;
			  right: 6px;
			  font-size: 10px;
			  font-weight: normal;
			  min-width: 15px;
			  min-height: 15px;
			  line-height: 1.0em;
			  text-align: center;
			  padding: 2px;
			}

			.navbar .nav > li > a:hover > .label {
			  top: 10px;
			}

			.navbar-brand {
			    padding: 5px 15px;
			}
	</style>
</head>
<body>
	<div class = 'container col-lg-6 mt-5 mx-auto border border-info p-4 bg-light rounded text-danger'>
		<form action = "db.php?update_password" method="POST">
			<h3 class = "text-success text-italic text-center">Change Password</h3>
			<div>
					<p class="text-center text-danger"> <?php if(isset($msg)) echo $msg;?></p>
			</div>
			<div class = "form group row mt-4">
				<div class = "col-lg-4">
					<label><h4>Old Password</h4></label>
				</div>
				<div class = "col-lg-8">
					<input type = "password" name = "old_password" class = "form-control"/>
				</div>
			</div>
			<div class = "form group row mt-4">
				<div class = "col-lg-4">
					<label><h4>Confirm New Password</h4></label>
				</div>
				<div class = "col-lg-8">
					<input type = "password" name = "confirm_new_password" class = "form-control"/>
				</div>
			</div>
			<div class = "row mt-2">
				<a href = "db.php?home" name = "home" class = "fa fa-home ml-3" style = "color:navy;font-size:2.5rem;text-decoration: none;"></a>
				<button type = "submit" name = "update_password" class = "btn btn-success ml-5">Change Password</button>
		    </div>

		</form>		
	</div>
</body>
</html>