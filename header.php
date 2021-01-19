<?php
    //    <!-- ----------------------------------navigation 1 ------------------------------------- -->
    echo '
    <div class="nav1 p-1">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark py-1">
            <a class="navbar-brand" href="home2.php">
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
                            data-toggle="modal" data-target="#ModalSignin"><a href="login.php"  target="_blank">Login</a></button>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-light" href="aboutus.php" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-light" href="contactus.php"  target="_blank">Contact Us</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-light" href="privacy.php"  target="_blank">Privacy Policy</a>
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
    </div>';

    // <!-- ----------------------------------navigation 2 ------------------------------------- -->
    echo '
    <nav class="nav2 navbar navbar-expand-lg bg-light navbar-light p-3">
        <a class="nav-link text-center text-dark p-0 active ml-5" href="home2.php"><img src="img/header_logo/home.png">
            <h6>Home</h6>
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <ul class="navbar-nav p-0 ">

                <li class="nav-item mx-xl-5 m-0 mx-lg-4">
                    <a class="nav-link text-center text-dark p-0" href="laptop.php" target="_blank"><img
                            src="img/header_logo/Laptop.png">
                        <h6>Laptops</h6>
                    </a>
                </li>
                <li class="nav-item mx-xl-5 m-0 mx-lg-4">
                    <a class="nav-link text-center text-dark p-0" href="desktop.php" target="_blank"><img
                            src="img/header_logo/desktop.png">
                        <h6>Desktops</h6>
                    </a>
                </li>
                <li class="nav-item mx-xl-5 m-0 mx-lg-4">
                    <a class="nav-link text-center text-dark p-0" href="Accessories.php" target="_blank"><img
                            src="img/header_logo/accessories.png">
                        <h6>Accessories</h6>
                    </a>
                </li>
                <li class="nav-item mx-xl-5 m-0 mx-lg-4">
                    <a class="nav-link text-center text-dark p-0" href="gaming.php" target="_blank"><img
                            src="img/header_logo/game.png">
                        <h6>Gaming</h6>
                    </a>
                </li>
                <li class="nav-item mx-xl-5 m-0 mx-lg-4">
                    <a class="nav-link text-center text-dark p-0" href="custompc.php" target="_blank"><img
                            src="img/header_logo/custom.png">
                        <h6>Customize PC</h6>
                    </a>
                </li>
                <li class="nav-item mx-xl-5 m-0 mx-lg-4">
                    <a class="nav-link text-center text-dark p-0" href="tips.php" target="_blank"><img
                            src="img/header_logo/chat.png">
                        <h6>Tips and Tricks</h6>
                    </a>
                </li>
            </ul>
        </div>
    </nav> ';



   // <!-- ----------------------------------text-slider ------------------------------------- -->
    echo '<div class="row container-fluid m-0 p-0">
        <div class="bg-dark col-sm-2 col-12 text-center text-light pt-sm-2"><b>Top-Stories</b></div>
        <div class="col-12 col-sm-10 pt-sm-2 bg-light border border-right-0 border-dark p-0">
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><a
                    class="px-2" href="#">link1....</a><a class="px-2" href="#">link1....</a><a class="px-2"
                    href="#">link1....</a><a class="px-2" href="#">link1....</a><a class="px-2" href="#">link1....</a>
            </marquee>
        </div>
    </div>';

?>