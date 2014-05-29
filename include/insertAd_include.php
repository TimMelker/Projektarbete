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

    if (!$db_connection->set_charset("utf8")) {
        $errors[] = $db_connection->error;
    }

 if (!$db_connection->connect_errno) {
 	if(isset($_POST['ad_title']) && isset($_POST['ad_text'])){
 	$ad_title = $_POST['ad_title'];
 	$ad_text = $_POST['ad_text'];
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

Din kommentar har lagts till!
<?php header("refresh: 5;" . "url=" . $_SERVER['HTTP_REFERER']); ?>