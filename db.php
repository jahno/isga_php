<?php 
session_start();
try {
	$db = new PDO("mysql:host=localhost;dbname=isga;charset=utf8",'jahno','jahno123');
} catch (Exception $e) {
	die($e->getMessage());
}
?>
