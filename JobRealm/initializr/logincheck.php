<?php

	session_start();
	$postdata = file_get_contents("php://input");
	$info = json_decode($postdata);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "jobdating";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT COUNT(*) AS found FROM jobseeker WHERE (email = ? or username = ?) AND password = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sss", $info->username, $info->username, $info->psw);
	$stmt->execute();
	$stmt->bind_result($found);
	$stmt->fetch();
	$stmt->close();
    if ($found == 1) {
    	$_SESSION["urights"] = "seeker";
    }else{
    	$sql = "SELECT COUNT(*) AS found FROM recruiters WHERE (email = ? or username = ?) AND password = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sss", $info->username, $info->username, $info->psw);
		$stmt->execute();
		$stmt->bind_result($found);
		$stmt->fetch();
	    if ($found == 1) {
	    	$_SESSION["urights"] = "recruiter";
	    }
	    
		
	    $stmt->close();
    }

	echo $found;
	    
	$conn->close();
?>