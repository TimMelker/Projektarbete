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
 	if(isset($_POST['student_name']) && isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['university'])
 		&& isset($_POST['cv'])&& isset($_POST['presentation'])&& isset($_POST['degree'])&& isset($_POST['other_degree'])){
 	$student_name = mysqli_real_escape_string($db_connection, $_POST['student_name']);
 	$phone = mysqli_real_escape_string($db_connection, $_POST['phone']);
 	$university = mysqli_real_escape_string($db_connection, $_POST['university']);
 	$cv = mysqli_real_escape_string($db_connection, $_POST['cv']);
 	$presentation = mysqli_real_escape_string($db_connection, $_POST['presentation']);
 	$degree = mysqli_real_escape_string($db_connection, $_POST['degree']);
 	$other_degree = mysqli_real_escape_string($db_connection, $_POST['other_degree']);
 	
 	$ad_id = $_SESSION['user_id'];


 	$sql = "INSERT INTO student (student_name, email, phone, university, cv, presentation, degree, other_degree) 
 	VALUES ('$student_name', '$email', '$phone', '$university', '$cv', '$presentation', '$degree',  '$other_degree')";
 	$query_check_insert = mysqli_query($db_connection, $sql);
 	if($query_check_insert){
 		$messages[] = "Du har uppdaterat din profil!";
 	} else {
 		$messages[] = "Fel vid uppdatering!";
 	}
 }
}
?>

			</div>
			<button onclick="window.location.href='User.php'">Spara</button>
		</div>
	</body>
</html>