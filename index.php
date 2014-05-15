<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<div id="topDiv">
	<div id="info">
		<h1>Information om oss</h1>
		<p>Information om sidan skrivs här</p>
    </div>
    <div id="form">
	    <form id="" name"" action="" method="" class="">
	    	<h2>Inlogg</h2>
	    	<label>
	    		<span>Användarnamn: </span>
	    		<input id="_userName" type="text" name="userName" placeholder="Ditt användarnamn" /><br>
	    	</label>

	    	<label id="passwordLabel">	    		
	    		<span id="passSpan">Lösenord: </span>
	    		<input id="password" type="text" name="passwor" placeholder="Ditt lösenord" /><br>
	    	</label>

	    	<label id="btnLabel">
	    		<!--<input type="button" class="button" value="Registrera" id="registerBtn" name="registerBtn"/>-->
	    		<a href="http://www.google.se">Registrera</a>
	    	</label>
	    	<label>
	    		<!--<input type="button" class="button" value="Logga In" id="loginBtn" name="loginBtn"/>-->
	    		<a href="http://www.google.se" id="loginBtn">Logga In</a>

	    	</label>
		</form>
    </div>
</div>

<div id="footerDiv">
	<?php include ('footer.php'); ?>
</div>

</body>
</html>