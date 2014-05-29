<?php include('include/models/db_connect.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>StudentJobb</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js.js"></script>
</head>

<body>

<div id="Container">
    <div id="apply">
<form name="ansok" method="post" action="skickat.php">
Titel<br> <?php 

?> <!--ska in med ads advert_id titel-->
<input name="name" type="text" size="35">
<br> <!--Hämta annonsens ämen från DB-->
Företagsmail:<br>
<input name="subject" type="text" size="35">

<br>
Personligt meddelande:<br>
<textarea name="message" cols="35" rows="20"></textarea>

<br>
Email:<br>
<input name="email" type="text" size="35">
<br>
<br>
<input name="submit" type="submit"
value="Skicka meddelandet">
</form>
</div>
</div>
</body>
</html>