<?php 
include 'db.php';

if(isset($_SESSION['nom'])){
	header("Location:login.php");
}
   $co = $db->query("DELETE FROM livre where id=".$_GET['id']);
   header('Location:index.php');

?>
