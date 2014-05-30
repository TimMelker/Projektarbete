<?php


include('include/models/db_connect.php');


mysqli_query($connect,"INSERT INTO mailing (mail_id, advert_id, contents, email)
VALUES ('$_POST[post_mail_id]', '$_POST[post_advert_id]', '$_POST[post_contents]', '$_POST[post_email]')");
?>