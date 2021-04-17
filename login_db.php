<?php
include('inter.php');

$uid = $_POST['usernm'];
$lgpwd = $_POST['passwrd'];

$sql="SELECT * FROM user WHERE username='$uid'";

$res=mysqli_query($con,$sql);

if($row=mysqli_fetch_array($res))
		
		if($lgpwd==$row['pswd']) 
		{
			session_start();

			$_SESSION['enroll']=$row[0];
			header('location:todo.php');
		}
		else
		header('location:login.html');
	
	else
	{
		echo "<script>";
		echo "alert('INVALID USERNAME AND PASSWORD')";
		echo "</script>";
		header('location:.html');
	}
?>
