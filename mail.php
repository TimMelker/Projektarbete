<?php 

$connect = mysqli_connect('localhost' , 'root' , 'test123' , 'studentjobb') or die ("Could not connect to the database!");
$db = mysqli_select_db($connect, 'studentjobb') or die ("No database");


if(mysqli_connect_errno())
{
    printf("Connection failed: %s\n");
    exit();
}

if(mysqli_ping($connect))
{
    printf("Our connection is ok!\n");
}
else{
    printf("Error: %s\n", mysqli_error($connect));
}


mysqli_close($connect);

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


<form name="ansok" method="post" action="skickat.php">
Titel<br>
<input name="name" type="text" size="30">
<br> <!--Hämta annonsens ämen från DB-->
Företagsmail:<br>
<input name="subject" type="text" size="30">

<br>
Personligt meddelande:<br>
<textarea name="message" cols="30" rows="5"></textarea>
<br>
<br>
Email:<br>
<input name="email" type="text" size="30">
<br>
<input name="submit" type="submit"
value="Skicka meddelandet">
</form>

</div>
</body>
</html>