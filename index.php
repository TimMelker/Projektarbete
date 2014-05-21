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
		<p>Många studenter lever idag med att ha det svårt att få ekonomin att gå runt. Samtidigt har många företag små arbeten som behöver utföras men tiden saknas att utföra dessa.
Det här förändras genom tjänsten StudentJobb genom att föra samman företagen med studenterna, där företagen kan få mindre jobb utförda snabbt och effektivt och studenten får en lättare vardag genom att få ekonomin att gå runt. Studenten får även en väg in till arbetsmarknaden genom nya kontakter och utförda arbeten de kan visa upp för framtida arbetsgivare.
Genom tjänsten StudentJobb kan företag snabbt få sina mindre arbeten utförda utan krav på fler arbetsuppgifter och ges fler kontakter för framtida anställda.</p>
    </div><!--end info-->
<div id="topDiv">
	
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
    <a class="aboutLightbox" id="aboutBtn" href="">Om sidan</a>
</div><!--end topDiv-->
<?php include ('footer.php'); ?>

</body>
</html>