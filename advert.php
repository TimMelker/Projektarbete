<?php 

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
		<div id="advert_container">
			<?php

			if($ad_info == false){
				echo 'Den annonsen finns inte!';
			} else{
				?>
				<h1><?php echo $ad_info['title']; ?></h1>
				<p>Advert ID: <?php echo $ad_info['id']; ?></p>
				<p>Annons info: <?php echo $ad_info['description']; ?></p>
				<p>Företagets namn: <?php echo $ad_info['business_name']; ?></p>
				<p></p>
				<?php
			}
				?>
				<button id="replyBtn" title="svara" name="svara" onclick="myCall()">Svara på annons!</button>
		</div>
		<div id="email_container"></div>
	</body>
</html>