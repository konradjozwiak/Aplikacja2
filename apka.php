<?php
ini_set( 'display_errors', 'Off' ); 
session_start();
$log2 = $_SESSION['login'];
	echo "Witaj uzytkowniku $log2"; 
?>