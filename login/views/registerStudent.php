<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../style.css"> 
    </head>
    <body>
        <div id="logoDiv"><img src="../images/cloudStudent.png" alt="business" title="business"/>  </div>
        <h1 style="padding-bottom: 10px; margin-top: 10px;">Registrera Dig</h1>
            <div id="regComplete"><?php
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
    </div>
        <div id="regDivStudent">

        <!-- register form -->
        <form class="regForm" method="post" action="registerStudent.php" name="studentRegisterForm">

            <!-- the user name input field uses a HTML5 pattern check -->
            <label for="login_input_username">Namn (bara bokstäver, 2 till 64 tecken)</label><BR/>
            <input id="regUserName" class="login_input" type="text" pattern="[a-zA-Z\s]{2,64}" autocomplete="off" name="student_name" required /><BR/><BR/>

            <!-- the email input field uses a HTML5 email type check -->
            <label for="login_input_email">Email</label><BR/>
            <input id="regUserEmail" class="login_input" type="email" name="student_email" autocomplete="off" required /><BR/><BR/>

            <label for="login_input_password_new">Lösenord (min. 6 tecken)</label><BR/>
            <input id="regPassword" class="login_input" type="password" name="student_password_new" pattern=".{6,}" required autocomplete="off" /><BR/><BR/>

            <label for="login_input_password_repeat">Repetera lösenord</label><BR/>
            <input id="regPassword" class="login_input" type="password" name="student_password_repeat" pattern=".{6,}" required autocomplete="off" /><BR/><BR/>
            <input id="regFormBtn" type="submit"  name="register" value="Registrera" /><BR/><BR/>

        </form>
                <a id="backLink" href= "../index.php" >Tillbaka till login</a>

        </div>

        <!-- backlink -->
    </body>
</html>