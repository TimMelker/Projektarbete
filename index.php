<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}

if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("login/config/db.php");

// load the login class
require_once("login/classes/Login.php");
//require_once("login/classes/LoginStudent.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

//$loginStudent = new LoginStudent();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    if($login->isUserAdmin() == true){
        header("Location: admin.php");
    }
    elseif($login->isUserBusiness() == true){
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    header("Location: User_business.php");
    //include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/login/views/logged_in.php");
    }
    else{
        header("Location: User.php");
    }

} /*else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("login/views/not_logged_in.php");
}*/

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
    <div id="logoDiv"><img src="images/logo.png" alt="StudentJobb" title="StudentJobb"/>  </div>
    <div id="info">
		<h1>StudentJobb</h1>

		<!--start Info-->
		<p>Många studenter lever idag med att ha det svårt att få ekonomin att gå runt. Samtidigt har många företag små arbeten som behöver utföras men tiden saknas att utföra dessa.
Det här förändras genom tjänsten StudentJobb genom att föra samman företagen med studenterna, där företagen kan få mindre jobb utförda snabbt och effektivt och studenten får en lättare vardag genom att få ekonomin att gå runt. Studenten får även en väg in till arbetsmarknaden genom nya kontakter och utförda arbeten de kan visa upp för framtida arbetsgivare.
Genom tjänsten StudentJobb kan företag snabbt få sina mindre arbeten utförda utan krav på fler arbetsuppgifter och ges fler kontakter för framtida anställda.</p>
    </div>
    <!--end info-->

<!--start topDiv-->
<div id="topDiv">
	
	<!--start Form-->
    <div id="form">
    	    <form id="loginForm" name="loginForm" action="index.php" method="POST" class="loginForm">
	    	<h2>Inlogg</h2>
	    	<label>
	    		<span>Användarnamn: </span>
	    		<input id="userName" type="text" name="user_name" placeholder="Ditt användarnamn" required /><br>
	    	</label>

	    	<label id="passwordLabel">	    		
	    		<span id="passSpan">Lösenord: </span>
	    		<input id="password" type="password" name="user_password" placeholder="Ditt lösenord" autocomplete="off" required /><br>
	    	</label>

            <div id="loginStatus">
                <?php require_once($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/login/classes/Login.php");
                    echo implode(" ", $login->errors);
                ?>
            </div>

	    	<label id="btnLabel">
	    		<a class="lightbox_trigger" href="#">Registrera</a>
	    	</label>
	    	<label>
	    		<input type="submit" name="login" value="Log In" />
	    		<!--<a href="login/index.php" onclick="document.forms['loginForm'].submit();" id="loginBtn">Logga In</a>-->
	    	</label>

		</form>
    </div>
    <!--end form-->

    <a class="aboutLightbox" id="aboutBtn" href="">Om sidan</a>

    <!--start About Lightbox-->
	<div id="aboutLightbox">
		<p>Click to close</p> 
		<div id="content">  
			<p id="lightboxTxt"><?php include('about.php'); ?></p> 
		</div>
	</div>
	<!--About Lightbox end-->

</div>
<!--end topDiv-->

<?php include ('footer.php'); ?>

</body>
</html>