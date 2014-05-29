<?php 
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] == 1){
	header("Location: admin.php");
}
include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/login/views/logged_in.php");
?>

<DOCTYPE! html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="userContainer">
			<div id="profileImage"><!--Lägg in bild från databasen-->
			</div>
			<div id="userInfo"><!--Samtliga fält från databasen skall in-->

				


			</div>
			<button title="Redigera" name="Redigera" onclick="window.location.href='editUser.php'">Redigera</button>
		</div>
	</body>
</html>