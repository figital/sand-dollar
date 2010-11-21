<?
    $pageTitle = "Login";


	$message = "";
	$error = false;

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		if (!$error) {

			try {
				new dBug($_POST);

			} catch (Exception $e) {

				new dBug($e);

			}

		}

	}
?>
<h2><?=$pageTitle?></h2>


<?
	if ($message) {
		print_r("<div class='message bad'>".$message."</div>");
	}
?>

<form method="post">

	<div style="width:500px;border:1px dotted #39c;padding:20px;padding-bottom:35px;margin:15px;background-color:#f6f6f6;">

	<div style="margin-bottom:5px;">
		<div style="float:left;margin-right:10px;">
		<div class="label">Username</div>
		<input style="width:200px;font-size:20px;color:#666;padding-left:3px;" name="username" value="<?=$_POST['username']?>">
		</div>
		<div class="label">Password</div>
		<input style="width:200px;font-size:20px;color:#666;padding-left:3px;" name="password" value="<?=$_POST['password']?>">

		<input type="submit" name="submit" value="Submit" style="font-size:20px;">
	</div>

	</div>

</form>

