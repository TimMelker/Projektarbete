<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js.js"></script>
</head>
	<body> <p> <a id="aboutBtn" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Om sidan</a></p>
        <div id="light" class="lighter"><?php include 'about.php' ?><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
        <div id="fade" class="darker"></div>
	</body>
</html>