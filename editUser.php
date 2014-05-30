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
<?php
				$db_connection = mysqli_connect('localhost' , 'root' , 'test123' , 'studentjobb');
$db_select = mysqli_select_db($db_connection, 'studentjobb');

    if (!mysqli_set_charset($db_connection, "utf-8")) {
        $errors[] = $db_connection->error;
    }

 if (!$db_connection->connect_errno) {
 	if(isset($_POST['ad_title']) && isset($_POST['ad_text'])){
 	$ad_title = mysqli_real_escape_string($db_connection, $_POST['ad_title']);
 	$ad_text = mysqli_real_escape_string($db_connection, $_POST['ad_text']);
 	$ad_id = $_SESSION['user_id'];


 	$sql = "INSERT INTO ads (title, description, business_id) VALUES ('$ad_title', '$ad_text', '$ad_id')";
 	$query_check_insert = mysqli_query($db_connection, $sql);
 	if($query_check_insert){
 		$messages[] = "Din annons lades till!";
 	} else {
 		$messages[] = "Fel vid inlägg!";
 	}
 }
}
?>

			</div>
			<button onclick="window.location.href='User.php'">Spara</button>
		</div>
	</body>
</html>