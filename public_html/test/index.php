<?

	error_reporting(E_ALL);

	$github = new phpGitHubApi();
	$repo = $github->getRepoApi()->show('figital', 'sand-dollar');

	//$commits = $github->getCommitApi()->getBranchCommits('figital', 'sand-dollar', 'master');



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
	new dBug($repo);


	include("../../includes/footer.php");

?>
