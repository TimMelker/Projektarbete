<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
    </head>
    <body>
        <!-- register form -->
        <form method="post" action="registerBusiness.php" name="businessRegisterForm">

            <!-- the user name input field uses a HTML5 pattern check -->
            <label for="login_input_username">Företagsnamn (only letters and numbers, 2 to 64 characters)</label><BR/>
            <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="business_name" required /><BR/><BR/>

            <!-- the email input field uses a HTML5 email type check -->
            <label for="login_input_email">Företagets Email</label><BR/>
            <input id="login_input_email" class="login_input" type="email" name="business_email" required /><BR/><BR/>

            <label for="login_input_password_new">Lösenord (min. 6 characters)</label><BR/>
            <input id="login_input_password_new" class="login_input" type="password" name="business_password_new" pattern=".{6,}" required autocomplete="off" /><BR/><BR/>

            <label for="login_input_password_repeat">Repetera lösenord</label><BR/>
            <input id="login_input_password_repeat" class="login_input" type="password" name="business_password_repeat" pattern=".{6,}" required autocomplete="off" /><BR/><BR/>
            <input type="submit"  name="register" value="Register" /><BR/><BR/>

        </form>

        <!-- backlink -->
        <a href= "../index.php" >Back to Login Page</a>
    </body>
</html>