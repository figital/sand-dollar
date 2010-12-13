<?

	error_reporting(E_ALL);

	include("/var/www/sand-dollar/lib/dBug/dBug.php");
	
	session_start();
	
	$user = Array();
	$user["firstname"] = "Scott";
	$user["lastname"] = "Fitchet";
	$user["handle"] = "figital";
		
	
	$_SESSION["auth"] = false;
	$_SESSION["user"] = $user;
	

?>
