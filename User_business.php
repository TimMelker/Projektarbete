<?php 
session_start();
?>
				
<DOCTYPE! html>
<html>
	<meta charset="UTF-8"/>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="insertAd.js"></script>
	<title><?php echo $_SESSION['user_name']; ?>'s profil </title>
	</head>
	<body>
		<?php
			include ("search_submit.php");
		?>
		<div id="userContainer">
			<h3 id="userHeader">Välkommen <?php echo $_SESSION['user_name']; ?> </h3>
				<div id="profileImage"><!--Lägg in bild från databasen-->
				<?php 
					if($_SESSION['user_name'] == "Microsoft"){
						?>
							<img id="profileImg" src="images/microsoftlogo.png"/>
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

				<p>----Företagets profil skall synas här!----

			</div>
			<br><br>
			<button id="insertAdBtn" onclick="myCall()" title="insertAd" name="insertAd">Lägg in annons</button>
			<br>
			<button title="Annonser" name="Annonser" onclick="window.location.href='adList_show.php'">Annonser</button>
			<br>
			<button title="Redigera" name="Redigera" onclick="window.location.href='editUser.php'">Redigera Profil</button>
			<div id="logoutBtnPlacementBusiness">
				<?php include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/login/views/logged_in.php");?>
			</div>
	
		</div>
	</body>
</html>