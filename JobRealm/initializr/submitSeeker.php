<?php
	include('server.php');
	$postdata = file_get_contents("php://input");
    $info = json_decode($postdata);
    $sql = "SELECT MAX(Seekerid) FROM jobseeker;";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($nextID);
	$stmt->fetch();
	$nextID++;
	$stmt->close();
	$sql = "INSERT INTO jobseeker (SeekerID, FName, LName, Street, City, State, Zip, Area, Local, Email, SchoolLevelID, Username, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?);";
	$stmt = $conn->prepare($sql);
	$test = 1;
	$stmt->Bind_param("isssssiiissss", $nextID, $info->fname, $info->lname,$info->sstreet, $info->scity, $info->sstate, $info->szip, $info->sarea, $info->slocal, $info->semail, $info->sLevel,$info->susername, $info->spsw);
	if ($stmt->execute()) {
		echo 1;
	}else{
		echo $info->fname;
	}
	$stmt->close();
	$conn->close();
?>