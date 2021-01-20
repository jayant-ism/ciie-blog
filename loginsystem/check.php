<?php 
session_start(); /* Starts the session */
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
header("location:login.php");
exit;
}
?>