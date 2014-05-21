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