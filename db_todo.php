<?php
include('inter.php');

$a = $_POST['msg'];
$d = $_POST['dated'];
$darr = date_parse_from_format('d-m-Y', $d);
print_r($darr);




$sql="INSERT INTO `table1`(`message`,`date`,`dd`,`mm`,`yy`) VALUES ('$a','$d','$darr[day]',$darr[month],$darr[year])";
print_r($sql);

/*$dt="INSERT INTO `table1`(`date_hold`) VALUES ('$d')";*/
//$mql="INSERT INTO `table1`(`year`) VALUES ('$dt')";

if(mysqli_query($con,$sql)){
	echo"success sql"."<br>";
	header("Location:todo.php");
}
else	
	echo"do again sql "."<br>";

/*if(mysqli_query($con,$mql))
	echo" successDATE";
else	
	echo"do again";*/
/*$mql="INSERT INTO `table1`(`date`) VALUES('$d')";
print_r($mql);
if(mysqli_query($con,$mql))
	echo"success mql"."<br>";
	//echo "current($mql)."<br>";
else	
	echo"do mql again"."<br>";
*/
?>