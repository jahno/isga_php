<?php 
include 'db.php';

if(isset($_POST['env'])){

$nom=$_POST['nom'];
$description = $_POST['description'];
   $co = $db->query("UPDATE livre SET nom='$nom',description='$description' where id=".$_POST['id']);
   header('Location:index.php');
}

 ?>