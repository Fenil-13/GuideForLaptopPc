<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaptopArena | Custom PC</title>
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
    <link rel="stylesheet" href="css/customPc.css">
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
    


  <div class="mainContainer">
    <div class="row">
      <div class="col-md-2 col-sm-12 leftSection">
        <ul class="nav flex-column">
          <li class="nav-item ">
            <a class="nav-link active" href="#"><button type="button" class="btn btn-secondary selectButtons"id="processorBtn">SELECT PROCESSOR</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-secondary selectButtons"id="motherboradBtn">SELECT MOTHERBOARD</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-secondary selectButtons"id="ramBtn">SELECT RAM</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-secondary selectButtons"id="storageBtn1">SELECT STORAGE 1</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-secondary selectButtons"id="storageBtn2">SELECT STORAGE 2</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-secondary selectButtons"id="cabinetBtn">SELECT CABINET</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-secondary selectButtons"id="coolerBtn">SELECT COOLER</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-secondary selectButtons"id="graphicBtn">SELECT GRAPHICS CARD</button></a>
          </li>
        </ul>
      </div>
      <div class="col-md-10 col-sm-12 rightSection">
        <div id="processorDiv" class="divContainer mt-3">
          <h3 class="bold">SELECT PROCESSOR</h3>  

          <div class="row">
          <?php
              $sql = "SELECT * FROM custome_pc WHERE custome_cat='PROCESSOR'";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                  $product_id=$row["product_id"];


                  $sql_custom = "SELECT * FROM product WHERE Product_id='$product_id'";
                  $result_custom = $conn->query($sql_custom);


                  if ($result_custom->num_rows > 0) {
                  
                      while($row_custom = $result_custom->fetch_assoc()) {
                        
                         echo '<div class="col-md-3 col-sm-12 mt-5">
                        <div class="choiceItem" id="card'.$row_custom['Product_id'].'">
                          <img src="img/items/'.$row_custom["Img_Link"].'" alt="" class="img-fluid">
                          <p>'.$row_custom["Name"].'</p>
                           <p class="bold">$'.$row_custom["Price"].'</p>
                          <button type="button" class="btn btn-outline-primary btnSelect '.$row_custom['Name'].'" id="'.$row_custom['Product_id'].'" value="'.$row_custom['Price'].'">Select</button>
                        </div>
                        </div>';
                      }
                  }
                }
              }
          ?> 
          </div>
        </div>

        <div id="motherboradDiv" class="divContainer mt-3">
          <h3 class="bold">SELECT MOTHERBOARD</h3>  

          <div class="row">
          <?php
              $sql = "SELECT * FROM custome_pc WHERE custome_cat='MOTHERBOARD'";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                  $product_id=$row["product_id"];


                  $sql_custom = "SELECT * FROM product WHERE Product_id='$product_id'";
                  $result_custom = $conn->query($sql_custom);


                  if ($result_custom->num_rows > 0) {
                  
                      while($row_custom = $result_custom->fetch_assoc()) {
                        
                        
                        echo '<div class="col-md-3 col-sm-12 mt-5">
                        <div class="choiceItem" id="card'.$row_custom['Product_id'].'">
                          <img src="img/items/'.$row_custom["Img_Link"].'" alt="" class="img-fluid">
                          <p>'.$row_custom["Name"].'</p>
                           <p class="bold">$'.$row_custom["Price"].'</p>
                          <button type="button" class="btn btn-outline-primary btnSelect '.$row_custom['Name'].'" id="'.$row_custom['Product_id'].'" value="'.$row_custom['Price'].'">Select</button>
                        </div>
                        </div>';
                      }
                  }
                }
              }
          ?> 
          </div>
        </div>

        <div id="ramDiv" class="divContainer mt-3">
          <h3 class="bold">SELECT RAM</h3>  

          <div class="row">
          <?php
              $sql = "SELECT * FROM custome_pc WHERE custome_cat='RAM'";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                  $product_id=$row["product_id"];


                  $sql_custom = "SELECT * FROM product WHERE Product_id='$product_id'";
                  $result_custom = $conn->query($sql_custom);


                  if ($result_custom->num_rows > 0) {
                  
                      while($row_custom = $result_custom->fetch_assoc()) {
                        
                        echo '<div class="col-md-3 col-sm-12 mt-5">
                        <div class="choiceItem" id="card'.$row_custom['Product_id'].'">
                          <img src="img/items/'.$row_custom["Img_Link"].'" alt="" class="img-fluid">
                          <p>'.$row_custom["Name"].'</p>
                           <p class="bold">$'.$row_custom["Price"].'</p>
                          <button type="button" class="btn btn-outline-primary btnSelect '.$row_custom['Name'].'" id="'.$row_custom['Product_id'].'" value="'.$row_custom['Price'].'">Select</button>
                        </div>
                        </div>';
                    
                      }
                  }
                }
              }
          ?> 
          </div>
        </div>


        <div id="storageDiv1" class="divContainer mt-3">
          <h3 class="bold">SELECT STORAGE1</h3>  

          <div class="row">
          <?php
              $sql = "SELECT * FROM custome_pc WHERE custome_cat='STORAGE'";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                  $product_id=$row["product_id"];


                  $sql_custom = "SELECT * FROM product WHERE Product_id='$product_id'";
                  $result_custom = $conn->query($sql_custom);


                  if ($result_custom->num_rows > 0) {
                  
                      while($row_custom = $result_custom->fetch_assoc()) {
                        
                        echo '<div class="col-md-3 col-sm-12 mt-5">
                        <div class="choiceItem" id="card'.$row_custom['Product_id'].'">
                          <img src="img/items/'.$row_custom["Img_Link"].'" alt="" class="img-fluid">
                          <p>'.$row_custom["Name"].'</p>
                           <p class="bold">$'.$row_custom["Price"].'</p>
                          <button type="button" class="btn btn-outline-primary btnSelect '.$row_custom['Name'].'" id="'.$row_custom['Product_id'].'" value="'.$row_custom['Price'].'">Select</button>
                        </div>
                        </div>';
                      }
                  }
                }
              }
          ?> 
          </div>
        </div>

        <div id="storageDiv2" class="divContainer mt-3">
          <h3 class="bold">SELECT STORAGE 2</h3>  

          <div class="row">
          <?php
              $sql = "SELECT * FROM custome_pc WHERE custome_cat='STORAGE'";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                  $product_id=$row["product_id"];


                  $sql_custom = "SELECT * FROM product WHERE Product_id='$product_id'";
                  $result_custom = $conn->query($sql_custom);


                  if ($result_custom->num_rows > 0) {
                  
                      while($row_custom = $result_custom->fetch_assoc()) {
                        
                        echo '<div class="col-md-3 col-sm-12 mt-5">
                        <div class="choiceItem" id="card'.$row_custom['Product_id'].'">
                          <img src="img/items/'.$row_custom["Img_Link"].'" alt="" class="img-fluid">
                          <p>'.$row_custom["Name"].'</p>
                           <p class="bold">$'.$row_custom["Price"].'</p>
                          <button type="button" class="btn btn-outline-primary btnSelect '.$row_custom['Name'].'" id="'.$row_custom['Product_id'].'" value="'.$row_custom['Price'].'">Select</button>
                        </div>
                        </div>';
                      }
                  }
                }
              }
          ?> 
          </div>
        </div>


        <div id="cabinetDiv" class="divContainer mt-3">
          <h3 class="bold">SELECT CABINET</h3>  

          <div class="row">
          <?php
              $sql = "SELECT * FROM custome_pc WHERE custome_cat='CABINET'";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                  $product_id=$row["product_id"];


                  $sql_custom = "SELECT * FROM product WHERE Product_id='$product_id'";
                  $result_custom = $conn->query($sql_custom);


                  if ($result_custom->num_rows > 0) {
                  
                      while($row_custom = $result_custom->fetch_assoc()) {
                       echo '<div class="col-md-3 col-sm-12 mt-5">
                        <div class="choiceItem" id="card'.$row_custom['Product_id'].'">
                          <img src="img/items/'.$row_custom["Img_Link"].'" alt="" class="img-fluid">
                          <p>'.$row_custom["Name"].'</p>
                           <p class="bold">$'.$row_custom["Price"].'</p>
                          <button type="button" class="btn btn-outline-primary btnSelect '.$row_custom['Name'].'" id="'.$row_custom['Product_id'].'" value="'.$row_custom['Price'].'">Select</button>
                        </div>
                        </div>';
                      }
                  }
                }
              }
          ?> 
          </div>
        </div>


        <div id="coolerDiv" class="divContainer mt-3">
          <h3 class="bold">SELECT COOLER</h3>  

          <div class="row">
          <?php
              $sql = "SELECT * FROM custome_pc WHERE custome_cat='COOLER'";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                  $product_id=$row["product_id"];


                  $sql_custom = "SELECT * FROM product WHERE Product_id='$product_id'";
                  $result_custom = $conn->query($sql_custom);


                  if ($result_custom->num_rows > 0) {
                  
                      while($row_custom = $result_custom->fetch_assoc()) {
                        
                        echo '<div class="col-md-3 col-sm-12 mt-5">
                        <div class="choiceItem" id="card'.$row_custom['Product_id'].'">
                          <img src="img/items/'.$row_custom["Img_Link"].'" alt="" class="img-fluid">
                          <p>'.$row_custom["Name"].'</p>
                           <p class="bold">$'.$row_custom["Price"].'</p>
                          <button type="button" class="btn btn-outline-primary btnSelect '.$row_custom['Name'].'" id="'.$row_custom['Product_id'].'" value="'.$row_custom['Price'].'">Select</button>
                        </div>
                        </div>';
                      
                      }
                  }
                }
              }
          ?> 
          </div>
        </div>

        <div id="graphicDiv" class="divContainer mt-3">
          <h3 class="bold">SELECT GRAPHICS</h3>  

          <div class="row">
          <?php
              $sql = "SELECT * FROM custome_pc WHERE custome_cat='COOLER'";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                  $product_id=$row["product_id"];


                  $sql_custom = "SELECT * FROM product WHERE Product_id='$product_id'";
                  $result_custom = $conn->query($sql_custom);


                  if ($result_custom->num_rows > 0) {
                  
                      while($row_custom = $result_custom->fetch_assoc()) {
                        
                        echo '<div class="col-md-3 col-sm-12 mt-5">
                        <div class="choiceItem" id="card'.$row_custom['Product_id'].'">
                          <img src="img/items/'.$row_custom["Img_Link"].'" alt="" class="img-fluid">
                          <p>'.$row_custom["Name"].'</p>
                          <p class="bold">$'.$row_custom["Price"].'</p>
                          <button type="button" class="btn btn-outline-primary btnSelect" id="'.$row_custom['Product_id'].'" value="'.$row_custom['Price'].'">Select</button>
                        </div>
                        </div>';
                      }
                  }
                }
              }
          ?> 
          </div>
        </div>
        

        <button type="button" class="btn btn-success mt-3" id="btnNext">Next</button>
        <div class="container">

      
          <div class="card text-center mt-3 w-100">
            <div class="card-header">
              LaptopArena Custom PC
            </div>
            <div class="card-body">
              <h5 class="card-title">Total Payout</h5>
              <div id="productList">
              </div>
              <p class="card-text" id="totalCost">0</p>
              <a href="#" class="btn btn-primary"payNow id="payNow">PayNow</a>
            </div>
            <div class="card-footer text-muted">
              Thanks for chossing our service
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  


  <?php
  include 'footer.php'?>

<script src="Js/custompc.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>