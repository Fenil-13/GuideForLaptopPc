<?php
require '../utils/_dbconnect.php';
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

}else{

  if(isset($_GET['btnAddToCat'])){
    $mainCategory = $_GET["mainCategory"];
    $productId = $_GET["productId"];
    $subCategory = $_GET["subCategory"];
    $trendingStatus = $_GET["trendingStatus"];
    
    $sql="";
    if((strcmp($mainCategory,"laptop_category"))==0){
      $sql="INSERT INTO `laptop_category` (`product_id`, `Laptop_category`, `trending_status`) VALUES ('$productId', '$subCategory', '$trendingStatus');";
    }
    if((strcmp($mainCategory,"gaming_category"))==0){
      $sql="INSERT INTO `gaming_category` (`product_id`, `Gaming_category`, `trending_status`) VALUES ('$productId', '$subCategory', '$trendingStatus');";
    }
    if((strcmp($mainCategory,"desktop_category"))==0){
      $sql="INSERT INTO `desktop_category` (`product_id`, `Desktop_category`, `trending_status`) VALUES ('$productId', '$subCategory', '$trendingStatus');";
    }
    if((strcmp($mainCategory,"accessories_category"))==0){
      $sql="INSERT INTO `accessories_category` (`product_id`, `Accessories_category`, `trending_status`) VALUES ('$productId', '$subCategory', '$trendingStatus');";
    }
    if (mysqli_query($conn, $sql)) {
      $showAlert=true;
      $showError=false;
    } else {
      $showError=true;
      $showAlert=false;
    }
  }
  
}
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
     #addProductForm {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        #addProductForm div{
            display: block;
            width: 100%;
        }
        .leftSection {
            background-color: rgb(246, 246, 246);
            display: block;
            padding-top: 3%;
            height: 100vh;
            padding-left: 5px;
        }
  </style>
</head>

<body>
    <div class="row">
        <div class="col-md-2 leftSection">
           <h1 class="ml-3">Laptop Arena Admin Panel</h1>
            <nav class="nav nav-pills flex-column flex-sm-column ml-3 mt-3">
            <a class="flex-sm-fill text-sm-center nav-link " href="index.php">Add Product</a>
                <a class="flex-sm-fill text-sm-center nav-link active" href="category.php">Add to Catergory</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="tip.php">Add Tips</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="update.php">Select Product</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="updateDetails.php">Update Product</a>
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
        
    <h3 class="mt-3">Add Product to Catergory!</h3>
    <hr class="mt-3">

    <form action="category.php" id="addProductForm" method="get" name="addProductForm">

      <div class="form-group">
        <label for="mainCategory">Choose Catergory</label>
        <select class="form-control" id="mainCategory" name="mainCategory" placeholder="Choose Catergory">
          <option>Choose Catergory</option>
          <option>laptop_category</option>
          <option>desktop_category</option>
          <option>accessories_category</option>
          <option>gaming_category</option>
          <option>custome_pc</option>
        </select>
      </div>

      <hr style="width: 100%;">

      <div class="form-group">
        <label for="productId">Choose Product Id</label>
        <select class="form-control" id="productId" name="productId" placeholder="Choose Product">
          <option>Enter Product Id</option>
          <?php
            $sql = "SELECT * FROM product";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo "<option>" . $row["Product_id"]. "</option>";
              }
            } else {
              echo '<option>0 Result !</option>';
            }
          ?>
        </select>
      </div>

      <div class="form-group">
        <h5 for="subCategory" class="card-title">Enter Sub Catergory</h5>
        <select class="form-control" id="subCategory" name="subCategory">
          <option>Enter Sub Catergory Name</option>
          <option>Dell Laptop</option>
          <option>Hp Laptop</option>
          <option>Lenovo Laptop</option>
          <option>Gaming Laptop</option>
          <option>Gaming Accessories</option>
          <option>Gaming Desktop</option>
          <option>Student Desktop</option>
          <option>Workstation Desktop</option>\
          <option>Professional Desktop</option>
          <option>Laptop Accessories</option>
          <option>General Desk Accessories</option>
          <option>PROCESSOR</option>
          <option>MOTHERBOARD</option>
          <option>RAM</option>
          <option>STORAGE</option>
          <option>CABINET</option>
          <option>COOLER</option>
          <option>GRAPHICS</option>
        </select>
      </div>

      <div class="form-group">
        <label for="trendingStatus">Choose Trending Status</label>
        <select class="form-control" id="trendingStatus" name="trendingStatus" placeholder="Choose Product">
          <option>true</option>
          <option>false</option>
        </select>
      </div>
      
      <button type="submit" class="btn btn-primary mb-4" id="btnAddToCat" name="btnAddToCat">Add Product to Catergory</button>
    </form>


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
</body>

</html>