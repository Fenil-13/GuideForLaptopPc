<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaptopArena | Laptop | Details</title>
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
    <link rel="stylesheet" href="css/details.css">

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
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // collect value of input field
        $cat_name= $_GET["category"];
        $cat_name=str_replace("_"," ",$cat_name);
        $main_cat_name= $_GET["main_category"];
    }

    ?>





    <div class="container">
        <h2 class=" m-3"><?php echo ''.$cat_name.''?></h2>
        <hr>
        <?php
            
            $sql = "SELECT * FROM $main_cat_name WHERE $main_cat_name='$cat_name'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while(($row = $result->fetch_assoc())) {
                $product_id=$row["product_id"];

                $sql_laptop  = "SELECT * FROM product WHERE Product_id='$product_id'";
                $result_laptop = $conn->query($sql_laptop);
                
                if ($result_laptop->num_rows > 0) {

                while($row_laptop = $result_laptop->fetch_assoc()) {
                    echo ' <div class="row detailsCard m-3">
                    <div class="col-md-3 col-sm-12 pictureSection">
                        <img src="img/items/'.$row_laptop["Img_Link"].'" alt="" height="200px" width="200px" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-sm-12 detailsSection">
                        <a href="#"><h3 class="bold">'.$row_laptop["Name"].'</h3></a>
                        <p class="mt-2">'.$row_laptop["Description"].'</p>
                    </div>
                    <div class="col-md-3 col-sm-12 priceSection">
                        <h3 class="bold">'.$row_laptop["Price"].'</h3>
                        <p style="color: green;">Free Shipping</p>
                        <button class="btnDetails" id="'.$row_laptop["Product_id"].'">Details</button>
                        <button class="btnAddToWishlist">Add to Wishlist</button>
                    </div>
                    </div>';
                }
                }

            }
            }

        ?>
        
    </div>

    <script src="Js/details.js"></script>

  <?php
  include 'footer.php'?>
</body>

</html>