<!DOCTYPE html>
<html>

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

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="backup.css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    
	<script type="text/javascript" src="script/bootbox.min.js"></script>
    <script type="text/javascript" src="script/deleteRecords.js"></script>
	<title>Admin Side</title>

</head>

<body>

<?php 
include "process.php";
//write the query to get data from users table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>
	
<div class="container-fluid px-2 px-md-4 py-5 mx-auto">
<h2>ADMIN</h2>
	</div>
        <div class="card card0 border-0">
		<div class="container-fluid py-5">
            <div class="row d-flex">
                <div class="col-lg-5">
                    <div class="card1 pb-5">
                        <div class="row">
                            <h5 style="margin-left: -5px;" class="logo"><u>M I Z A D A &nbsp; PH</u></h5>
                        </div>
                        <div class="row justify-content-center mt-4 mb-5">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol style="margin-left:25px;" class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" id="li1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" id="li2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" id="li3"
                                        class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3" id="li4"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4" id="li5"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item card border-0 card-0">
                                        <div class="text-center"> <img src="dave1.png" class="img-fluid profile-pic">
                                        </div>
                                        <h6 class="font-weight-bold mt-5">Dave Lyndrex Millan</h6> <small
                                            class="mb-2">Backend Developer</small>
                                        <hr width="50%">
                                        <p class="content mt-2 mb-0">A Passerelles Numeriques Scholar, currently
                                            studying at
                                            University of San Carlos Talamban Campus Cebu City. He has a lot of background 
                                            about the functionalities of a web. He is involved in the most famous social 
                                            media currently which is the facebook. Because of his experi, he is one of the backend
                                            developer propect in this year.</p>
                                    </div>
                                    <div class="carousel-item card border-0 card-0">
                                        <div class="text-center"> <img src="migz1.png" class="img-fluid profile-pic">
                                        </div>
                                        <h6 class="font-weight-bold mt-5">John Miguel Estopa</h6> <small
                                            class="mb-2">UI/UX Designer</small>
                                        <hr width="50%">
                                        <p class="content mt-2 mb-0">A Passerelles Numeriques scholar, currently studying 
											at University of San Carlos Talamban Campus Cebu City,Philippines as a graduating
											student. He is very talented in terms of graphic designing. He is also involve in designing 
											the landing page of many porn sits. Because of his experiences, he is also one of the 
											frontend developer prospect in this year.
										</p>
                                    </div>
                                    <div class="carousel-item active card border-0 card-0">
                                        <div class="text-center"> <img src="elsa1.png" class="img-fluid profile-pic">
                                        </div>
                                        <h6 class="font-weight-bold mt-5">Eleasar Patot</h6> <small
                                            class="mb-2">Manager</small>
                                        <hr width="50%">
                                        <p class="content mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.<br>Duis
                                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                    <div class="carousel-item card border-0 card-0">
                                        <div class="text-center"> <img src="https://i.imgur.com/ndQx2Rg.jpg"
                                                class="img-fluid profile-pic"> </div>
                                        <h6 class="font-weight-bold mt-5">Jay ar Ermino</h6> <small
                                            class="mb-2">Mentor</small>
                                        <hr width="50%">
                                        <p class="content mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.<br>Duis
                                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                    <div class="carousel-item card border-0 card-0">
                                        <div class="text-center"> <img src="https://i.imgur.com/gazoShk.jpg"
                                                class="img-fluid profile-pic"> </div>
                                        <h6 class="font-weight-bold mt-5">Kerwien Bengil</h6> <small
                                            class="mb-2">Master</small>
                                        <hr width="50%">
                                        <p class="content mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.<br>Duis
                                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-3 text-center justify-content-center mb-0 social">
                            <div class="row-sm-6">
                                <a style="color: white;" href="https://www.facebook.com/dave.millan.92"> <span
                                        class="fa fa-facebook-square mx-2"></span></a>
                                <a style="color: white;" href="https://www.twitter.com/"> <span
                                        class="fa fa-twitter mx-2"></span></a>
                                <a style="color: white;" href="https://www.instagram.com/da.ve_dave.lyndrex/"><span
                                        class="fa fa-instagram mx-2"></span> </a>
                                <a style="color: white;" href="https://www.youtube.com/results?search_query=zigm"> <span
                                        class="fa fa-youtube-play mx-2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
				<div class="container">
		<h3>Account Registered</h3>
		<table style="font-size:13px;" class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
        






<?php
		if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>
				<tr>
					<td>
						<?php echo $row['user_id']; ?>
					</td>
					<td>
						<?php echo $row['firstname']; ?>
					</td>
					<td>
						<?php echo $row['lastname']; ?>
					</td>
					<td>
						<?php echo $row['email']; ?>
					</td>
					<td><a
							class="btn btn-danger btn-sm" name="delete" href="delete.php?id=<?php echo $row['user_id']; ?>">Delete</a></td>
				</tr>


				<?php		}
			}
		?>

			</tbody>
		</table>
	</div>
    </div>
        </div>
    </div>
	</div>
	<div class="footer">
	<div class="col-xl-12 col-lg-12 text-center text-lg-left"><hr>
                        <div style="height:40px;" class="copyright-text">
                            <p>Copyright &copy; 2021, All Right Reserved <a href="https://codepen.io/anupkumar92/">Anup</a></p>
                        </div>
                    </div>
	
</body>

</html>