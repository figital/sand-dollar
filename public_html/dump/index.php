<?

	include("../../includes/header.php");
	include("../../includes/navigation.php");
	
	
	echo '<h2>session scope:</h2>';
	
	new dBug($_SESSION);	
	
	echo '<h2>server scope:</h2>';
	
	new dBug($_SERVER);
	include("../../includes/footer.php");
	
?>
