<?php
if(!isset($_SESSION['user_login_status'])){
	header("Location: index.php");
}

function fetch_ads(){
	include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");

	$sql = ('SELECT advert_id AS id, title, description, business_id FROM ads');

	$result = mysqli_query($connect, $sql);
	 
	$ads = array();

	while (($row = mysqli_fetch_assoc($result)) != false){
	 	$ads[] = $row;
	}

	 return $ads;
}

//fetches ad information for the given ad.
function fetch_ad_info($id){
	include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");
	$aid = (int)$id;

	$sql = "	SELECT ads.advert_id AS id, 
						business.business_name, 
						ads.title,
						ads.description
				FROM ads 
				INNER JOIN business 
				ON ads.business_id=business.business_id AND advert_id = {$aid}";

			$result = mysqli_query($connect, $sql);

			return mysqli_fetch_assoc($result);
}

function fetch_ad_company($id){
	include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");
	$aid = (int)$id;

	$sql = "SELECT business_name FROM business WHERE business_id = $aid";

	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row['business_name'];

}

?>

