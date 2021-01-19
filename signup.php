<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	include 'utils/_dbconnect.php';
	$username=$_POST["username"];
		$password=$_POST["password"];
			$confirm_password=$_POST["confirm_password"];
			$exists=false;
			if(($password == $confirm_password) && $exists==false){
				$sql= "INSERT INTO `signup` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
				$result = mysqli_query($conn,$sql);
				if($result){
					$showAlert=true;
				}
			}
			else{
				$showError = "Passwords do not match";
			}
}
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaptopArena | Desktop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font apis -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/category.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
		
		
		<!----------------------Sign up link----------------->
		
			<link rel ="stylesheet" href = "C:\Users\Fenny\Desktop\LaptopArena 2\LaptopArena\css\signup.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

		
</head>

<body>
    <!-- ----------------------------------navigation 1 ------------------------------------- -->
    	<?php
		if($showAlert){
		echo '
		<div class="alert alert-success" role="alert"><strong>SUCCESSFULL!</strong> Your account is created 
		successfully ,you can login now! </div>';


		}if($showError){
		echo '
		<div class="alert alert-danger" role="alert">
		  <strong>ERROR!</strong> '.$showError.'</div>';
		}
	?>
	<div class="nav1 p-1">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark py-1">
            <a class="navbar-brand" href="#">
                <img src="img/logos/logo1.png" width="30" height="30" class="d-inline-block align-top" alt=""
                    loading="lazy">
                LaptopArena
            </a>
            <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-1">
                        <button type="button" class="nav-link bg-white text-dark font-weight-bold p-1 mt-1 rounded px-2"
                            data-toggle="modal" data-target="#ModalSignin">Login</button>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-light" href="#">About Us</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-light" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-light" href="#">Privacy Policy</a>
                    </li>

                    <li class="nav-item py-2">
                        <a class="mx-1" href="#"><img src="img/header_logo/facebook.png" alt="facebook"></a>
                        <a class="mx-1" href="#"><img src="img/header_logo/instagram-sketched.png" alt="instagram"></a>
                        <a class="mx-1" href="#"><img src="img/header_logo/twitter.png" alt="twitter"></a>
                        <a class="mx-1" href="#"><img src="img/header_logo/whatsapp (1).png" alt="Whatsapp"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

      <!-- ----------------------------------navigation 2 ------------------------------------- -->
  <nav class="nav2 navbar navbar-expand-lg bg-light navbar-light p-3">
    <a class="nav-link text-center text-dark p-0 active ml-5" href="#"><img src="img/header_logo/home.png">
      <h6>Home</h6>
    </a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
      <ul class="navbar-nav p-0 ">

        <li class="nav-item mx-xl-5 m-0 mx-lg-4">
          <a class="nav-link text-center text-dark p-0" href="laptop.html" target="_blank"><img src="img/header_logo/Laptop.png">
            <h6>Laptops</h6>
          </a>
        </li>
        <li class="nav-item mx-xl-5 m-0 mx-lg-4">
          <a class="nav-link text-center text-dark p-0" href="desktop.html"  target="_blank"><img src="img/header_logo/desktop.png">
            <h6>Desktops</h6>
          </a>
        </li>
        <li class="nav-item mx-xl-5 m-0 mx-lg-4">
          <a class="nav-link text-center text-dark p-0" href="Accessories.html"  target="_blank"><img src="img/header_logo/accessories.png">
            <h6>Accessories</h6>
          </a>
        </li>
        <li class="nav-item mx-xl-5 m-0 mx-lg-4">
          <a class="nav-link text-center text-dark p-0" href="gaming.html"  target="_blank"><img src="img/header_logo/game.png">
            <h6>Gaming</h6>
          </a>
        </li>
        <li class="nav-item mx-xl-5 m-0 mx-lg-4">
          <a class="nav-link text-center text-dark p-0" href="custompc.html"  target="_blank"><img src="img/header_logo/custom.png">
            <h6>Customize PC</h6>
          </a>
        </li>
        <li class="nav-item mx-xl-5 m-0 mx-lg-4">
          <a class="nav-link text-center text-dark p-0" href="tips.html"  target="_blank"><img src="img/header_logo/chat.png">
            <h6>Tips and Tricks</h6>
          </a>
        </li>
      </ul>
    </div>
  </nav>



    <!-- ----------------------------------text-slider ------------------------------------- -->
    <div class="row container-fluid m-0 p-0">
        <div class="bg-dark col-sm-2 col-12 text-center text-light pt-sm-2"><b>Top-Stories</b></div>
        <div class="col-12 col-sm-10 pt-sm-2 bg-light border border-right-0 border-dark p-0">
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><a
                    class="px-2" href="#">link1....</a><a class="px-2" href="#">link1....</a><a class="px-2"
                    href="#">link1....</a><a class="px-2" href="#">link1....</a><a class="px-2" href="#">link1....</a>
            </marquee>
        </div>
    </div>


<!--------------signup form--------->
<div class = "container">
<div class="signup-form">
    <form action="/LaptopArena/signup.php" method="post">

	
		<h2 class="text-center">Create an Account</h2>
		<p class="text-center" class="hint-text">Sign up with your social media account or email address</p>
		<div class="social-btn text-center">
			<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
			<a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
			<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
		</div>
		<div class="or-seperator" ><b><h4 class="text-center">OR</b></h4></div>
        <div class="form-group ">
		
        	<input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
        
		</div>

		<div class="form-group ">
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>  
        <div class="form-group ">
            <button type="submit" class="btn btn-primary btn-lg btn-block signup-btn">Sign Up</button>
        </div>
    </form>
    <div class="text-center">Already have an account? <a href="/LaptopArena/login.php">Login here</a></div>
</div>
</div>
</body>
</html>
    <!-- footer -->
    <div class="footerSection bg-dark text-light">
        <div class="container">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg"
                            alt="" width="24" height="24">
                        <small class="d-block mb-3 text-muted">© 2017-2018</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Help</h5>
                        <ul class="list-unstyled text-small  text-light">
                            <li><a class="text-muted" href="#">Contact us</a></li>
                            <li><a class="text-muted" href="#">About Us</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Category</h5>
                        <ul class="list-unstyled text-small  text-light">
                            <li><a class="text-muted" href="#">Laptop</a></li>
                            <li><a class="text-muted" href="#">Accessiores</a></li>
                            <li><a class="text-muted" href="#">Desktop</a></li>
                            <li><a class="text-muted" href="#">Customize PC </a></li>
                            <li><a class="text-muted" href="#">Tips and Tricks</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Social Media</h5>
                        <ul class="list-unstyled text-small  text-light ">
                            <li><a class="text-muted" href="#">Facebook</a></li>
                            <li><a class="text-muted" href="#">Instagram</a></li>
                            <li><a class="text-muted" href="#">Twitter</a></li>
                            <li><a class="text-muted" href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>