<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete|PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<?php 
include "process.php";


if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `users` WHERE `user_id`='$user_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "";
       
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
    header("location: admin.php");
}

?>


</body>
</html>

