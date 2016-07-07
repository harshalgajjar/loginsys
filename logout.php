<?php
session_start();
session_unset(); //unsetting the session and deleting session variables
header('Location:login.php'); //redirecting user to login page
?>