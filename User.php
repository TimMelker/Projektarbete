<?php 
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] == 1){
	header("Location: admin.php");
}elseif(isset($_SESSION['isBusiness']) == 1){
	header("Location: User_business.php");
}
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
				<?php 
					if($_SESSION['user_name'] == "Eric Lindeberg"){
						?>
							<img id="profileImg" src="images/profilepic.jpg"/>
				<?php
				}
			?>
			</div>
				<form id="profilePicForm" action="User.php" method="POST" enctype="multiform/form-data">
				Välj profilbild
				<br> 
				<input type="file" name="image">
				<br>
				<input type="submit" value="Upload">
				</form>
			<?php

				$db_connection = mysqli_connect('localhost' , 'root' , 'test123' , 'studentjobb');
				$db_select = mysqli_select_db($db_connection, 'studentjobb');

			    if (!mysqli_set_charset($db_connection, "utf-8")) {
        		$errors[] = $db_connection->error;

        		if(isset($_FILES['image'])){
   				 echo $_FILES['image']['tmp_name'];
						}
				if(!isset($file))
					echo ("");
				else {
					$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name = $_FILES ['image']['name'];
					$image_size = getimagesize($_FILES)['image']['tmp_name'];

					if ($image_size==FALSE)
						echo 'Kontrollera att det är en bild';
					else{

						// if (!$insert = mysql_query("INSERT INTO students VALUES ('', '$image_name', '$image'"));
						
						// 	echo 'Uppladdningen misslyckades';
						
						// else 
						// {

							echo 'Uppladdning lyckades <p>Din bild:</p><img src=get.php';
						}
					}
				}
			?>
			<div id="userInfo"><!--Samtliga fält från databasen skall in-->

			
			<p>----Användarens profil skall synas här!----</p>
			
		
			</div>
			<br><br>


			<button title="Redigera" name="Redigera" onclick="window.location.href='editUser.php'">Redigera</button>
			<button title="Annonser" name="Annonser" onclick="window.location.href='adList_show.php'">Annonser</button>
			<div id="logoutBtnPlacement">
				<?php include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/login/views/logged_in.php");?>
			</div>
		</div>
	</body>
</html>