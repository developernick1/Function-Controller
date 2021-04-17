<?php
include('inter.php');

$urnm = $_POST['usrname'];
$nm = $_POST['flname'];
$ml = $_POST['mail'];
$gndr = $_POST['ho'];
$stat =$_POST['stated'];
$ctn = $_POST['cityname'];
$pwd = $_POST['password'];
$cpwd = $_POST['cpassword'];

if($pwd==$cpwd)
{
    $sql ="INSERT INTO `user`(`name`, `email`, `gender`, `state`, `city`, `pswd`,`username`) VALUES ('$nm','$ml','$gndr','$stat','$ctn','$pwd','$urnm')";
    if(mysqli_query($con,$sql))
    {
        echo "Inserted sucessfully";

        echo 
        header("Location:login.html");

    
    }
    else{
        echo "Not Inserted";
    }
}
else
    echo "error";
?>
