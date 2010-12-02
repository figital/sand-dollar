<?
<<<<<<< HEAD
    $github = new phpGitHubApi();
    $commits = $github->getCommitApi()->getBranchCommits('figital', 'sand-dollar', 'master');
 
?>

<html>
<head>
	<title>sand-dollar</title>
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
</head>

<body>
	
	<div class="box_shadow" style="border:1px solid #999;padding:10px;float:right;width:250px;margin-left:30px;height:500px;background-color:#eee;">
	    <b>Recent Commits</b><p>
	    <?
            $i = 0;
            foreach ($commits as $commit) {
                echo '<li> ' . $commit["committed_date"] . '<br>' . $commit["message"];
                $i++;
                if ($i == 5) { break; }
            }	    
	    ?>
	</div>
	
	[ <a href="https://github.com/figital/sand-dollar">GITHUB</a> ]
	[ <a href="/server-status">SERVER-STATUS</a> ]
	[ <a href="/test">API TEST</a> ]
	[ UNIT TESTS ]
=======
	include("../includes/header.php");
	include("../includes/navigation.php");
?>


>>>>>>> b482fb0ebe7775b2db263eb2c7b1a781265cc622
	<p>
	
	<img style="width:100px;float:left;margin-right:20px;" src="images/sand-dollar2.png">
	
	<h1>sand-dollar</h1>

	<ul>
		<li><a href="/login">Login</a></li>
		<li><a href="/logout">Logout</a></li>
		<li><a href="/admin">Admin</a></li>
		<li>Search
	</ul>
	<div style="clear:left;"></div>
	<i style="color:#999;">welcome to lorem ipsum dolor</i>
	<p>

	in leiu of content cached at the github wiki here's an introduction to  <a href="http://thirtythousand.org">thirtythousand.org</a> :


	<div class="box_shadow" style="width:500px;border:1px solid #666;padding:20px;background-color:#fff;">
	The framers of the Constitution and the Bill of Rights intended that the total population of Congressional districts never exceed 50 to 60 thousand. Currently, the average population size of the districts is nearly 700,000 and, consequently, the principle of proportionally equitable representation has been abandoned.
	<p>
	The historical trend relative to our federal Representation is illustrated in the charts below. The vertical bar chart illustrates that the total number of congressional districts was increased every ten years from 1790 to 1910 (with a single exception). These increases were a direct result of the growth in total population as was intended by the framers of the Constitution and the Bill of Rights.
 	<p>
	Note that the last increase in representation occurred after the 1910 census when the total number of congressional districts was increased to 435. It has remained that size ever since (except for a four-year period when it was temporarily increased to 437 after the admission of Alaska and Hawaii).
	</div>

<<<<<<< HEAD
	<div id="footer">Greetings from the footer.</div>

</body>
</html>
=======
<?
	include("../includes/footer.php");
?>
>>>>>>> b482fb0ebe7775b2db263eb2c7b1a781265cc622
