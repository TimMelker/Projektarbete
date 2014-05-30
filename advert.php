<?php 
session_start();
if(!isset($_SESSION['user_login_status'])){
	header("Location: index.php");
}
include('adlist.php');

$ad_info = fetch_ad_info($_GET['id']);


?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="advertEmail.js"></script>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
	<div id="topDiv" style="width: 1500px;">
		<div id="advert_container">
			<?php

			if($ad_info == false){
				echo 'Den annonsen finns inte!';
			} else{
				?>
				<div id="profileImage">
				</div>
				<div id="advertInfo">
				<h1 style="font-size: 40px; text-decoration: underline;"><?php echo $ad_info['title']; ?></h1><br>
				<h2 style="font-size: 30px; text-decoration: underline;"><?php echo $ad_info['business_name']; ?></h2>
				<p style="text-decoration: underline;">Annons ID: <?php echo $ad_info['id']; ?></p><br>
				<p id="annonsText" style="white-space: pre;"><?php echo $ad_info['description']; ?></p>
				<p></p>
				<?php
			}
				?>
				</div>
		</div>
		<br>
		<br>
		<div style="width: 1180px; margin-left: auto; margin-right: auto;">
		<a href="adList_show.php" >Tillbaka till annonser</a>
		<a href="#" style="float: right; height: 18px; margin-top: -10px;" id="replyBtn" title="svara" name="svara" onclick="myCall()">Svara på annons!</a>
		</div>
	</div>
	</body>
</html>