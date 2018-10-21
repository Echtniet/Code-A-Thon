<?php
	include('server.php');
	$postdata = file_get_contents("php://input");
	$info = json_decode($postdata);
 
	$sql = "SELECT COUNT(*) AS found FROM jobseeker WHERE (email =  or username = ?) AND password = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sss", $info->username, $info->username, $info->psw);
	$stmt->execute();
	$stmt->bind_result($found);
	$stmt->fetch();
    if ($found == 1) {
    	//user loging
    }

    $sql = "SELECT COUNT(*) AS found FROM recruiter WHERE (email = ? or username = ?) AND password = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sss", $info->username, $info->username, $info->psw);
	$stmt->execute();
	$stmt->bind_result($found);
	$stmt->fetch();
    if ($found == 1) {
    	//recuiter loging
    }
    echo $found;
	
    $stmt->close();
	$conn->close();
?>