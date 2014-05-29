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
	<meta charset="utf-8">
	<title><?php echo $_SESSION['user_name']; ?>'s profil </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="userContainer">
			<h3 id="userHeader">Välkommen <?php echo $_SESSION['user_name']; ?> </h3>
			<div id="profileImage">
			</div>
			<div id="userInfo"><!--Samtliga fält från databasen skall in-->

				


			</div>
			<button title="Redigera" name="Redigera" onclick="window.location.href='editUser.php'">Redigera</button>
		</div>
	</body>
</html>