<?php
require '../utils/_dbconnect.php';
$showAlert = false;
$showError = false;
?>






<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Admin | Catergory</title>
  <style>
        .leftSection {
            background-color: rgb
            (246, 246, 246);
            display: block;
            padding-top: 3%;
            height: 100vh;
            padding-left: 5px;
        }
  </style>
   <link rel="stylesheet" href="css/details.css">
</head>

<body>
    <div class="row">
        <div class="col-md-2 leftSection">
           <h1 class="ml-3">Laptop Arena Admin Panel</h1>
            <nav class="nav nav-pills flex-column flex-sm-column ml-3 mt-3">
                <a class="flex-sm-fill text-sm-center nav-link " href="index.php">Add Product</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="category.php">Add to Catergory</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="tip.php">Add Tips</a>
                <a class="flex-sm-fill text-sm-center nav-link active" href="update.php">Select Product</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="updateDetails.php">Update Product</a>
            </nav>
        </div>
        <div class="col-md-10">
        <div class="container">
    <?php
              if($showAlert){
                  echo ' <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                  <strong>Sucussfully Added!</strong> Your Produt added into Database.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>';
              }
              if($showError){
                  echo ' <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                  <strong>Try Again!</strong> Error to add Your Produt added into Database.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>';
              }
    ?>
        
    <h3 class="mt-3">Select Product for Update!</h3>
    <hr class="mt-3">
    <div class="container">
        <?php
            
            
                $sql_laptop  = "SELECT * FROM product ";
                $result_laptop = $conn->query($sql_laptop);
                
                if ($result_laptop->num_rows > 0) {

                while($row_laptop = $result_laptop->fetch_assoc()) {
                    echo ' <div class="row detailsCard m-3">
                    <div class="col-md-3 col-sm-12 pictureSection">
                        <img src="../img/items/'.$row_laptop["Img_Link"].'" alt="" height="200px" width="200px" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-sm-12 detailsSection">
                        <a href="#"><h3 class="bold"> <i>['.$row_laptop["Product_id"].'] </i>'.$row_laptop["Name"].'</h3></a>
                        <p class="mt-2">'.$row_laptop["Description"].'</p>
                    </div>
                    <div class="col-md-3 col-sm-12 priceSection">
                        <h3 class="bold">'.$row_laptop["Price"].'</h3>
                        <p style="color: green;">Free Shipping</p>
                        <button class="btnDetails" id="'.$row_laptop["Product_id"].'">Edit</button>
                    </div>
                    </div>';
                }
                }

        ?>
        
    </div>

  </div>
        </div>  
      </div>

 







  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
    <script src="Js/update.js"></script>
    
</body>

</html>