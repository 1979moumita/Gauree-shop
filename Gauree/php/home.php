
<?php
   include_once('database.php');
if($connect){
   $query="SELECT * FROM product_info";
   $res=mysqli_query($connect,$query);
}
else{
  echo"error" ;     
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
    <link rel="stylesheet" href="../css/index.css">
   <style>
        .btn-dark {
            background-color: #B762C1 !important;
            color: white;
            font-size: large;
        }


    </style>



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



 <!--start of a  section of banner-->

    <section>
      <div class="hero">
        <img class="banner" src="../media/article.jpg">
        <h1 class="text-center"><q>Good days are made of good jewelleries</q></h1>
      </div>
    </section>
   
 <!--end of a  section of banner-->


  <!--start of a  section of product-->  
 <div class="product container">
        <h1 class="mt-5" style="color: #8946A6">Our Product</h1>
       
  
         
            <div class="card-columns">
                <?php
                while ($row = mysqli_fetch_assoc($res)) :
                ?>
                    <div class="card mt-4 text-center" style="width: 20rem; border-color:#8946A6">
                        <img class="card-img-top card_image" src="../user_image/<?php echo $row['image']; ?>" style="width: 20rem;height: 20rem;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold" style="color: #B762C1"><?php echo $row['proName']; ?></h5>
                            <h6 class="card-title font-weight-bold"><span style="color: #EA99D5">Type: </span><?php echo $row['proType']; ?></h6>
                            <h6 class="card-title font-weight-bold"><span style="color: #EA99D5">Price: </span><?php echo $row['price']; ?> Tk</h6>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
    </div>

  <!--end of a  section of product-->  




 <!--start of a  grid of header section of offers-->
        <div class="product mt-5">
      <h1>Special Offers</h1>
    </div>
       <!--end of a  grid of header section of offers--> 

       <!--start of a  grid of offer-->
       <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-6 col-lg-4">
                <div class="card sm-card animate__animated animate__backInUp wow backInUp "
                    style="width: 22rem;  height: 28rem;">
                    <div class="inner">
                        <img src="../media/payel.jpg" class="card-img-top card_image" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-title card_text mb-0">Payel</p>

                        <p class="card-text card_text2">Invite 3 female member to our facebook group <a
                                href="https://www.facebook.com/groups/gouree">Gauree</a>and give screenshots in our
                            facebook page <a
                                href="https://www.facebook.com/Gauree-%E0%A6%97%E0%A7%8C%E0%A6%B0%E0%A7%80-102045538260271">Gauree</a>
                            and avil 10% discount </p>
                        <a href="#" class="read"><b>BUY NOW <i class="fas fa-arrow-right"></i></b></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-6 col-lg-4">
                <div class="card sm-card md-card animate__animated animate__backInUp wow backInUp"
                    style="width: 22rem;  height: 28rem;">
                    <div class="inner">
                        <img src="../media/gajra set.jpg" class="card-img-top card_image" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-title card_text mb-0">Gajra set</p>

                        <p class="card-text card_text2">Invite 3 female member to our facebook group <a
                            href="https://www.facebook.com/groups/gouree">Gauree</a>and give screenshots in our
                        facebook page <a
                            href="https://www.facebook.com/Gauree-%E0%A6%97%E0%A7%8C%E0%A6%B0%E0%A7%80-102045538260271">Gauree</a>
                        and avil 10% discount </p>
                        <a href="#" class="read"><b>BUY NOW <i class="fas fa-arrow-right"></i></b></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-6 col-lg-4">
                <div class="card sm-card md-card1 animate__animated animate__backInUp wow backInUp"
                    style="width: 22rem;  height: 28rem;">
                    <div class="inner">
                        <img src="../media/neckpiece.jpg" class="card-img-top card_image" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-title card_text mb-0">Neckpiece</p>

                        <p class="card-text card_text2">Invite 3 female member to our facebook group <a
                            href="https://www.facebook.com/groups/gouree">Gauree</a>and give screenshots in our
                        facebook page <a
                            href="https://www.facebook.com/Gauree-%E0%A6%97%E0%A7%8C%E0%A6%B0%E0%A7%80-102045538260271">Gauree</a>
                        and avil 10% discount </p>
                        <a href="#" class="read"><b>BUY NOW <i class="fas fa-arrow-right"></i></b></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

         <div class="container mt-5">
          <div class="row">
            <div class="col-sm-4 col-md-6 col-lg-4">
              <div class="card sm-card animate__animated animate__backInUp wow backInUp " style="width: 22rem;  height: 28rem;" > 
                <div class="inner">
                  <img src="../media/german silver set.jpg" class="card-img-top card_image" alt="...">
                </div>
                 <div class="card-body">
                  <p class="card-title card_text mb-0">German Silver Set</p>
                  
                  <p class="card-text card_text2"><strike>500 Tk</strike><span style="color:#B762C1">   350 Tk</span></p>
                <a href="#" class="read"><b>BUY NOW <i class="fas fa-arrow-right"></i></b></a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-6 col-lg-4">
              <div class="card sm-card md-card animate__animated animate__backInUp wow backInUp" style="width: 22rem;  height: 28rem;">
               <div class="inner">
                  <img src="../media/kundon.jpg" class="card-img-top card_image" alt="...">
                </div>
                <div class="card-body">
                  <p class="card-title card_text mb-0">Kundon set</p>
                 
                  <p class="card-text card_text2"><strike>820 Tk</strike><span style="color:#B762C1">   700 Tk</span></p>
                 <a href="#" class="read"><b>BUY NOW <i class="fas fa-arrow-right"></i></b></a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-6 col-lg-4">
              <div class="card sm-card md-card1 animate__animated animate__backInUp wow backInUp" style="width: 22rem;  height: 28rem;">
                <div class="inner">
                  <img src="../media/cover-bangles.jpg" class="card-img-top card_image" alt="...">
                </div>
                <div class="card-body">
                  <p class="card-title card_text mb-0">Bangles</p>
            
                  <p class="card-text card_text2"><strike>220 Tk</strike><span style="color:#B762C1">   200 Tk</span></p>
                    <a href="#" class="read"><b>BUY NOW <i class="fas fa-arrow-right"></i></b></a>
                </div>
              </div>
            </div>

          </div>
         </div>
        
       <!--end of a  grid of offers-->
      </div>
    


     <!--start of a grid section-->
<div class="container mt-5">
    <div class="row mt-5">
      <div class=" col-sm-2 col-md-6 col-lg-2 ">
        <div class="container header-box animate__animated animate__bounceInLeft wow bounceInLeft">
          <img src="../media/support.jpg" class="img-fluid h-image1 " alt="Responsive image">
          <h4 class="text-center mt-4">SUPPORT</h4>
          <p class="lead text-center  header-p">CALL US 24/7<br>+88-017-837892<br>WRITE TO US<br>admin123@gmail.com</p>
          
        </div>
      </div>

      <div class="col-sm-2  col-md-6 col-lg-2 ">      
        <div class="header-box1 animate__animated animate__zoomIn wow zoomIn">
          <img src="../media/ship.jpg" class="img-fluid h-image1 " alt="Responsive image">
          <h4 class="text-center mt-4"> SHIPPING</h4>
          <p class="lead text-center  header-p">70TK<br>Inside Dhaka City<br>150TK<br>Outside Dhaka City</p>
        
        </div>
      </div>

      <div class="col-sm-3  col-md-6 col-lg-3 ">
        <div class="header-box2 animate__animated animate__bounceInRight wow bounceInRight">
          <img src="../media/exchange.png" class="img-fluid h-image " alt="Responsive image">
          <h4 class="text-center mt-4">EXCHANGE</h4>
          <p class="lead text-center header-p">Please check the product infront of the delivery<br>person.Faulty products will be exchanged<br> accordingly.</p>
         
        </div>
      </div>

      <div class="col-sm-3  col-md-6 col-lg-3 ">
        <div class="header-box2 animate__animated animate__bounceInRight wow bounceInRight">
          <img src="../media/secure.png" class="img-fluid h-image " alt="Responsive image">
          <h4 class="text-center mt-4">SECURE</h4>
          <p class="lead text-center header-p">Cash on Delivery All over Bangladesh or Secure<br>Online Payment with Card.</p>
        
        </div>
      </div>
          <div class="col-sm-2  col-md-6 col-lg-2 ">
        <div class="header-box2 animate__animated animate__bounceInRight wow bounceInRight">
          <img src="../media/location1.jpg" class="img-fluid h-image " alt="Responsive image">
          <h4 class="text-center mt-4">Location</h4>
          <p class="lead text-center header-p">44/a/1(3rd Floor)<br>Mirpur,Dhaka<br>View Google Maps.</p>
         
        </div>
      </div>
      
      

    </div>
  </div>

<!--end of a grid section-->









 <!--start of icon-->
    <h2 class="connect">Or Connect With:</h2>
    <div class="link p-5 links">
      <a class="c_link" href="#"><a href="#"
          class="fab fa-linkedin l_icon1"></a></a>
      <a class="c_link" href="https://www.facebook.com/Gauree-%E0%A6%97%E0%A7%8C%E0%A6%B0%E0%A7%80-102045538260271"><i class="fab fa-facebook-square l_icon3"></i></a>
      <a class="c_link" href="#"><i class="fas fa-envelope l_icon4"></i></a>
    </div>
   
  </div>
  <!--end of icon-->



  <!--start of footer section-->

  <footer class="text-center mt-0 mb-0">
    <p class="f-text pt-5 text-white animate__animated animate__zoomIn wow zoomIn"><i class="far fa-copyright"></i>
      COPYRIGHTS BY <span class="logo-text">Gauree-গৌরি. </span> ALL RIGHTS RESERVED</p>
  </footer>



  <!--start of footer section-->






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