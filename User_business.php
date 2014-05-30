<?php 
session_start();
include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/login/views/logged_in.php");
?>
				
<DOCTYPE! html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="insertAd.js"></script>
	</head>
	<body>
		<div id="userContainer">
			<div id="profileImage"><!--Lägg in bild från databasen-->
			</div>
			<div id="userInfo"><!--Samtliga fält från databasen skall in-->
				<button onclick="myCall()" style="margin-top: 200px;" title="insertAd" name="insertAd">Lägg in annons</button>


			</div>
			<button title="Redigera" name="Redigera" onclick="window.location.href='editUser.php'">Redigera</button>
			<button title="Annonser" name="Annonser" onclick="window.location.href='adList_show.php'">Annonser</button>
	
		</div>
	</body>
</html>