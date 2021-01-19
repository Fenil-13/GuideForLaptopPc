<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaptopArena | Accessiores</title>
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
</head>

<body>
    <?php
    include 'header.php';
    require 'utils/_dbconnect.php';?>


<div class="container">
    <div class="seeAll">
            <h4 class="bold mt-4">
            Gaming Accessories
            </h4>
            <button type="button" class="btn btn-outline-primary btn-sm btnSeeAll"  id="Gaming Accessories">See All</button>
        </div>
        
        <hr>
        <div class="row">
            <?php
                $sql = "SELECT * FROM accessories_category WHERE accessories_category='Gaming Accessories'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                $count=0;
                while(($row = $result->fetch_assoc()) && $count<4) {
                    $product_id=$row["product_id"];

                    $sql_laptop  = "SELECT * FROM product WHERE Product_id='$product_id'";
                    $result_laptop = $conn->query($sql_laptop);
                    
                    if ($result_laptop->num_rows > 0) {
                
                    while($row_laptop = $result_laptop->fetch_assoc()) {
                        echo '<div class="col-md-3 col-sm-12">
                        <div class="itemCard" id="'.$row_laptop["Product_id"].'">
                            <img src="img/items/'.$row_laptop["Img_Link"].'" class="img-fluid" alt="" height="50%">
                        </div>
                        </div>';
                    }
                    }
                    $count=$count+1;
                }
                }

            ?>
        </div>
        

        <div class="seeAll">
            <h4 class="bold mt-4">
            Laptop Accessories
            </h4>
            <button type="button" class="btn btn-outline-primary btn-sm btnSeeAll"  id="Laptop Accessories">See All</button>
        </div>
        
        <hr>
        <div class="row">
            <?php
                $sql = "SELECT * FROM accessories_category WHERE accessories_category='Laptop Accessories'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                $count=0;
                while(($row = $result->fetch_assoc()) && $count<4) {
                    $product_id=$row["product_id"];

                    $sql_laptop  = "SELECT * FROM product WHERE Product_id='$product_id'";
                    $result_laptop = $conn->query($sql_laptop);
                    
                    if ($result_laptop->num_rows > 0) {
                
                    while($row_laptop = $result_laptop->fetch_assoc()) {
                        echo '<div class="col-md-3 col-sm-12">
                        <div class="itemCard" id="'.$row_laptop["Product_id"].'">
                            <img src="img/items/'.$row_laptop["Img_Link"].'" class="img-fluid" alt="" height="50%">
                        </div>
                        </div>';
                    }
                    }
                    $count=$count+1;
                }
                }

            ?>
        </div>
        
        <div class="seeAll">
            <h4 class="bold mt-4">
            General Desk Accessories
            </h4>
            <button type="button" class="btn btn-outline-primary btn-sm btnSeeAll"  id="General Desk Accessories">See All</button>
        </div>
        
        <hr>
        <div class="row">
            <?php
                $sql = "SELECT * FROM accessories_category WHERE accessories_category='General Desk Accessories'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                $count=0;
                while(($row = $result->fetch_assoc()) && $count<4) {
                    $product_id=$row["product_id"];

                    $sql_laptop  = "SELECT * FROM product WHERE Product_id='$product_id'";
                    $result_laptop = $conn->query($sql_laptop);
                    
                    if ($result_laptop->num_rows > 0) {
                
                    while($row_laptop = $result_laptop->fetch_assoc()) {
                        echo '<div class="col-md-3 col-sm-12">
                        <div class="itemCard" id="'.$row_laptop["Product_id"].'">
                            <img src="img/items/'.$row_laptop["Img_Link"].'" class="img-fluid" alt="" height="50%">
                        </div>
                        </div>';
                    }
                    }
                    $count=$count+1;
                }
                }

            ?>
        </div>
    </div>



  <?php
  include 'footer.php';
  ?>
  <script src="Js/category.js"></script>
</body>

</html>