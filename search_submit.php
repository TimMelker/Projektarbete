<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd"> 
	<html> 
	  <head> 
	    <meta  http-equiv="Content-Type" content="text/html;  charset=utf-8"> 
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <title>Search  Contacts</title> 
	  </head> 
	  <body> 
	  	<div id="search">
	    <h3>Sök efter student</h3> 
	    <p>Sök efter din nästa student</p> 
	    <form  method="post" action="search_submit.php?go"  id="searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Sök"> 
	    </form> 
	</div>
<?php 
	if(isset($_POST['submit'])){ 
	if(isset($_GET['go'])){ 
	if(preg_match("^ /+[A-Za-z]/^", $_POST['name'])){ 
	   $name=$_POST['name']; 


$db_connection = mysqli_connect('localhost' , 'root' , 'test123' , 'studentjobb');
				$db_select = mysqli_select_db($db_connection, 'studentjobb');

			    if (!mysqli_set_charset($db_connection, "utf-8")) {
        		$errors[] = $db_connection->error;

	  } 
	  
	  } 
	  else{ 
	  echo  'Vänligen fyll i sökfältet'; 
	  }}
	  } 
	?> 
	  </body> 
	</html>  