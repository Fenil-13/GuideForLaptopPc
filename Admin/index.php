<?php
require '../utils/_dbconnect.php';
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){


  if(isset($_POST['btnSubmit'])){
    $productName = $_POST["productName"];
    $productDescription = $_POST["productDescription"];
    $productSpecificationFinal = $_POST["productSpecificationFinal"];
    $productPrice = $_POST["productPrice"];
    $productBuy_Link = $_POST["productBuy_Link"];
    $productImg_Link = $_POST["productImg_Link"];
    $productPreview_Link1 = $_POST["productPreview_Link1"];
    $productPreview_Link2 = $_POST["productPreview_Link2"];
    $productPreview_Link3 = $_POST["productPreview_Link3"];
    $productPreview_Link4 = $_POST["productPreview_Link4"];

    $sql = " INSERT INTO `product` (`Name`, `Description`, `Specification`, `Price`, `Buy_Link`, `Img_Link`, `Preview_Link1`, `Preview_Link2`, `Preview_Link3`, `Preview_Link4`) VALUES ('$productName', '$productDescription', '$productSpecificationFinal', '$productPrice', '$productBuy_Link', '$productImg_Link', '$productPreview_Link1', '$productPreview_Link2', '$productPreview_Link3', '$productPreview_Link4')";
    
    if (mysqli_query($conn, $sql)) {
        $showAlert=true;
        $showError=false;
      } else {
        $showError=true;
        $showAlert=false;
        }
    }else{
    
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

    <title>Admin | Product </title>
    <style>
        #addProductForm{
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
        .specificationContainer{
            border: 1px solid gray;
            margin:0px;
            padding : 5px;
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
                <a class="flex-sm-fill text-sm-center nav-link active" href="index.php">Add Product</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="category.php">Add to Catergory</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="tip.php">Add Tips</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="update.php">Select Product</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="updateDetails.php">Update Product</a>>
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
       

        
        <h3 class="mt-3">Add Product!</h3>
        <hr class="mt-3">

        <form action="product.php" id="addProductForm" method="post" onsubmit="return validateForm()" name="addProductForm">
            <div class="form-group">
                <h5 for="productName" class="card-title">Name</h5>
                <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter Product Name">
            </div>

            <div class="form-group">
                <h5 for="productDescription" class="bold">Enter Description</h5>
                <textarea class="form-control" id="productDescription" name="productDescription" rows="3"
                    placeholder="Enter Description Here"></textarea>
            </div>
            <div class="form-group">
                <h5 for="productSpecification">Enter Specification</h5>
                <div class="specificationContainer">
                    <div id="ulContainer">

                    </div>
                    
                    <input type="text" class="form-control" id="productSpecification" name="productSpecification"
                        placeholder="Enter Specification Here">
                    <button class="btn btn-success mt-2 mb-2" id="btnAddSpec">Add Specification</button>
                    <button class="btn btn-primary mt-2 mb-2" id="btnRefresh">Refresh</button>
                </div>
               
            </div>
            <div class="form-group">
                <textarea class="form-control" id="productSpecificationFinal" name="productSpecificationFinal" rows="3"
                    placeholder="Enter Description Here"></textarea>
            </div>
            <div class="form-group">
                <h5 for="productPrice">Enter Price</h5>
                <input type="text" class="form-control" id="productPrice" name="productPrice" placeholder="Enter Price Here">
            </div>
            <div class="form-group">
                <h5 for="productBuy_Link">Enter Buy Link</h5>
                <input type="text" class="form-control" id="productBuy_Link" name="productBuy_Link" placeholder="Enter Buy Link Here">
            </div>
            <div class="form-group">
                <h5 for="productImg_Link">Enter Img Name</h5>
                <input type="text" class="form-control" id="productImg_Link"  name="productImg_Link" placeholder="Enter Img Link Here">
            </div>
            <div class="form-group">
                <h5 for="productPreview_Link1">Enter Preview Img 1</h5>
                <input type="text" class="form-control" id="productPreview_Link1" name="productPreview_Link1" placeholder="Enter Preview Link1 Here">
            </div>
            <div class="form-group">
                <h5 for="productPreview_Link2">Enter Preview Img 2</h5>
                <input type="text" class="form-control" id="productPreview_Link2" name="productPreview_Link2" placeholder="Enter Preview Link2 Here">
            </div>
            <div class="form-group">
                <h5 for="productPreview_Link3">Enter Preview Img 3</h5>
                <input type="text" class="form-control" id="productPreview_Link3"  name="productPreview_Link3"  placeholder="Enter Preview Link3 Here">
            </div>
            <div class="form-group">
                <h5 for="productPreview_Link4">Enter Preview Img 4</h5>
                <input type="text" class="form-control" id="productPreview_Link4"  name="productPreview_Link4" placeholder="Enter Preview Link4 Here">
            </div>
            <button type="submit" class="btn btn-primary mb-4" id="btnSubmit" name="btnSubmit">Add Product</button>
        </form>
    </div>
        </div>
    </div>

  






  

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

        <script src="js/product.js"></script>
</body>

</html>