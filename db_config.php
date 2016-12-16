<?php 
try{
	$db = new PDO('mysql:host=localhost;dbname=web_develop;charset=utf8mb4', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $exception){
	echo $exception->getMessage();
	die();
}
$_GET["nid"] = 1;