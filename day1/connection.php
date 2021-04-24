
<?php



$servername = "localhost";
$username = "pnsystem";
$password = "pnsystem";
$dbname = "pnsystem";

$conn = new mysqli($servername, $username, $password, $dbname);
   



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>