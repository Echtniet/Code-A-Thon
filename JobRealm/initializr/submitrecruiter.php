<?php
	include('server.php');
	$postdata = file_get_contents("php://input");
	$info = json_decode($postdata);
	$sql = "SELECT MAX(recruiterid) FROM recruiters;";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($nextID);
	$stmt->fetch();
	$nextID++;
	$stmt->close();
	$sql = "INSERT INTO recruiters (RecruiterID, CompanyName, Street, City, State, ZIP, Area, Local, Email, UserName, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	$stmt = $conn->prepare($sql);
	$test = 1;
	$stmt->Bind_param("issssiiisss", $nextID, $info->cname, $info->cstreet, $info->ccity, $info->cstate, $info->czip, $info->carea, $info->clocal, $info->cemail, $info->cusername, $info->cpsw);
	if ($stmt->execute()) {
		echo 2;
	}else{
		echo $info->cname;
	}
	$stmt->close();
	$conn->close();
?>