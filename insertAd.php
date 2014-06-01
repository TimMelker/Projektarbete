<?php
session_start();
if(!isset($_SESSION['user_login_status'])){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	</head>
	<body>
		<h1 style="float: left;">Titel&nbsp</h1>
		<form accept-charset="utf-8" id="createAd" method="POST" action="include/insertAd_include.php">
			<input name="ad_title" id="ad_title" type="text" placeholder="Titel" required /><br>
		</form>
		</br>
		<h1 style="float: left;">Annonstext</h1>
		<textarea style="white-space: pre;" cols="50" rows="15"  name="ad_text" form="createAd" placeholder="Skriv in din annonstext här!" required ></textarea>
		<input form="createAd" id="insertAd_btn" type="submit" name="insertAd" value="Lägg in annons"/>
	</body>
</html>