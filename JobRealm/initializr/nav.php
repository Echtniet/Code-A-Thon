<?php
if (isset($_SESSION['urights'])) {
	if ($_SESSION['urights'] == 'recruiter') {
	echo '
			<li><a class="navButton" href="companylike.php">View Seekers</a></li><li><a class="navButton" href="logout.php">Logout</a></li>';
	}else{
		echo '
			<li><a class="navButton" href="seekerlike.php">View Recruiters</a></li><li><a class="navButton" href="logout.php">Logout</a></li>';
	}
}else{
	echo '<li><a class="navButton" href="loginregister.php">Login/Register</a></li>';
}

?>
