<?php
require '../utils/_dbconnect.php';
$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['btnAdd'])){
        $tipTitle = $_POST["tipTitle"];
        $tipShortDescription = $_POST["tipShortDescription"];
        $LongDescription = $_POST["LongDescription"];
        $tipImg_Link = $_POST["tipImg_Link"];
        $trendingStatus = $_POST["trendingStatus"];
        $preview_Img_Link = $_POST["preview_Img_Link"];
       $sql="INSERT INTO `tip_category` (`Title`, `tip_desc_short`, `Description`, `Img_Link`,`preview_Img_Link`, `trending_status`) VALUES ('$tipTitle', '$tipShortDescription', '$LongDescription', '$tipImg_Link','$preview_Img_Link', '$trendingStatus')";

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

    <title>Admin | Tips</title>
    <style>
        #addTipForm {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #addTipForm div {
            display: block;
            width: 100%;
        }

        #uiContainer {
            border: 1px solid gray;
            margin: 0px;
            padding: 5px;
            border-radius: 5px;
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
                <a class="flex-sm-fill text-sm-center nav-link" href="category.php">Add to Catergory</a>
                <a class="flex-sm-fill text-sm-center nav-link active" href="tip.php">Add Tips</a>
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
        <h3 class="mt-3">Add Tips!</h3>
        <hr class="mt-3">
        <form action="tip.php" id="addTipForm" method="post" name="addTipForm">
            <div class="form-group">
                <h5 for="tipTitle" class="card-title">Title</h5>
                <input type="text" class="form-control" id="tipTitle" name="tipTitle" placeholder="Enter Tip Title">
            </div>
            <div class="form-group">
                <h5 for="tipShortDescription" class="card-title">Short Description</h5>
                <textarea class="form-control" id="tipShortDescription" name="tipShortDescription" rows="3"
                    placeholder="Enter Description Here"></textarea>
            </div>
            <div class="form-group">
                <h5 for="tipShortDescription" class="card-title">Add Long Decription</h5>
                <div class="uiContainer" id="uiContainer">
                    <div class="descriptionContainer" id="descriptionContainer" name="descriptionContainer">

                    </div>
                    <input type="text" class="form-control" id="tipDesc" name="tipDesc"
                        placeholder="Enter HTML item Here">
                    <button class="btn btn-success mt-2 mb-2" id="btnAddText">Add Text Element</button>
                    <button class="btn btn-secondary mt-2 mb-2" id="btnAddImg">Add Img Element</button>
                    <button class="btn btn-primary mt-2 mb-2" id="btnRefresh">Refresh Element</button>
                </div>


            </div>
            <div class="form-group">
                <textarea class="form-control" id="LongDescription" name="LongDescription" rows="3"
                    placeholder="Enter Description Here"></textarea>
            </div>
            <div class="form-group">
                <h5 for="tipImg_Link">Enter Img Name</h5>
                <input type="text" class="form-control" id="tipImg_Link" name="tipImg_Link"
                    placeholder="Enter Img Link Here">
            </div>
            <div class="form-group">
                <h5 for="preview_Img_Link">Enter preview Img Name</h5>
                <input type="text" class="form-control" id="preview_Img_Link" name="preview_Img_Link"
                    placeholder="Enter Preview Img Link Here">
            </div>
            <div class="form-group">
                <label for="trendingStatus">Choose Trending Status</label>
                <select class="form-control" id="trendingStatus" name="trendingStatus" placeholder="Choose Product">
                    <option>true</option>
                    <option>false</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-4" id="btnAdd" name="btnAdd">Add Product</button>
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
    <script src="js/tip.js"></script>

</body>

</html>