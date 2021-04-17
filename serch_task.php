<?php
include('inter.php');

$d = $_POST['dated'];
print_($d);
$darr = date_parse_from_format('d-m-Y', $d);
print_r($darr);


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