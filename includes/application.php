<?

	error_reporting(E_ALL);

    define('DOC_ROOT', realpath(dirname(__FILE__) . '/../'));
    define('URL_ROOT', substr(DOC_ROOT, strlen(realpath($_SERVER['DOCUMENT_ROOT']))) . '/');
	

	include(DOC_ROOT . "/lib/dBug/dBug.php");
	include(DOC_ROOT . "/lib/php-github-api/phpGitHubApi.php");
	
	session_start();
	
	$user = Array();
	$user["firstname"] = "Scott";
	$user["lastname"] = "Fitchet";
	$user["handle"] = "figital";
		
	
	$_SESSION["auth"] = false;
	$_SESSION["user"] = $user;
	

?>
