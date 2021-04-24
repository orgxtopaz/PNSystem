

<!-- IF USER DIDNT LOG IN SUCCESSFULLY THEN CONDITION BELOW IS TRUE -->
<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:/pnsystem/day1/landingpage.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- HEADER LINKS  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- ICONS FAFA LINK -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- END OF FAFA -->

    <link rel="stylesheet" href="../header/style.css">
    <link rel="stylesheet" href="./usercss.css">


    <script src="../header/jquery.min.js"></script>
    <script src="../header/popper.js"></script>
    <script src="../header/bootstrap.min.js"></script>
    <script src="../header/main.js"></script>


    <!-- END -->


    <!-- PRODUCT LINK WITH FUNCTIONS -->

    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../product/boostrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../product/mdb-pro.min.css">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="../product/mdb.ecommerce.min.css">
    <!-- TRENDING BOOSTRAP -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>


    <!-- END OF PRODUCTS -->

    <!-- LINK USER DASHBOARD -->

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
    <link rel="stylesheet" href="usercss.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- END USER DASHBOARD -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style=" background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    
    display: flex;
    flex-direction: column;
    min-height: 100vh;">
    <!--HEADER  -->

    <section class="ftco-section">
        <div class="wrap">
            <div class="container">
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
                <a class="navbar-brand" href="#" style="color: black;"> MIZADA <span>Shoppe</span></a>
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
                        <li class="nav-item active"><a href="/pnsystem/day1/userdashboard/newlandingpage.php" class="nav-link">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;">Page</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="#">Page 1</a>
                                <a class="dropdown-item" href="#">Page 2</a>
                                <a class="dropdown-item" href="#">Page 3</a>
                                <a class="dropdown-item" href="#">Page 4</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color:black;">Promo Sells</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color:black;">Offers</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color:black;">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </section>


    <!-- END HEADER -->





    <!-- DASHBOARDDDDDDDDDDDDDD -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container"> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
            <a class="navbar-brand" href="#">
                <div class="d-flex">

                    <div class="ms-3 d-flex flex-column">


                        <img class="rounded-circle z-depth-1" alt="" src="https://s3-us-west-2.amazonaws.com/paradigm-media-library/music_artists/alan-walker-20191219.jpg" data-holder-rendered="true">


                    </div>
                </div>
            </a>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Categories <span
                                class="fa fa-list-alt px-1"></span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Exclusive</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Collections</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Blogs</a> </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="cart bg-purple"> <span class="fa fa-shopping-cart text-white"></span> </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <span class="fa fa-user pe-2"></span> Hello Jhon</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/pnsystem/day1/logout.php"> <span class="fa fa-user pe-2"></span> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-3 my-lg-0 my-md-1">
                <div id="sidebar" class="bg-purple">
                    <div class="h4 text-white">Account</div>
                    <ul>
                        <li class="active">
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-box pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">History Transaction</div>
                                    <div class="link-desc">History of the Products buy</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-box-open pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link myorders">My Orders</div>
                                    <div class="link-desc">Products currently in process</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="far fa-address-book pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">Address Book</div>
                                    <div class="link-desc">View & Manage Addresses</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="far fa-user pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">My Profile</div>
                                    <div class="link-desc">Change your profile details & password</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-headset pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">Help & Support</div>
                                    <div class="link-desc">Contact Us for help and support</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 my-lg-0 my-1">
                <div id="main-content" class="bg-white border">
                    <div class="d-flex flex-column">
                        <div class="h5">Hello Jhon,</div>
                        <div>Logged in as: someone@gmail.com</div>
                    </div>
                    <div class="d-flex my-4 flex-wrap">
                        <div class="box me-4 my-1 bg-light"> <img src="https://www.freepnglogos.com/uploads/box-png/cardboard-box-brown-vector-graphic-pixabay-2.png" alt="">
                            <div class="d-flex align-items-center mt-2">
                                <div class="tag">Orders placed</div>
                                <div class="ms-auto number">10</div>
                            </div>
                        </div>
                        <div class="box me-4 my-1 bg-light"> <img src="https://www.freepnglogos.com/uploads/shopping-cart-png/shopping-cart-campus-recreation-university-nebraska-lincoln-30.png" alt="">
                            <div class="d-flex align-items-center mt-2">
                                <div class="tag">Items in Cart</div>
                                <div class="ms-auto number">10</div>
                            </div>
                        </div>
                        <div class="box me-4 my-1 bg-light"> <img src="https://www.freepnglogos.com/uploads/love-png/love-png-heart-symbol-wikipedia-11.png" alt="">
                            <div class="d-flex align-items-center mt-2">
                                <div class="tag">Wishlist</div>
                                <div class="ms-auto number">10</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-uppercase">Shop now!</div>

                    <!-- PRODUCTS INSERT HERE -->

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
                                                <span class="text-danger mr-1">$10.99</span>
                                                <span class="text-grey"><s>$30.99</s></span>
                                            </h6>
                                            <button type="button" class="orderButton" class="btn btn-primary btn-sm mr-1 mb-2">
                                                <i class="fas fa-shopping-cart pr-2"></i>Buy Now
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

                            <div class="modal" id="productDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form method="POST" class="form-group" id="form">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
                                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <input id="productName" name="productName" style="visibility:hidden;" value="">
                                                    <input id="price" name="price" style="visibility:hidden;" value="">
                                                    <h1 class="head1"></h1>


                                                </div>
                                                <div class="dropdown">
                                                    <label>
                                                        Available Sizes
                                                    </label>
                                                    <select class="custom-select" id="sizes">

                                                        <option value="Small" selected>Small</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Large">Large</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XL">XXL</option>
                                                    </select>
                                                    <input id="size" name='size' style="visibility:hidden;" value="">
                                                </div>
                                                <div class="dropdown">
                                                    <label>
                                                        Available Colors
                                                    </label>
                                                    <select class="custom-select" id="colors">
                                                        <option selected value="Black">Black</option>
                                                        <option value="White">White</option>
                                                        <option value="Yellow">Yellow</option>
                                                        <option value="Pink">Pink</option>
                                                        <option value="Red">Red</option>
                                                        <option value="Orange">Orange</option>
                                                        <option value="Green">Green</option>
                                                    </select>
                                                    <input id="color" name="color" style="visibility:hidden;" value="">
                                                </div>
                                                <br>
                                                <div class="container">
                                                    <label>Quantity</label>
                                                    <input type="number" name="quantity" class="quantity"><br>
                                                    <label>Total:</label>
                                                    <input id=total type="text" name="total" style="visibility:hidden;" value="">
                                                    <span class="totalAmount" name="totalAmount"><Span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="cancelOrder" type="button" class="close"
                                                    class="btn btn-primary">Cancel Order</button>
                                                <button type="submit" id="addToCart" name="submit2"
                                                    class="addToCart">Add to Cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

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
                                            <img class="img-fluid w-100"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                                                alt="Sample">
                                            <h4 class="mb-0"><span
                                                    class="badge badge-primary badge-pill badge-news">Sale</span></h4>
                                                    <a href="#!">
                                                        <div class="mask">
                                                            <img class="img-fluid w-100" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                                                            <div class="mask rgba-black-slight"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card-body text-center">

                                                    <h5>PN T-shirt</h5>
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
                                                        <span class="text-danger mr-1">$2.99</span>
                                                        <span class="text-grey"><s>$25.99</s></span>
                                                    </h6>
                                                    <button type="button" class="orderButton" class="btn btn-primary btn-sm mr-1 mb-2">
                                                <i class="fas fa-shopping-cart pr-2"></i>Buy Now
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

                                    <!-- 333 SHIRTSSS -->


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

                                                    <h5>Dota 2 T-shirt</h5>
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
                                                        <span class="text-danger mr-1">$2.99</span>
                                                        <span class="text-grey"><s>$25.99</s></span>
                                                    </h6>
                                                    <button type="button" class="orderButton" class="btn btn-primary btn-sm mr-1 mb-2">
                                                <i class="fas fa-shopping-cart pr-2"></i>Buy Now
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


                                    <!-- END -->



                                    </section>

                                </div>
                            </div>





                            <!-- ENDING OF PRODUCTS -->




                        </div>




                    </div>
                </div>




                <!-- END DASHBOARDDDDDDDDDDDDDD -->





                <script>
                    // $(document).ready(function() {
                    //     $(".myorders").on("click", function() {

                    //     })
                    // })
                </script>


                <!-- PRODUCT SCRIPTS -->



                <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script> -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

                <!-- Latest compiled JavaScript -->
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script>
                    $(document).ready(function() {


                        // console.log($('.orderButton').parents().filter(".mask").html());
                        $(".orderButton").click(function() {
                            $('#productDetails').modal('show');
                            var productName = $(this).siblings('h5').html();
                            
                            
                            console.log(productName);
                            var price = $(this).siblings('.mb-3');
                            price = price.clone();
                            console.log(price)
                            var price2 = price.children('.text-danger').html();
                            $('#price').val(price2);
                            price = price.children('.text-danger').html().substr(1);
                            var product = $(this).siblings().not('button');
                            product = product.clone();
                            var img = $(this).parent();
                            img = img.siblings('.view').children('img');
                            img = img.clone();
                            img = img.css({
                                'border-radius': '5%'
                            });
                            $('#productName').val(productName);
                            $('.head1').prepend(img);
                            $(".head1").append(product);

                            $('#color').val($('#colors').val());
                            $('#size').val($('#sizes').val());
                            $('#sizes').change(() => {
                                $('#size').val($('#sizes').val());
                            })
                            $('#sizes').change(() => {
                                $('#color').val($('#colors').val());
                            })
                            $('.quantity').keyup(() => {
                                var quantity = $('.quantity').val();
                                $('.totalAmount').html('$' + Math.round(price * quantity * 100.00) /
                                    100.00);
                                $('#total').val('$' + Math.round(price * quantity * 100.00) / 100.00);
                            });
                            $('.addToCart').click(() => {
                                console.log("added to carts");
                                $('.addToCart').html("Added to Cart");

                            })
                            $("#cancelOrder").click(() => {
                                $('#productDetails').modal('hide');
                                $('.head1').html('');


                            })

                        })


                    });
                </script>
<?php
include_once('connection.php');




if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit2'])){
    $productName=$_POST['productName'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $size=$_POST['size'];
    $color=$_POST['color'];
    $totalAmount=$_POST['total'];

  if($productName!="" && $price!="" && $quantity!="" && $size!="" && $color!="" && $totalAmount!=""){
    $sql = "insert into cart(ProductName,Price, Size, Color, Quantity, TotalAmount) VALUES('".$productName."', '".$price."', '".$size."', '".$color."', '".$quantity."', '".$totalAmount."')";
  
  if ($conn->query($sql) === TRUE) {
    // header( 'Location: display.html' ) ;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  }
  
}
?>
                    <script>
                        //prevent form to submit on page reload
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>


                    <!-- END OF PRODUCT SCRIPTSSSSSSSSSS -->



</body>




</html>