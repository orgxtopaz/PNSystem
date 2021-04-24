<?php 


    include "../connection.php";
    
    // if the form's submit button is clicked, we need to process the form
        if (isset($_POST['submit'])) {
            // get variables from the form
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $image =$_POST['image'];
       
            //write sql query
    
            $sql = "INSERT INTO `register`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')";
    
            // execute the query
    
            $result = $conn->query($sql);
    
            if ($result == TRUE) {
                header('Location: /pnsystem/day1/landingpage.php');

                
                   
            }else{
                echo "Error:". $sql . "<br>". $conn->error;
            }
    
            $conn->close();
    
        }
    
    ?>