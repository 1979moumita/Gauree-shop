<?php
session_start();
include_once('database.php');
if ($connect) {
    if (isset($_SESSION['Email'])) {
        $sql = "SELECT * FROM admin_info where email='$_SESSION[Email]'";
        $res = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($res);
    }
}
?>
<?php
if ($connect) {
    $sql2 = "SELECT * FROM customer_info";
    $res2 = mysqli_query($connect, $sql2);
    $row2 = mysqli_num_rows($res2);
}
?>
<?php
if ($connect) {
    $sql3 = "SELECT * FROM product_info";
    $res3 = mysqli_query($connect, $sql3);
    $row3 = mysqli_num_rows($res3);
}
?>

<?php
if ($connect) {
    $sql4 = "SELECT * FROM cart where flag=1";
    $res4 = mysqli_query($connect, $sql4);
    $row4 = mysqli_num_rows($res4);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gauree</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/admin_query.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
 
   <!--Start of a navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-color sticky-top">
    <a class="navbar-brand" href="#">
      <img src="../media/banner1 (2).png" class="img-fluid logo-image" alt="Responsive image"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto nav-margin">
        <li class="nav-item active">
          <a class="nav-link nav-color ac-color animate__animated animate__zoomIn wow zoomIn" href="../php/Home.php">Home <span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color animate__animated animate__zoomIn wow zoomIn " href="../php/product.php">Product</a>
        </li>

       
        <li class="nav-item active">
          <a class="nav-link nav-color  animate__animated animate__zoomIn wow zoomIn" href="../php/about.php"> About Us <span
              class="sr-only">(current)</span></a>
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
          <a class="nav-link nav-color  animate__animated animate__zoomIn wow zoomIn" href="../php/contact.php">Contact Us <span
              class="sr-only">(current)</span></a>
        </li>


        <li class="nav-item active">
          <a class="nav-link nav-color  animate__animated animate__zoomIn wow zoomIn" href="../php/admin_login.php">Admin Login
            <span class="sr-only">(current)</span></a>
        </li>
             <li class="nav-item active">
          <a class="nav-link nav-color  animate__animated animate__zoomIn wow zoomIn" href="../php/customer_login.php">Customer- Login/Signup <span
              class="sr-only">(current)</span></a>
        </li>



      </ul>

    </div>
  </nav>
  <!--end of a navbar-->

    <div class="container heading">
        <h1>Welcome <?php echo $row['adminName']; ?></h1>
        <h3>Information</h3>
    </div>
    <div class="menu bg-light">
        <div class="container">
            <div class="row text-center info">
                <div class="col-sm">
                    <a href="customer_table.php" class="btn btn-light">Customer Information</a>
                </div>
                <div class="col-sm">
                    <a href="product_table.php" class="btn btn-light">Product's Information</a>
                </div>
                <div class="col-sm">
                    <a href="order_overview.php" class="btn btn-light">Order Overview</a>
                </div>
                <div class="col-sm">
                    <a href="index.php" class="btn  btn-light">Log Out</a>
                </div>
            </div>
        </div>
    </div>
    <section class="yellow">
        <div class="container">
            <div class="row justify-content-between align-items-center row1">
                <div class="col-sm-4">
                    <div class="row justify-content-center align-items-center">
                        <h1><?php echo $row2?></h1>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <h2>Total Clients</h2>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row justify-content-center align-items-center">
                        <h1><?php echo $row3?></h1>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <h2>Available Product</h2>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row justify-content-center align-items-center">
                        <h1><?php echo $row4?></h1>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <h2>Pending Order</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

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