<?php 

include "connection.php";

if(isset($_POST['submitlogin'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM register WHERE email= '$email' && password ='$password' ";
    $data =  mysqli_query($conn, $query);
    $total =  mysqli_num_rows($data);
   
   if($total == 1){
       $_SESSION['email'] = $email;
       header("location:/pnsystem/day1/userdashboard/newlandingpage.php");

   }
   else{
       echo "Login Failed";
   }

}

?>