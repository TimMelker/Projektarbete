<?php 
session_start();
$db_connection = null;

$errors = array();

$messages = array();

if(empty($_POST['ad_title'])){
	$errors[] = "Tom titel!";
} elseif (empty($_POST['ad_text'])) {
	$errors[] = "Tom annons!";
}
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
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style.css"/>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<div id="topDiv">
<p style="font-size: 24px; margin-top: 400px;">Din kommentar har lagts till!</p>
<p style="font-size: 18px; margin-top: 10px; font-style: italic;">Omdirigerar om 5sekunder <?php header("refresh: 5;" . "url=" . $_SERVER['HTTP_REFERER']); ?> </p>
</div>
</body>
</html>