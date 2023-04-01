<?php
include_once('database.php');
session_start();
if (isset($_SESSION['Email'])) {
  $sqlfetch = "SELECT * FROM customer_info where Email='$_SESSION[Email]'";
  $res = mysqli_query($connect, $sqlfetch);
  $row = mysqli_fetch_assoc($res);
  $_SESSION['CustomerID'] = $row['CustomerID'];
} else {
  header('location:customer_signup.php');
}
?>

<?php
if (isset($_GET['delete'])) {
  $CustomerID = $_GET['delete'];
  $del = "DELETE FROM customer_info where CustomerID='$CustomerID'";
  $res3 = mysqli_query($connect, $del);
  if ($res3) {
    header('location:index.php');
  }
}
?>










<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gauree Customer</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/profile.css">
</head>

<body>

  <!--Start of a navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-color sticky-top">
    <a class="navbar-brand" href="#">
      <img src="../media/banner1 (2).png" class="img-fluid logo-image" alt="Responsive image"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto nav-margin">
        <li class="nav-item active">
          <a class="nav-link nav-color ac-color animate__animated animate__zoomIn wow zoomIn" href="../php/Home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color animate__animated animate__zoomIn wow zoomIn " href="../php/product.php">Product</a>
        </li>


        <li class="nav-item active">
          <a class="nav-link nav-color  animate__animated animate__zoomIn wow zoomIn" href="../php/about.php"> About Us <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-color " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Details
          </a>
          <div class="dropdown-menu dp" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../php/blog.php">Blog </a>
            <a class="dropdown-item" href="../php/rules.php">Delivery Rules</a>
            <a class="dropdown-item" href="../php/FAQ.php">FAQS</a>
          </div>
        </li>

        <li class="nav-item active">
          <a class="nav-link nav-color  animate__animated animate__zoomIn wow zoomIn" href="../php/contact.php">Contact Us <span class="sr-only">(current)</span></a>
        </li>


        <li class="nav-item active">
          <a class="nav-link nav-color  animate__animated animate__zoomIn wow zoomIn" href="../php/admin_login.php">Admin Login
            <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link nav-color  animate__animated animate__zoomIn wow zoomIn" href="../php/customer_login.php">Customer- Login/Signup <span class="sr-only">(current)</span></a>
        </li>



      </ul>

    </div>
  </nav>
  <!--end of a navbar-->




  <div class="container heading">
    <h1>Welcome <?php echo $row["CustomerName"]; ?></h1>

  </div>
  <div class="menu bg-light">
    <div class="container">
      <div class="row text-center info">
        <div class="col-sm">
          <a href="customer_update.php" class="btn  btn-light ">Update Details</a>

        </div>
        <div class="col-sm">
          <a href="customer_profile.php?delete=<?php echo $row['CustomerID']; ?>" class="btn  btn-light">Delete Your Account</a></button>
        </div>
        <div class="col-sm">
          <a href="order_info.php" class="btn  btn-light">Your order</a></button>
        </div>
        <div class="col-sm">
          <a href="cart.php" class="btn  btn-light">Cart</a></button>
        </div>
        <div class="col-sm logbtn">
          <?php
          if (isset($_POST['logout'])) {
            session_destroy();
            header('location:home.php');
          }
          ?>
          <form method="post" action="" enctype="multipart/form-data">
            <button type="submit" class="btn btn-light" name="logout">Log out</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>


  <div class="bg-info"></div>

  <div class="container update">


    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-6 col-lg-4">
        </div>
        <div class="col-sm-4 col-md-6 col-lg-8">
          <div class="jumbotron box">
            <h1 class="header">PERSONAL INFORMATION OF THE CUSTOMER</h1>
            <p class="text-1 mt-5">Customer ID:<?php echo $row["CustomerID"]; ?></p>
            <p class="text-1">Customer Name:<?php echo $row["CustomerName"]; ?></p>
            <p class="text-1">Email Address:<?php echo $row["Email"]; ?></p>
            <p class="text-1">Address:<?php echo $row["Address"]; ?></p>
            <p class="text-1">Phone Number:<?php echo $row["PhoneNumber"]; ?></p>
            <hr>
          </div>
        </div>
      </div>
    </div>


  </div>





  <script src="../js/jquery-3.5.1.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="../js/wow.js"></script>
  <script>
    new WOW.init();
  </script>
  <script src="../js/main.js"></script>
</body>

</html>