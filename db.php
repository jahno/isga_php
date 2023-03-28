<?php 
session_start();
try {
	$db = new PDO("mysql:host=localhost;dbname=isga;charset=utf8",'jahno','jahno1');
} catch (Exception $e) {
	die($e->getMessage());
}
?>
