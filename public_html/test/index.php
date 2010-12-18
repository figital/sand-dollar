<?
<<<<<<< HEAD
error_reporting(E_ALL);

$github = new phpGitHubApi();
$repo = $github->getRepoApi()->show('figital', 'sand-dollar');


=======
>>>>>>> b482fb0ebe7775b2db263eb2c7b1a781265cc622

	error_reporting(E_ALL);
	include("../../lib/php-github-api/phpGitHubApi.php");
	$github = new phpGitHubApi();
	$repo = $github->getRepoApi()->show('figital', 'sand-dollar');

$commits = $github->getCommitApi()->getBranchCommits('figital', 'sand-dollar', 'master');



	include("../../includes/header.php");
	include("../../includes/navigation.php");

?>

<h1><?=$repo["name"]?></h1>

<?=$repo["description"]?>

<ul>
	<li><a href="<?=$repo["url"]?>">home page of your local install</a>
	<li><a href="<?=$repo["homepage"]?>">home page of the remote repository</a>
</ul>

Here's a dump of the results of getRepoAPI()->show() :

<?
<<<<<<< HEAD
new dBug($commits);
=======
	new dBug($repo);


	include("../../includes/footer.php");

>>>>>>> b482fb0ebe7775b2db263eb2c7b1a781265cc622
?>
