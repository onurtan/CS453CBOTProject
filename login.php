<?php
	session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];
	if($username == "admin" && $password == "admin") {
		$_SESSION["admin"] = true;
		echo "You are logged in <b>$username</b>!";
		exit;
	}
?>
<form method="POST" action="login.php">
	Username: <input name="username" /><br>
	Password: <input name="password" /><br>
	<input type="submit" value="Login" />
</form>

