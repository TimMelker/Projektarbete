<?php include ('adList.php'); ?>

<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<meta charset="utf-8" />
		</head>
		<body>
			<div id="adsList">
			<h1 style="margin-top: 20px;">Annonser</h1>
				<?php 

				foreach (fetch_ads() as $ad){
					?><div>
					<p id="mailP">
						<a href="advert.php?id=<?php echo $ad['id'] ?>"><?php echo fetch_ad_company($ad['business_id']); ?>: <?php echo $ad['title'] ?></a>
					</p>
					</div>
					<?php 
						}
					?>
			</div>
		</body>
	</html>