<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <link rel="stylesheet" type="text/css" href="../style.css"/>
    </head>
    <body>
    <div id="logoDiv"><img src="../images/cloudBusiness.png" alt="business" title="business"/>  </div>
    <h1 style="padding-bottom: 10px; margin-top: 10px;">Registrera Ditt Företag</h1>
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
    <div id="regDivBusiness">
        <!-- register form -->
        <form class="regForm" method="post" action="registerBusiness.php" name="businessRegisterForm">

            <!-- the user name input field uses a HTML5 pattern check -->
            <label for="login_input_username">Företagsnamn (bara bokstäver och siffror, 2 till 64 tecken)</label><BR/>
            <input id="regUserNameBusiness" class="login_input" type="text" pattern="[a-zA-Z0-9\s]{2,64}" autocomplete="off" name="business_name" required /><BR/><BR/>

            <!-- the email input field uses a HTML5 email type check -->
            <label for="login_input_email">Företagets Email</label><BR/>
            <input id="regUserEmailBusiness" class="login_input" type="email" name="business_email" autocomplete="off" required /><BR/><BR/>

            <label for="login_input_password_new">Lösenord (min. 6 tecken)</label><BR/>
            <input id="regPasswordBusiness" class="login_input" type="password" name="business_password_new" pattern=".{6,}" required autocomplete="off" /><BR/><BR/>

            <label for="login_input_password_repeat">Repetera lösenord</label><BR/>
            <input id="regPasswordBusiness" class="login_input" type="password" name="business_password_repeat" pattern=".{6,}" required autocomplete="off" /><BR/><BR/>
            <input id="regFormBtn" type="submit"  name="register" value="Registrera" /><BR/><BR/>

        </form>
              <!-- backlink -->
            <a id="backLink" href= "../index.php" >Tillbaka till login</a>
        </div>

    </body>
</html>