
<?php
session_start();
include 'Connection.php';
if(isset($_POST['submit']));
{
	$username=($_POST['username']);
	$email=($_POST['email']);
	$mob=($_POST['mob']);
	$pass=($_POST['pass']);
	$cpass=($_POST['cpass']);

	$password =md5($pass);
	
//check email already resister or not
	$emailquery="select * from register where email='$email'";
    $check_email=mysqli_query($con,$emailquery);
	if(mysqli_num_rows($check_email)>0)
	{
		$_SESSION['status']="email alredy exists... please enter another email";
		header("location:http://localhost/Tutorial%20Point/register.php?");
	}
    else
    {
	    if ($pass == $cpass) 
	    {
		    $reg_query = "insert into register(username,email,mob,pass) values('$username','$email','$mob','$password')";
			$reg_query_run = mysqli_query($con,$reg_query);
            if($reg_query_run)
            {
               $_SESSION['status']= "register succsesfully";
               header("location:http://localhost/Tutorial%20Point/register.php?");
            }
            else
            {
               $_SESSION['status']= " not register succsesfully";
               header("location:http://localhost/Tutorial%20Point/register.php?");
            }
		}
	    else
	    {
		      $_SESSION['status']= "password are not match";
		      header("location:http://localhost/Tutorial%20Point/register.php?");
	    }
}



	}

?>