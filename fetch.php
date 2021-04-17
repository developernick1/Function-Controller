<?php
include('inter.php');
if(isset($_POST["usage"])){
    switch($_POST["usage"]){
        case 1: echo fetch_todo($mysqli);
        break;
        default : "Access Denied.";
    }
}else{
    echo "Access Denied.";
}
function fetch_todo($mysqli){
    $error = true ;
    $message = "No data found";
    $data = array();
    $capsule = array();
    $fetch = $mysqli->prepare("SELECT * FROM `table1` WHERE yy = ? AND mm = ? AND dd = ?");
    $fetch->bind_param("sss",$_POST["year"],$_POST["month"],$_POST["date"]);
    $fetch->execute();
    $res = $fetch->get_result();
    if($res->num_rows > 0){
        while($result = $res->fetch_assoc()){
            $data[] = $result;
        }
        $error = false ;
        $message  = $res->num_rows." rows returned";
    }else{
        $message = "Failed to retrive data due to : "+$mysqli->error ;
    }
    $capsule["error"] = $error ;
    $capsule["message"] = $message ;
    $capsule["data"] = $data ;
    return json_encode($capsule);
}
?>