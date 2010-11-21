<?
error_reporting(E_ALL);
include("../../lib/php-github-api/phpGitHubApi.php");

$github = new phpGitHubApi();
$repo = $github->getRepoApi()->show('figital', 'sand-dollar');






?>

<h1><?=$repo["name"]?></h1>

<ul>
<li>
<li><?=$repo["description"]?>
<li><a href="<?=$repo["url"]?>"><?=$repo["url"]?></a>
<li><a href="<?=$repo["homepage"]?>"><?=$repo["homepage"]?></a>
</ul>

<?
echo '<b>dump:</b><xmp>';
var_dump($repo);
echo '</xmp>';
?>
