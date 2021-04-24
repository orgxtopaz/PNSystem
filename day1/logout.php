<!-- ENDING THE SESSION EMAIL LOGOUT -->
<?php 

session_start();
unset($_SESSION["email"]);

header('location:/pnsystem/day1/landingpage.php');

?>