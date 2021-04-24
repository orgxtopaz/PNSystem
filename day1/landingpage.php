<!--  LOG IN SESSION CONDITION STARTS HERE -->
<?php
session_start();    
include "connection.php";

if(isset($_POST['submitlogin'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM register WHERE email= '$email' && password ='$password' ";
    $data =  mysqli_query($conn, $query);
    $total =  mysqli_num_rows($data);
   
   if($total == 1){
      
       $_SESSION['email'] = $email;
          
   }
   else{

    echo "wrong";
    //    echo "<script type>document.getElementById('wrong').modal('show');</script>";

   }

}

if(isset($_SESSION['email'])){
    header("location:/pnsystem/day1/userdashboard/newlandingpage.php");
     
}

?>




<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MIZADA Shoppe</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <link rel = "icon" href = 
"https://www.edigitalagency.com.au/wp-content/uploads/Instagram-igtv-logo-circle-png-transparent.png" 
        type = "image/x-icon">



    <!-- HEADER LINKS  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="header/style.css">


    <script src="header/jquery.min.js"></script>
    <script src="header/popper.js"></script>
    <script src="header/bootstrap.min.js"></script>
    <script src="header/main.js"></script>

    <!-- END -->


    <!-- SLIDER PRODUCTS LINKS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <script>
        $(document).ready(function() {

            $(".wish-icon i").click(function() {
                $(this).toggleClass("fa-heart fa-heart-o");
            });
        });
    </script>


    <!-- END OF SLIDER PRODUCTS -->

    <!-- PRODUCT LINKS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="product/boostrap.min.css"> -->
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="product/mdb-pro.min.css">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="product/mdb.ecommerce.min.css">
    <!-- TRENDING BOOSTRAP -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>


    <!-- Ahref verification -->
    <meta name="ahrefs-site-verification" content="cd945a30a32beb9f20f22626c5f801f2063a726c6fd9af1db55ce27eafaa1e45">

</head>

<body class="is-boxed has-animations">
    <section class="ftco-section">
        <div class="wrap">
            <div class="container">





            <!-- MODAL START -->


<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="https://www.pngkit.com/png/full/412-4125178_manage-users-learning-team-vector-icon-png.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Login to Shop</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="#" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Email" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary addtocart btn-lg btn-block login-btn" name="submitlogin">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#forgotpassword" class="trigger-btn forgot" data-toggle="modal">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>    

 <!-- END MODAL -->


 <!-- Confirmation -->


<div id="confirmation" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons"><img src="https://www.clker.com/cliparts/W/W/j/v/5/0/check-mark-md.png"></i>
				</div>				
				<h4 class="modal-title">Awesome!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your request is now processed  check your email from now on.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>     


 <!--  Confirmation END FORGOT PASSWORD -->


 <!-- FORGOT PASSWORD -->
 

 <div id="forgotpassword" class="modal fade ">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="https://www.pngkit.com/png/full/412-4125178_manage-users-learning-team-vector-icon-png.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Forgot Password</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control forgotemail" name="email" placeholder="Email" required="required" >		
					</div>
				      
                    <div class="modal-footer">
                   <a href="" class="trigger-btn requestpassword" data-toggle="modal">Submit</a>
			   </div>
				</form>
			</div>
		
		</div>
	</div>
</div>   



 <!-- END FORGOT PASSWORD -->



 <!-- WRONG PASSWORD MODAL -->




<!-- Modal HTML -->
<div id="wrong" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Ooops!</h4>	
				<p>Something went wrong. File was not uploaded.</p>
				<button class="btn btn-success" data-dismiss="modal">Try Again</button>
			</div>
		</div>
	</div>
</div>     


 <!-- END WRONG PASSWORD -->



                <div class="row justify-content-between">
                    <div class="col">
                        <p class="mb-0 phone"><span class="fa fa-phone" style="color: white;"></span> <a href="#">+00
                                1234 567</a></p>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <div class="social-media">
                            <p class="mb-0 d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-envelope"><i class="sr-only">Facebook</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-credit-card"><i class="sr-only">Twitter</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-link	

                                        "><i class="sr-only">Instagram</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-truck
                                        "><i class="sr-only">Dribbble</i></span></a>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light" id="ftco-navbar" style="color:black;">
            <div class="container">
                <a class="navbar-brand" href="index.html" style="color: black;"> MIZADA <span>Shoppe</span></a>
                <form action="#" class="searchform order-sm-start order-lg-last">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control pl-3" placeholder="Search">
                        <button type="submit" placeholder="" class="form-control search"><span
                                class="fa fa-search"></span></button>
                    </div>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;">Page</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="#">Page 1</a>
                                <a class="dropdown-item" href="#">Page 2</a>
                                <a class="dropdown-item" href="#">Page 3</a>
                                <a class="dropdown-item" href="#">Page 4</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="register/register.php" class="nav-link" style="color:black;">Sign Up</a></li>
                        <li class="nav-item"><a  class="nav-link" style="color:black;" href="#myModal" class="trigger-btn" data-toggle="modal">Login</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color:black;">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </section>



    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <!-- <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div> -->


            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title mt-0">Borutoy landing page</h1>
                            <p class="hero-paragraph">Our landing page template works on all devices, so you only have to set it up once, and get beautiful results forever.</p>
                            <div class="hero-cta"><a class="button button-primary" href="#">Pre order now</a><a class="button" href="#">Get in touch</a></div>
                        </div>
                        <div class="hero-figure anime-element">
                            <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                                <rect width="528" height="396" style="fill:transparent;" />
                            </svg>
                            <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                            <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                            <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                            <div class="hero-figure-box hero-figure-box-05"></div>
                            <div class="hero-figure-box hero-figure-box-06"></div>
                            <div class="hero-figure-box hero-figure-box-07"></div>
                            <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                            <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                            <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features section">


                <div class="container">

                    <div class="row">

                        <div class="col-md-4">

                            <section id="advanced-example">
                                <!--Title-->
                                <h2 class="section-heading mb-4">

                                </h2>
                                <!-- Description -->
                                <!--Section: Live preview-->
                                <!-- Card -->
                                <div class="card" style="max-width: 22rem;">

                                    <div class="view zoom overlay">
                                        <img class="img-fluid w-100" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                                        <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
                                        <a href="#!">
                                            <div class="mask">
                                                <img class="img-fluid w-100" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                                                <div class="mask rgba-black-slight"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body text-center">

                                        <h5>Fantasy T-shirt</h5>
                                        <p class="small text-muted text-uppercase mb-2">Shirts</p>
                                        <ul class="rating">
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="far fa-star fa-sm text-primary"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <h6 class="mb-3">
                                            <span class="text-danger mr-1">$12.99</span>
                                            <span class="text-grey"><s>$36.99</s></span>
                                        </h6>
                                        <button type="button" class="btn btn-primary addtocart btn-sm mr-1 mb-2 addtocart">
                                            <i class="fas fa-shopping-cart pr-2"></i>Add to cart
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm mr-1 mb-2">
                                            <i class="fas fa-info-circle pr-2"></i>Details
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!--                     -->
                        <div class="col-md-4">

                            <section id="advanced-example">
                                <!--Title-->
                                <h2 class="section-heading mb-4">

                                </h2>
                                <!-- Description -->
                                <!--Section: Live preview-->
                                <!-- Card -->
                                <div class="card" style="max-width: 22rem;">

                                    <div class="view zoom overlay">
                                        <img class="img-fluid w-100" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                                        <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
                                        <a href="#!">
                                            <div class="mask">
                                                <img class="img-fluid w-100" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                                                <div class="mask rgba-black-slight"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body text-center">

                                        <h5>Fantasy T-shirt</h5>
                                        <p class="small text-muted text-uppercase mb-2">Shirts</p>
                                        <ul class="rating">
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="far fa-star fa-sm text-primary"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <h6 class="mb-3">
                                            <span class="text-danger mr-1">$12.99</span>
                                            <span class="text-grey"><s>$36.99</s></span>
                                        </h6>
                                        <button type="button" class="btn btn-primary addtocart btn-sm mr-1 mb-2 addtocart">
                                            <i class="fas fa-shopping-cart pr-2"></i>Add to cart
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm mr-1 mb-2">
                                            <i class="fas fa-info-circle pr-2"></i>Details
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </section>

                        </div>

                        <!--        -->
                        <div class="col-md-4">
                            <section id="advanced-example">
                                <!--Title-->
                                <h2 class="section-heading mb-4">

                                </h2>
                                <!-- Description -->
                                <!--Section: Live preview-->
                                <!-- Card -->
                                <div class="card" style="max-width: 22rem;">

                                    <div class="view zoom overlay">
                                        <img class="img-fluid w-100" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                                        <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
                                        <a href="#!">
                                            <div class="mask">
                                                <img class="img-fluid w-100" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                                                <div class="mask rgba-black-slight"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body text-center">

                                        <h5>Fantasy T-shirt</h5>
                                        <p class="small text-muted text-uppercase mb-2">Shirts</p>
                                        <ul class="rating">
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-primary"></i>
                                            </li>
                                            <li>
                                                <i class="far fa-star fa-sm text-primary"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <h6 class="mb-3">
                                            <span class="text-danger mr-1">$12.99</span>
                                            <span class="text-grey"><s>$36.99</s></span>
                                        </h6>
                                        <button type="button" class="btn btn-primary addtocart btn-sm mr-1 mb-2 addtocart ">
                                            <i class="fas fa-shopping-cart pr-2"></i>Add to cart
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm mr-1 mb-2">
                                            <i class="fas fa-info-circle pr-2"></i>Details
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>




                </div>



            </section>


            <!-- START SLIDER -->


            <div class="container-xl">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Featured <b>Products</b></h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://www.pngitem.com/pimgs/m/517-5178379_mobile-legends-heroes-png-transparent-png.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Apple iPad</h4>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://i.pinimg.com/originals/2c/c3/d4/2cc3d4cfb5e12fb28ef049f1fbb8da74.png" class="img-fluid" alt="Headphone">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Sony Headphone</h4>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://i.pinimg.com/originals/f3/ab/09/f3ab09631865a59f257919467668e3d5.png" class="img-fluid" alt="Macbook">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Macbook Air</h4>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ec970f4-1706-4915-9a93-41f3d9c8202c/dea2bzj-f7fa41a8-dc4c-4804-9259-d5d4c6fb55f8.png/v1/fill/w_1280,h_1010,strp/mobile_legends_brody_transparent_4k_png_by_divoras_dea2bzj-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD0xMDEwIiwicGF0aCI6IlwvZlwvMmVjOTcwZjQtMTcwNi00OTE1LTlhOTMtNDFmM2Q5YzgyMDJjXC9kZWEyYnpqLWY3ZmE0MWE4LWRjNGMtNDgwNC05MjU5LWQ1ZDRjNmZiNTVmOC5wbmciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.CHdJHsQ07FuGqm_8hXFaxGn9UleJxyjj2frSwDp77JM"
                                                        class="img-fluid" alt="Nikon">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Nikon DSLR</h4>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item carousel-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://i.pinimg.com/originals/2c/c3/d4/2cc3d4cfb5e12fb28ef049f1fbb8da74.png" class="img-fluid" alt="Play Station">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Sony Play Station</h4>
                                                    <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://www.pngitem.com/pimgs/m/517-5175136_transparent-mobile-legends-heroes-png-png-download.png" class="img-fluid" alt="Macbook">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Macbook Pro</h4>
                                                    <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/22ba8af1-9afe-4a42-8798-aa2a150683e0/dchw0yx-22ed664b-799c-425f-afde-414e0c681072.png/v1/fill/w_1024,h_576,strp/mobile_legends_balmond_transparent__pointguard_by_b_la_ze_dchw0yx-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD01NzYiLCJwYXRoIjoiXC9mXC8yMmJhOGFmMS05YWZlLTRhNDItODc5OC1hYTJhMTUwNjgzZTBcL2RjaHcweXgtMjJlZDY2NGItNzk5Yy00MjVmLWFmZGUtNDE0ZTBjNjgxMDcyLnBuZyIsIndpZHRoIjoiPD0xMDI0In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.lbWy7F-RMgsVSvs3oodXschQGuujhJjGypNKKL-2DwY"
                                                        class="img-fluid" alt="Speaker">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Bose Speaker</h4>
                                                    <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://cdn140.picsart.com/273215152014211.png" class="img-fluid" alt="Galaxy">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Samsung Galaxy S8</h4>
                                                    <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item carousel-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://i.pinimg.com/236x/8e/61/96/8e6196d571ee0ec57ab7b10197823bcb.jpg" class="img-fluid" alt="iPhone">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Apple iPhone</h4>
                                                    <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9cbNYdAR9MtiO3H48nYqOxT4GdtX_6r8fPA&usqp=CAU" class="img-fluid" alt="Canon">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Canon DSLR</h4>
                                                    <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZin7dYhI8iJsPZn_LXMZ9jT5FmwrdvCPt1ozuEr-RM31k_Us280hZZDvdwspXH_MFoWg&usqp=CAU" class="img-fluid" alt="Pixel">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Google Pixel</h4>
                                                    <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="https://www.pngitem.com/pimgs/m/517-5174335_mobile-legends-hero-transparent-hd-png-download.png" class="img-fluid" alt="Watch">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Apple Watch</h4>
                                                    <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="btn btn-primary addtocart">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- END SLIIDER -->

            <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">Shop with no Hasol</h2>
                            <br>
                            <p class="section-paragraph mb-0">
                                Mizada is the leading name in online shopping for fashion, carrying an ever-expanding line-up of top local and international brands tailored for consumers in the Philippines. Our selection of over 120.000 products covers every aspect of fashion, from
                                shirts to dresses, sneakers to slip-ons, sportswear to watches, and so much more.
                            </p>
                        </div>
                        <div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price"><span class="pricing-table-price-currency h2">$</span><span class="pricing-table-price-amount h1">1</span><span class="text-xs">Buy2take1</span></div>
                                            <span style="color: black;">Sulit na Sulit maka hilis og wallet!</span>
                                        </div>



                                        <ul class="pricing-table-features list-reset text-xs">
                                            <li>
                                                <span>Libreng Sabon sa iro</span>
                                            </li>
                                            <li>
                                                <span>Discount sa posporo.</span>
                                            </li>
                                            <li>
                                                <span>Libreng eyeglass sa mga buta.</span>
                                            </li>
                                            <li>
                                                <span>Libreng anthena sa mga way TV.</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="button button-primary button-shadow button-block" href="#">Pre order
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cta section">
                <div class="container">
                    <div class="cta-inner section-inner">
                        <h3 class="section-title mt-0" style="color: white;">Still not convinced on buying?</h3>
                        <div class="cta-cta">
                            <a class="button button-primary button-wide-mobile" href="#">Get in touch</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                            <img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"
                                        fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"
                                        fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z"
                                        fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2019 Solid, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>

    <script>


// $("#myModal").on




$(".forgot").on("click",function(){
    $("#myModal").modal('hide');

})


// $(".forgotbutton").on("click",function(){



//     if(forgotemail !=""){
//         $("#forgotpassword").modal('hide');
       
//     }



// })

$("#confirmation").modal('hide');

$(".requestpassword").on("click",function(){
    var forgotemail =$(".forgotemail").val();
    
    if(forgotemail!=""){
        $("#forgotpassword").modal('hide');
        
        $("#confirmation").modal('show');

    }



})


$(".addtocart").on("click",function(){
    $("#myModal").modal('show');
})



</script>
</body>

</html>

