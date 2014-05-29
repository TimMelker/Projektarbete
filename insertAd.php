
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	</head>
	<body>
		<h1 style="float: left;">Titel</h1>
		<form accept-charset="utf-8" id="createAd" method="POST" action="include/insertAd_include.php">
			<input name="ad_title" id="ad_title" type="text" placeholder="Titel" required /><br>
		</form>
		</br>
		<h1 style="float: left;">Annons text</h1>
		<textarea style="white-space: pre;" cols="50" rows="30"  name="ad_text" form="createAd" placeholder="Skriv in din annonstext här!" required ></textarea>
		<input form="createAd" id="insertAd_btn" type="submit" name="insertAd" value="Lägg in annons"/>
	</body>
</html>