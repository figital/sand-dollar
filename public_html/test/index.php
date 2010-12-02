<?
error_reporting(E_ALL);

$github = new phpGitHubApi();
$repo = $github->getRepoApi()->show('figital', 'sand-dollar');




$commits = $github->getCommitApi()->getBranchCommits('figital', 'sand-dollar', 'master');




?>

<h1><?=$repo["name"]?></h1>

<ul>
<li><?=$repo["name"]?>
<li><?=$repo["description"]?>
<li><a href="<?=$repo["url"]?>"><?=$repo["url"]?></a>
<li><a href="<?=$repo["homepage"]?>"><?=$repo["homepage"]?></a>
</ul>

<?
new dBug($commits);
?>
