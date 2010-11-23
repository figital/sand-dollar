<?
    $pageTitle = "Login";


	$message = "";
	$error = false;

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$error = true;
		$message = "Maecenizzle pulvinizzle, ipsum the bizzle malesuada boofron, rizzle tellivizzle bizzle cool, izzle mah nizzle metizzle yo izzle crackalackin.";


		if (!$error) {

			try {
				
				new dBug($_POST);

			} catch (Exception $e) {

				new dBug($e);

			}

		}

	}


	include("../includes/header.php");
	include("../includes/navigation.php");

?>



<h2><?=$pageTitle?></h2>


<?
	if ($message) {
		print_r("<div class='message bad'>".$message."</div>");
	}
	
?>

<form method="post">

	<div style="width:500px;border:1px dotted #39c;padding:20px;padding-bottom:35px;margin:0px;background-color:#fff;">

	<div style="margin-bottom:5px;">
		<div style="float:left;margin-right:10px;">
		<div class="label">Username</div>
		<input style="width:200px;font-size:20px;color:#666;padding-left:3px;" name="username" value="<? if (isset($_POST['username'])) { echo $_POST['username']; } ?>">
		</div>
		<div class="label">Password</div>
		<input style="width:200px;font-size:20px;color:#666;padding-left:3px;" name="password" type="password" value="<? if (isset($_POST['password'])) { echo $_POST['password']; } ?>">

		<input type="submit" name="submit" value="Submit" style="font-size:20px;">
	</div>

	</div>

</form>


<?

	include("../includes/footer.php");

?>

