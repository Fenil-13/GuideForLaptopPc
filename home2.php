<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaptopArena | Home</title>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</head>

<body>
    <?php
     include 'header.php';
     require 'utils/_dbconnect.php';
    ?>



  <!-- Main Slider -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <?php
        $sql = "SELECT * FROM deal_of_day WHERE slider_show='true'";
        $result = $conn->query($sql);
        $count=0;
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $product_id=$row["product_id"];
              if($count==0){
                echo '<div class="carousel-item active" id="'.$row["product_id"].'">
                <a href="#"><img src="img/Slider_img/'.$row["Img_Link"].'" class="d-block w-100" alt="..."></a>
              </div>';
            }else{
                echo '<div class="carousel-item"   id="'.$row["product_id"].'">
                <a href="#"><img src="img/Slider_img/'.$row["Img_Link"].'" class="d-block w-100" alt="..."></a>
              </div>';
            }
            $count=$count+1;
          }
        }
      ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Main Three Category section -->
  <div class="container-fluid mt-3 mb-4">
    <div class="main-category">
      <div class="row">
        <div class="col-sm-1 col-md-4">
          <div class="card m-3" id="cat1">
            <a href="laptop.php" target="_blank"><img src="img/cat1.png" class="card-img-top" alt="..."></a>
          </div>
        </div>
        <div class="col-sm-1 col-md-4">
          <div class="card m-3" id="cat2">
            <a href="gaming.php" target="_blank"><img src="img/cat2.png" class="card-img-top" alt="..."></a>
          </div>
        </div>
        <div class="col-sm-1 col-md-4">
          <div class="card m-3" id="cat3">
            <a href="accessories.php" target="_blank"><img src="img/cat3.png" class="card-img-top" alt="..."></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Laptop Category section -->
  <div class="laptopCategory">
    <div class="row mr-4">
      <div class="col-sm-12 col-md-9 itemPart">
        <div class="sliderItem ml-3 mt-5">
          <div class="row">
          <?php
          
            $sql = "SELECT 	product_id FROM laptop_category WHERE trending_status='true'";
            $result = $conn->query($sql);
           
            if ($result->num_rows > 0) {
              // output data of each row
              $count_laptop=0;
              while(($row = $result->fetch_assoc()) and $count_laptop < 3) {
                $product_id =$row["product_id"] ;

                $sql_laptop = "SELECT * FROM product WHERE Product_id ='$product_id'";
                $result_laptop = $conn->query($sql_laptop);

                if ($result_laptop->num_rows > 0) {
                  
                    while(($row_laptop = $result_laptop->fetch_assoc() )) {
                        echo '<div class="col sm-12 col-md-4">
                        <div class="card itemHomeCate homeItem" id="'.$row_laptop['Product_id'].'">
                          <img src="img/items/'.$row_laptop['Img_Link'].'" class="card-img-top" alt="..." height="350px">
                          <div class="card-body ">
                            <b>
                              <p class="card-text bold">';
                              $string = $row_laptop['Name'];
                              if (strlen($string) > 25) {
  
                                  // truncate string
                                  $stringCut = substr($string, 0, 25);
                                  $endPoint = strrpos($stringCut, ' ');
  
                                  //if the string doesn't contain any space then it will cut without word basis.
                                  $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                  $string .= '...  </a>';
                              }
                              echo $string;
                              // .$row_laptop['Name'].
                              echo '</p>
                            </b>
                            <p class="card-text">';
                            $string = $row_laptop['Description'];
                            if (strlen($string) > 70) {

                                // truncate string
                                $stringCut = substr($string, 0, 70);
                                $endPoint = strrpos($stringCut, ' ');

                                //if the string doesn't contain any space then it will cut without word basis.
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $string .= '... <b>Read More</b></a>';
                            }
                            echo $string;
                            // .$row_laptop['Description'].
                            
                            echo '</p>
                            <b>
                              <p class="card-text bold">'.$row_laptop['Price'].'</p>
                            </b>
                          </div>
                        </div>
                      </div>';
                       
                    }
                }
                $count_laptop++;
              }
            }
          
          ?>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3 cardLaptopMain">
        <div class="cardLaptop">
          <div class="catImg">
            <img src="img/CategoryLogo/laptop.svg" alt="" srcset="" height="80px" width="100px">
          </div>
          <div class="HeadingTextCard">
            <h1 id="homeLaptop" style="color: white;">Laptop</h1>
          </div>
          <div class="listCard">
            <ul>

              <li>
                <h5 class="card-title cattopicLaptop">&nbsp; Student Laptop</h5>
              </li>

              <li>
                <h5 class="card-title cattopicLaptop">&nbsp; Travel</h5>
              </li>

              <li>
                <h5 class="card-title cattopicLaptop">&nbsp; Multitasking</h5>
              </li>

              <li>
                <h5 class="card-title cattopicLaptop">&nbsp; Gaming</h5>
              </li>

              <li>
                <h5 class="card-title cattopicLaptop">&nbsp; Content Creation</h5>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Deal of Day Section  -->
  <?php
    $sql = "SELECT product_id FROM deal_of_day WHERE slider_show='false'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $product_id=$row["product_id"];
    
    
        $sql_laptop = "SELECT * FROM product WHERE Product_id ='$product_id'";
        $result_laptop = $conn->query($sql_laptop);
    
        if ($result_laptop->num_rows > 0) {
            $count=0;
            while(($row_laptop = $result_laptop->fetch_assoc()) and $count<1) {
                echo ' <div class="dealOfDay">
                <div class="headText">
                  <h2>DEAL OF DAY</h2>
                </div>
                <div class="subText">'.$row_laptop['Name'].'
                </div>
            
                <div class="itemOfDay">
                  <img src="img/items/'.$row_laptop['Img_Link'].'" alt="" srcset="" width="400px" height="300px">
                </div>
                <div class="shopDealItem"  id="'.$row_laptop['Product_id'].'" >
                  <h2>ShopNow</h2>
                </div>
              </div>';
              $count = $count+1;
            }
         }
    
      }
    }
  ?>


  <!-- Accessiores Category section -->
  <div class="AccessoriesCategory">
    <div class="row mr-4">

      <div class="col-sm-1 col-md-3 cardLaptopMain">
        <div class="cardAccessories">
          <div class="catImg">
            <img src="img/CategoryLogo/Accessories.svg" alt="" srcset="" height="80px" width="100px">
          </div>
          <div class="HeadingTextCard">
            <h1 id="homeAccessories" style="color: white;">Accessories</h1>
          </div>
          <div class="listCard">
            <ul>

              <li>
                <h5 class="card-title cattopicAccessories">&nbsp; Laptop Accessories</h5>
              </li>

              <li>
                <h5 class="card-title cattopicAccessories">&nbsp; Pc Accessories</h5>
              </li>

              <li>
                <h5 class="card-title cattopicAccessories">&nbsp; Gaming Tools</h5>
              </li>

              <li>
                <h5 class="card-title cattopicAccessories">&nbsp; Creator Softwere</h5>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-9">

        <!-- <div class="sliderCatHeading mt-2">
          <h2>Accessiores</h2>
        </div> -->
        <div class="sliderItem ml-3 mt-5">
          <div class="row">
          <?php

            $sql = "SELECT 	product_id FROM accessories_category WHERE trending_status='true'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              $count_access=0;
              while(($row = $result->fetch_assoc()) and $count_access<3) {
                $product_id=$row["product_id"];


                $sql_laptop = "SELECT * FROM product WHERE Product_id ='$product_id'";
                $result_laptop = $conn->query($sql_laptop);

                if ($result_laptop->num_rows > 0) {
                    while($row_laptop = $result_laptop->fetch_assoc()) {
                        echo '<div class="col sm-12 col-md-4">
                        <div class="card itemHomeCate homeItem" id="'.$row_laptop['Product_id'].'">
                          <img src="img/items/'.$row_laptop['Img_Link'].'" class="card-img-top" alt="..." height="350px">
                          <div class="card-body ">
                          <b>
                            <p class="card-text bold">';
                            $string = $row_laptop['Name'];
                            if (strlen($string) > 25) {

                                // truncate string
                                $stringCut = substr($string, 0, 25);
                                $endPoint = strrpos($stringCut, ' ');

                                //if the string doesn't contain any space then it will cut without word basis.
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $string .= '...  </a>';
                            }
                            echo $string;
                            // .$row_laptop['Name'].
                            echo '</p>
                          </b>
                          <p class="card-text">';
                          $string = $row_laptop['Description'];
                          if (strlen($string) > 70) {

                              // truncate string
                              $stringCut = substr($string, 0, 70);
                              $endPoint = strrpos($stringCut, ' ');

                              //if the string doesn't contain any space then it will cut without word basis.
                              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                              $string .= '... <b>Read More</b></a>';
                          }
                          echo $string;
                          // .$row_laptop['Description'].
                          
                          echo '</p>
                          <b>
                            <p class="card-text bold">'.$row_laptop['Price'].'</p>
                          </b>
                        </div>
                        </div>
                      </div>';
              
                    }
                }
                $count_access++;
              }
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tip and Trics Section  -->
  <div class="TipSection">
    <div class="container p-5">
      <div class="row">
        <div class="col-sm-12 col-md-3">
          <div class="tipHome" id="tipHome">
            <h1>Tips &</h1>
            <h1>Tricks..</h1>
          </div>
        </div>
        <?php
           $sql_laptop = "SELECT * FROM tip_category WHERE trending_status='true'";
           $result_laptop = $conn->query($sql_laptop);
       
           if ($result_laptop->num_rows > 0) {
             $count=0;
               while(($row_laptop = $result_laptop->fetch_assoc())and  $count<3) {
                   echo '<div class="col-sm-12 col-md-3">
                   <div class="card rounded-lg tipCard">
                     <img src="img/items/'.$row_laptop['Img_Link'].'" class="card-img-top" alt="..." height="200px">
                     <div class="card-body">
                       <p class="card-text">'.$row_laptop['Title'].'</p>
                     </div>
                   </div>
                 </div>';
                 $count++;
               }
            }
        ?>
      </div>
    </div>
  </div>

  <!-- Gaming Section  -->
  <div class="GameCategory">
    <div class="row mr-4">
      <div class="col-sm-1 col-md-9">
        <div class="sliderItem ml-3 mt-5">
          <div class="row">
          <?php

            $sql = "SELECT product_id FROM gaming_category WHERE trending_status='true'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              $count_gaming=0;
              while(($row = $result->fetch_assoc()) and $count_gaming < 3) {
                $product_id=$row["product_id"];
               

                $sql_laptop = "SELECT * FROM product WHERE Product_id ='$product_id'";
                $result_laptop = $conn->query($sql_laptop);
               
                if ($result_laptop->num_rows > 0) {
                    while($row_laptop = $result_laptop->fetch_assoc()) {

                      echo '<div class="col sm-12 col-md-4">
                      <div class="card itemHomeCate homeItem" id="'.$row_laptop['Product_id'].'">
                        <img src="img/items/'.$row_laptop['Img_Link'].'" class="card-img-top" alt="..." height="350px">
                        <div class="card-body ">
                          <b>
                            <p class="card-text bold">';
                            $string = $row_laptop['Name'];
                            if (strlen($string) > 25) {

                                // truncate string
                                $stringCut = substr($string, 0, 25);
                                $endPoint = strrpos($stringCut, ' ');

                                //if the string doesn't contain any space then it will cut without word basis.
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $string .= '...  </a>';
                            }
                            echo $string;
                            // .$row_laptop['Name'].
                            echo '</p>
                          </b>
                          <p class="card-text">';
                          $string = $row_laptop['Description'];
                          if (strlen($string) > 70) {

                              // truncate string
                              $stringCut = substr($string, 0, 70);
                              $endPoint = strrpos($stringCut, ' ');

                              //if the string doesn't contain any space then it will cut without word basis.
                              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                              $string .= '... <b>Read More</b></a>';
                          }
                          echo $string;
                          // .$row_laptop['Description'].
                          
                          echo '</p>
                          <b>
                            <p class="card-text bold">'.$row_laptop['Price'].'</p>
                          </b>
                        </div>
                      </div>
                    </div>';         
                    }
                }
                $count_gaming++;
              }
            }
          ?>
          </div>
        </div>
      </div>
      <div class="col-sm-1 col-md-3 cardLaptopMain">
        <div class="cardGaming">
          <div class="catImg">
            <img src="img/CategoryLogo/Gaming.svg" alt="" srcset="" height="80px" width="100px">
          </div>
          <div class="HeadingTextCard">
            <h1 id="homeGaming" style="color: white;">Gaming</h1>
          </div>
          <div class="listCard">
            <ul>

              <li>
                <h5 class="card-title cattopicGaming">&nbsp; Gaming Laptop</h5>
              </li>

              <li>
                <h5 class="card-title cattopicGaming">&nbsp; Gaming Accessiores</h5>
              </li>

              <li>
                <h5 class="card-title cattopicGaming">&nbsp; Gaming Desktop</h5>
              </li>

              <li>
                <h5 class="card-title cattopicGaming">&nbsp; Gaming Tips</h5>
              </li>

              <li>
                <h5 class="card-title cattopicGaming">&nbsp; Gaming Tournament</h5>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Product From Brands -->
  <div class="brandsSection mt-5">
    <div class="container">
      <div>
        <h3>Product From Brands</h3>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-12 ">
          <figure class="box item-logo cardbrand">
            <a href="#"><img src="img/logos/logo1.png"></a>
            <figcaption class="border-top pt-2">36 Products</figcaption>
          </figure> <!-- item-logo.// -->
        </div> <!-- col.// -->
        <div class="col-md-2  col-sm-12">
          <figure class="box item-logo cardbrand">
            <a href="#"><img src="img/logos/logo2.png"></a>
            <figcaption class="border-top pt-2">980 Products</figcaption>
          </figure> <!-- item-logo.// -->
        </div> <!-- col.// -->
        <div class="col-md-2  col-sm-12">
          <figure class="box item-logo cardbrand">
            <a href="#"><img src="img/logos/logo3.png"></a>
            <figcaption class="border-top pt-2">25 Products</figcaption>
          </figure> <!-- item-logo.// -->
        </div> <!-- col.// -->
        <div class="col-md-2  col-sm-12">
          <figure class="box item-logo cardbrand">
            <a href="#"><img src="img/logos/logo4.png"></a>
            <figcaption class="border-top pt-2">72 Products</figcaption>
          </figure> <!-- item-logo.// -->
        </div> <!-- col.// -->
        <div class="col-md-2  col-sm-12">
          <figure class="box item-logo cardbrand">
            <a href="#"><img src="img/logos/logo5.png"></a>
            <figcaption class="border-top pt-2">41 Products</figcaption>
          </figure> <!-- item-logo.// -->
        </div> <!-- col.// -->
        <div class="col-md-2  col-sm-12">
          <figure class="box item-logo cardbrand">
            <a href="#"><img src="img/logos/logo2.png"></a>
            <figcaption class="border-top pt-2">12 Products</figcaption>
          </figure> <!-- item-logo.// -->
        </div> <!-- col.// -->
      </div>
    </div>
  </div>

  <?php
    $conn->close();
    include 'footer.php';
  ?>
    <script src="Js/home.js"></script>
</body>

</html>