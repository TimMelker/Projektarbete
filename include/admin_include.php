<?php 
session_start();
include($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");

function getAds(){
	include ($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");
	$sql = "SELECT advert_id FROM ads ORDER BY advert_id";
	$query = mysqli_query($connect, $sql);

	while ($records = mysqli_fetch_array($query)) {
		echo '<option value="' . $records['advert_id'] . '">' . 'Annons ID: ' . $records['advert_id'] . '</option>';
	}
}

function getUsersStudent()
{
	include ($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");
	$sql = "SELECT student_id, student_name, role FROM student ORDER BY student_id";
	$query = mysqli_query($connect, $sql);

	while ($records = mysqli_fetch_array($query)){
		echo '<option value"' . $records[0] . '">' . 'Student ID: ' . $records[0] . ' | Namn: ' . $records[1] . ' | Role: ' . $records[2] . '</option>';
	}
}

function getUsersBusiness()
{
	include ($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");
	$sql = "SELECT business_id, business_name FROM business ORDER BY business_id";
	$query = mysqli_query($connect, $sql);

	while ($records = mysqli_fetch_array($query)){
		echo '<option value="' . $records[0] . '">' . 'Företags ID: ' . $records[0] . ' | Företagsnamn: ' . $records['business_name'] . '</option>';
	}
}

if(isset($_POST['submit_ad_delete'])){
	deleteAd();
}
if(isset($_POST['submit_user_delete'])){
	deleteUserStudent();
}
if(isset($_POST['submit_business_delete'])){
	deleteUserBusiness();
}

function deleteAd()
{
	include ($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");
	if(isset($_POST['dropdown_ads'])){
		$item = $_POST['dropdown_ads'];
		$sql = "DELETE FROM ads WHERE advert_id = '$item' ";
		$query = mysqli_query($connect, $sql);
	}
}

function deleteUserStudent()
{
	include ($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");
	if(isset($_POST['dropdown_users'])){
		$itemSelect = explode(" ",$_POST['dropdown_users']);
		$item = $itemSelect[2];
		$sql = "DELETE FROM student WHERE student_id = '$item' ";
		$query = mysqli_query($connect, $sql);
	}
}

function deleteUserBusiness()
{
	include ($_SERVER['DOCUMENT_ROOT'] . "github/projektarbete/include/models/db_connect.php");	
	if(isset($_POST['dropdown_business'])){
		$itemSelect = explode(" ",$_POST['dropdown_business']);
		$item = $itemSelect[0];
		$sql = "DELETE FROM ads WHERE business_id = '$item' ";
		if(mysqli_query($connect, $sql)){
			$sql2 = "DELETE FROM business WHERE business_id = $item ";
			$query = mysqli_query($connect, $sql2);
		}


	}
}

?>