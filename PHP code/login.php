<?php 
session_start();
include 'Connection.php';
if(isset($_POST['login']))
{
	$email=($_POST['email']);
	$pass=($_POST['pass']);
    $encrypt_pass=md5($pass);
	$query="select * from register where email='$email' AND pass='$encrypt_pass'";
	$query_run = mysqli_query($con,	$query);

	if(mysqli_num_rows($query_run)>0)
	{
        $_SESSION['status']="Invalid email....please enter correct email";
		header("location:http://localhost/Tutorial%20Point/userzone/userdashboard.php");
        }
        else
        {
 		   	$_SESSION['status']="Invalid Password....please enter correct password";
		header("location:http://localhost/Tutorial%20Point/login.php?");
        }
	
	
}

?>