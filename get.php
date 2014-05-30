<?php
$db_connection = mysqli_connect('localhost' , 'root' , 'test123' , 'studentjobb');
				$db_select = mysqli_select_db($db_connection, 'studentjobb');

			    if (!mysqli_set_charset($db_connection, "utf-8")) {
        		$errors[] = $db_connection->error;

        		$id =  addslashes($_REQUEST['id']);
        		$image = mysql_query("SELECT * FROM 'students' 'image' WHERE id=$id");
        		$image = mysql_fetch_assoc($image);
        		$image = $image['image'];

        		header("Content-type: iamge/jpeg");

        		echo $image;
 ?>