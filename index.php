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
    <div id="logoDiv"><img src="images/logo.png" alt="StudentJobb"/>  </div>
<div id="topDiv">
	<div id="info">
		<h1>Information om oss</h1>
		<p>Information om sidan skrivs här</p>
    </div><!--end info-->
    <div id="form">
	    <form id="loginForm" name="loginForm" action="#" method="POST" class="loginForm">
	    	<h2>Inlogg</h2>
	    	<label>
	    		<span>Användarnamn: </span>
	    		<input id="userName" type="text" name="userName" placeholder="Ditt användarnamn" /><br>
	    	</label>

	    	<label id="passwordLabel">	    		
	    		<span id="passSpan">Lösenord: </span>
	    		<input id="password" type="password" name="password" placeholder="Ditt lösenord" /><br>
	    	</label>

	    	<label id="btnLabel">
	    		<!--<input type="button" class="button" value="Registrera" id="registerBtn" name="registerBtn"/>-->
	    		<a class="lightbox_trigger" href="#">Registrera</a>
	    	</label>
	    	<label>
	    		<!--<input type="button" class="button" value="Logga In" id="loginBtn" name="loginBtn"/>-->
	    		<a href="http://www.google.se" id="loginBtn">Logga In</a>

	    	</label>
		</form>
    </div><!--end form-->
</div><!--end topDiv-->

<!--<div id="regLight" class="regLighter"></div>
<div id="regDark" class="regDarker"></div>-->




<div id="footerDiv">
	<?php include ('footer.php'); ?>
</div><!--end footerDiv-->

</body>
</html>