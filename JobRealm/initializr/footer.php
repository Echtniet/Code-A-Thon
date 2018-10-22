<?php
if (isset($_SESSION['urights'])) {
	if ($_SESSION['urights'] == 'seeker') {
	echo '<li><a class="navButton" href="seekerprofile.php" style="color:white">My Profile</a></li>';
	}
}
?>