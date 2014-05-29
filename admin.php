<?php 
include ("include/admin_include.php");
?>

<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="userContainer">
			<div id="profileImage"><!--Lägg in bild från databasen-->
			</div>
			<div id="userInfo"><!--Samtliga fält från databasen skall in-->

				<button title="Redigera" name="Redigera" onclick="window.location.href='editUser.php'">Redigera</button>

		</div>
			<div id="admin_delete_ad">
				<form id="admin_delete_ad_form" name="admin_delete_ad_form" method="POST" action="admin.php">
					<select id="dropdown_ads" name="dropdown_ads"><?php getAds();?></select>
					<input name="submit_ad_delete" type="submit" value="Ta bort annons"/>
				</form>
		</div>
		
		<div id="admin_delete_student">
			<form name="admin_delete_user_form" method="POST" action="admin.php">
				<select name="dropdown_users"><?php getUsersStudent();?></select>
				<input name="submit_user_delete" type="submit" value="Ta bort användare"/>
			</form>
		</div>
		
		<div id="admin_delete_business">
			<form name="admin_delete_business_form" method="POST" action="admin.php">
				<select name="dropdown_business"><?php getUsersBusiness();?></select>
				<input name="submit_business_delete" type="submit" value="Ta bort företag"/>
			</form>
		</div>

		<div id="login_status">
			<?php include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/login/views/logged_in.php"); ?>
		</div>

	</body>
</html>
