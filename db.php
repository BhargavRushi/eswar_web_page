<?php
	$con = mysqli_connect("localhost","root","","company");
	session_start();
	if(isset($_POST['signup']))
	{

		if(!empty($_POST['password']) && !empty($_POST['mobile']) && !empty($_POST['name']) && !empty($_POST['email']))
		{
				$n = $_POST['name'];
				$m = $_POST['mobile'];
				$e = $_POST['email'];
				$p = $_POST['password'];

				$sql1 = "select * from userdetails where email = '$e'";
				$fetch = mysqli_query($con,$sql1);
				$res1 = mysqli_fetch_array($fetch);
				if(empty($res1))
				{
					$sql = "insert into userdetails values('','$n','$m','$e','$p','','')";
					$res = mysqli_query($con,$sql);
					if($res == true)
					{
						//header("Location: ");
						$msg="Signup Successfully!! Now You can Login";
						require 'login2.php';
				    }
				    else
				    {
				    	 $msg="Something Went Wrong";
				    	 require 'index.php';
				    }
				}
				else
				{
					$msg= 'This Email is already Exixt in our Database';
					require 'index.php';
			    }
		}
		else
		{
			$msg="These Fields are mandatory . Please Fill the data!!";
			require 'index.php';
		}
	
    }

    else if(isset($_POST['login']))
    {
    	if(!empty($_POST['email']) && !empty($_POST['password']))
    	{
		    $e = $_POST['email'];
		    $p = $_POST['password'];
		    $sql = "select *  from userdetails where email = '$e' and password = '$p'";
		    $res = mysqli_query($con,$sql);
		    $row = mysqli_fetch_array($res);
		    if($row)
		    {
		    	$sql = "select * from userdetails where email = '$e' and password = '$p'";
		    	$res = mysqli_query($con,$sql);
		    	$e = $row['email'];	
		    	$uid = $row['uid'];
		    	$_SESSION['id'] = $uid;
		    	require 'Profile.php';
		    }
		    else
		    {
		    	$msg1 = "Invalid user details";
		    	require 'login2.php';
		    }

    	}
    	else
    	{
    		$msg1 = "These Fields are mandatory . Please Fill the data!!";
    		require 'login2.php';
    	}
    }

    else if(isset($_GET['logout']))
    {
    	session_unset();
    	session_destroy();
    	require 'login2.php';
    }


    else if(isset($_GET['delete']))
    {
    	if(isset($_SESSION['id']))
    	{
	    	$uid = $_SESSION['id'];
	    	$sql = "delete from userdetails where sno = '$uid'";
	    	$res = mysqli_query($con,$sql);
	    	if($res == true)
	    	{
	    		$msg = "Account deleted Successfully";
	    		require 'index.php';
	    	}
	    	else
	    	{
	    		$m = "<h1>Unable to delete the account</h1>";
	    		require "Profile.php";
	    	}
    	}
    	else
    	{
    		require "login2.php";
    	}
    }
    else if (isset($_GET['edit'])) 
    {
    	if(isset($_SESSION['id']))
    	{
    	    require 'edit.php';
    	}
    	else
    	{
              require 'login2.php';
    	}
    	
    }

    else if(isset($_GET['update']))
    {
        if(isset($_SESSION['id']))
        {
        	$uid = $_SESSION['id'];
	    	$email = $_POST['email'];
	    	$name = $_POST['name'];
	    	$phone = $_POST['mobile'];
	        $sql = "update userdetails set email = '$email',name = '$name',mobile = '$phone' where sno = '$uid'";
	        $res = mysqli_query($con,$sql);
        	require 'Profile.php';
        }
        else
        {
        	require 'login2.php';
        }
    }
    else if(isset($_GET['changepassword'])) 
    {

    	if(isset($_SESSION['id']))
    	{
    		require "changepassword.php";
    	}
    	else
    	{
    		require "login2.php";
    	}
    	
    }
    else if(isset($_GET['update_password']))
    {
    	if(isset($_SESSION['id']))
    	{
	    	$uid = $_SESSION['id'];
	    	if(!empty($_POST['old_password']) && !empty($_POST['confirm_new_password']))
	    	{
		    	$sql = "select password from userdetails where sno = '$uid'";
		    	$res = mysqli_query($con,$sql);
		    	$row = mysqli_fetch_array($res);
		    	$e = $row['email'];
		    	$p = $row['password'];
		    	$op = $_POST['old_password'];
		    	if($p == $op)
		    	{
		    		$cp = $_POST['confirm_new_password'];
		    		$sql1 = "update userdetails set password = '$cp' where email = '$e'";
		    		$res = mysqli_query($con,$sql1);
		    		if($res == true)
		    		{
		    			$msg = "Password updated Successfully";
		    			require 'login2.php';
		    		}
		    	}
		    	else
		    	{
		    		$msg = "Password incorrect";
		    		require 'changepassword.php';
		    	}
	        }
	        else
	        {
	        	$msg = "These Fields are mandatory . Please Fill the data!!";
	        	require 'changepassword.php';
	        }
        }
        else
        {
        	require 'login2.php';
        }
    }
    else if(isset($_GET['home']))
    {
    	if(isset($_SESSION['id']))
    	{
    		require "profile.php";
    	}
    	else
    	{
    		require "login2.php";
    	}
    }
    else if(isset($_POST['picture']))
    {
    	if(isset($_SESSION['id']))
    	{
	    	$id = $_GET['picture'];
	    	$path = "IMG/".basename($_FILES['file']['name']);
	    	$extension = pathinfo($path, PATHINFO_EXTENSION);
	    	if($extension == 'jpg')
	    	{
	    		$sql = "update userdetails set path = '$path' where sno = '$id'";
	    		$res = mysqli_query($con,$sql);
	    		move_uploaded_file($_FILES['file']["tmp_name"],$path);
	    	}
	    	else
	    	{
	    		$msg = "Only jpg files are accepted";	
	    	}
	    	$sql1 = "select * from userdetails where sno = '$id'";
	    	$res1 = mysqli_query($con,$sql1);
	    	$row = mysqli_fetch_array($res1);
	    	$e = $row['email'];
	    	require "Profile.php";
    	}
    	else
    	{
    		require "login2.php";
    	}
    }

    mysqli_close($con);
?>