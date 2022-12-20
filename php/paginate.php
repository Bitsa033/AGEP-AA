<?php session_start(); 
$_SESSION['l']=0;
if (isset($_GET['l']) && !empty($_GET['l'])) {
   $_SESSION['l']=$_GET['l'];

 }
?>