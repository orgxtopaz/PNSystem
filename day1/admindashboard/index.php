<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Register Account</title>

    <style>
        html {
            font-family: 'Nunito', sans-serif;

        }

        .container {
            box-shadow: rgba(0, 0, 0, 0.54) 0px 3px 8px;
            background-color: rgb(209, 63, 30);
            
            
        }
    </style>
</head>

<body>

    <div style="border-radius: 10px;" class="container">
   
        <hr>
        <div class="row">
        <!--Grid column-->
        <div class="col-md-6">
            <!--Title-->
            <div style="box-shadow: rgba(0, 0, 0, 0.50) 0px 3px 8px; border-radius:3px;" class="mt-1 text-center bg-white">
                <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <h3  class="secondary-heading"> &nbsp; &nbsp;
                        Already have an Account? &nbsp; <a style="font-size: 18px;" href="http://">Log in</a>
                    </h3>
                </div>          
            </div>
            <!--Section: Live preview-->
            <section class="pr-1">
                <!-- Material form register -->
                <div style="box-shadow: rgba(0, 0, 0, 0.50) 0px 3px 8px;" class="card">
              
                    <h5 class="card-header info-color white-text text-center py-4">
                        Create your account. It's free and only takes a minute.
                    </h5><br>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <strong>Sign Up:</strong><br><br>
                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="" method="POST">

                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="firstname">
                                        <label for="materialRegisterFormFirstName" >First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
                                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="lastname">
                                        <label for="materialRegisterFormLastName" >Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="md-form mt-0">
                                <input type="email" id="materialRegisterFormEmail" class="form-control" name="email">
                                <label for="materialRegisterFormEmail" class="active" name>Email</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="materialRegisterFormPassword" class="form-control"
                                    aria-describedby="materialRegisterFormPasswordHelpBlock" name="password">
                                <label for="materialRegisterFormPassword" class="active-hidden">Password</label>
                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                    atleast 8 characters
                                </small>
                            </div>


                            <!-- Sign up button -->
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                type="submit" name="submit">Sign in</button>

                            <!-- Social register -->
                            <p>or sign up with:</p>
                            <br> <a class="btn btn-primary" style="background-color: white;" href="https://gmail.com"
                                role="button">
                                <ion-icon style="color: black;" name="logo-google"></ion-icon>
                            </a>

                            <hr>

                            <!-- Terms of service -->
                            <p>By clicking
                                <em>Sign up</em> you agree to our
                                <a href="" target="_blank">terms of service</a>

                            </p>
                        </form>
                        <!-- Form -->
                 
                    </div>
                       
                </div>
                <!-- Material form register -->
                <br>
            </section>
            <!--Section: Live preview-->
            </div>
       
           
                   
        <!--Grid column-->
       
    </div>
    <!--Grid row-->
    </div>
    
    </section>
   
    </div>

<br><br>

   <footer  style="background-color:white;" class="footer-section"><br>  
        <div style="background-color:white;"  class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            
                            <div class="cta-text">
                                <h4  style="color:black;" >Find us:</h4>
                                <span>Thomas Missonnier Center, Samjung Building, Nasipit Road, talamban, 6000 Cebu City, Philippines</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4  style="color:black;" >Call us:</h4>
                                <span>09228499277</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4  style="color:black;" >Mail us:</h4>
                                <span>davelyndrex@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="https://i.ibb.co/QDy827D/ak-logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                            <strong><p>Passerelles Numeriques Philippines</p></strong>    
                                <p>Dave Lyndrex Millan</p>
                                <p>John Miguel Estopa</p>
                                <p>Eleasar Patot</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="https://facebook.com/"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="https://google.com/"><i class="fab fa-google-plus-g google-bg"></i></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 style="color: black;">Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 style="color:black;">Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action=""><a href="https://gmail.com/">
                                    <input type="text" placeholder="Email Address" style="background-color:white;"> </a>
                                     <button> <a href="https://gmail.com/"><i  class="fab fa-telegram-plane"></i></a></button>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="copyright-area">
            <div style="background-color:white;'" class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-6 text-center text-lg-left">
                        <div style="height:50px;" class="copyright-text">
                            <p>Copyright &copy; 2021, All Right Reserved <a href="https://codepen.io/anupkumar92/">Anup</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <?php 
    include "process.php";
    
    // if the form's submit button is clicked, we need to process the form
        if (isset($_POST['submit'])) {
            // get variables from the form
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
       
       
    
            //write sql query
    
            $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')";
    
            // execute the query
    
            $result = $conn->query($sql);
    
            if ($result == TRUE) {
          
                header ("location: view.php");
            }else{
                echo "Error:". $sql . "<br>". $conn->error;
            }
    
            $conn->close();
    
        }
    
    ?>

</body>

</html>