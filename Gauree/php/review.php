<?php
  include_once('database.php');

session_start();
if (isset($_SESSION['email'])) {
// echo $_SESSION['email'];
// echo $_SESSION['id'];

} else {
    echo("<button onclick=\"location.href='login.php'\">Login</button>");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Place</title>
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
</head>
<body>
    

   
                


     

    <section class="reviws">
        <div class="comment-box">
            <form action="" method="post">
            <textarea name="comment" class="text-area" style="margin-left:150px margin-top=-50px" cols="40" rows="5" placeholder="write your opinion here....." style="resize: none; padding-left: 10px;"></textarea>
            <!-- <input type="text" name="comment" class="text-area" cols="40" rows="5" placeholder="write your opinion here....." style="resize: none; padding-left: 10px;"> -->
            <!-- <textarea name="rating" class="text-area" cols="15" rows="2" placeholder=" Rating out of 10" style="resize: none; padding-left: 10px;"></textarea> -->
            <!-- <div class="btn-design"> -->
             <!-- <button class="btn"> Add review</button> -->



             <br>
                     <label for="validationCustom04" style="margin-left:30px"><b>Rating   </b>  </label>
        <select name="rating" style="margin-left:30px;">
            <option selected disabled value="">Choose</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
        </select>
             <input type="submit" name="save" value="Add Review">
            </div>
            <?php 
                
                    include 'database.php';
                    if(isset($_POST['save']))
                    {  
                        if (isset($_SESSION['id'])) {

                            // $sqljoin = "SELECT * FROM rating INNER JOIN user ON rating.user_id = user.id INNER JOIN places ON rating.place_id = places.id where user.id=$_SESSION['id'] and places.id=$place_id";

                           $rating = $_POST['rating'];
                           $review = $_POST['comment'];

                            $sql = "INSERT INTO `rating`(place_id, user_id, rating ,review)VALUES ('$place_id', '$_SESSION[id]', '$rating', '$review')";



                           if (mysqli_query($connect, $sql)) {
                            echo "New review inserted!";
                           } else {
                            echo "Error: " . $sql . "
                        " . mysqli_error($connect);
                           }
                           mysqli_close($connect);
                        } else {
                            echo "Please log in to add review:  ";
                            // echo("<button onclick=\"location.href='login.php'\">Login</button>");
                        }
                    }
            ?>

        </form>

               <!--  

               <?php
                include "database.php";

                $sql = "SELECT * FROM rating";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["user_id"]. " - review: " . $row["review"]. " " . $row["rating"]. "<br>";
                  }
                } else {
                  echo "0 results";
                }

                mysqli_close($connect);
                ?> 
            -->

                <?php
                include "database.php";

                $query = mysqli_query($connect,"SELECT AVG(rating) as AVGRATE from rating where rating>0");
                $row = mysqli_fetch_array($query);
                $AVGRATE=$row['AVGRATE'];
                $query = mysqli_query($connect,"SELECT count(rating) as Total from rating where rating>0");
                $row = mysqli_fetch_array($query);
                $Total=$row['Total'];
                $query2 = mysqli_query($connect,"SELECT count(review) as Totalreview from  rating where rating>0");
                $row = mysqli_fetch_array($query2);
                $Total_review=$row['Totalreview'];
                $review = mysqli_query($connect,"SELECT review,rating,name from rating inner join customer_info ON rating.user_id=customer_info.CustomerID where rating>0 ");
                $rating = mysqli_query($connect,"SELECT count(*) as Total,rating from rating inner join customer_info ON rating.user_id=customer_info.CustomerID where CustomerID group by rating order by rating desc");

                // echo $Total;
                ?>


                <div class="row container">

                <div class="col-md-4 ">

                    <h3><b>Rating & Reviews</b></h3>

                    <div class="row">

                    
                        <div class="col-md-6">

                            <h3 align="center"><b><?php echo round($AVGRATE,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>

                            <!-- <p><?=$Total;?> ratings and <?=$Total_review;?> reviews</p> -->
                            <p>Total: <?=$Total_review;?> reviews</p>

                        </div>

                        <div class="col-md-6">

                            <?php

                            while($db_rating= mysqli_fetch_array($rating)){
                            ?>

                                <h4 align="center"><?=$db_rating['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?=$db_rating['Total'];?></h4>

                                
                                
                            <?php   
                            }
                                
                            ?>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12"> 
                        <?php

                            while($db_review= mysqli_fetch_array($review)){
                        ?>

                                <h4><?=$db_review['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span style="font-size:14px;"><?=$db_review['name'];?></span></h4>

                                <p><?=$db_review['review'];?></p>

                                <hr>

                        <?php   
                            }
                                
                        ?>

                        </div>

                    </div>

                        
                    
                    <div id="rating_div">

                                <div class="star-rating">

                                    <span class="fa divya fa-star-o" data-rating="1" style="font-size:20px;"></span>

                                    <span class="fa fa-star-o" data-rating="2" style="font-size:20px;"></span>

                                    <span class="fa fa-star-o" data-rating="3" style="font-size:20px;"></span>

                                    <span class="fa fa-star-o" data-rating="4" style="font-size:20px;"></span>

                                    <span class="fa fa-star-o" data-rating="5" style="font-size:20px;"></span>

                                    <input type="hidden" name="whatever3" class="rating-value" value="1">

                                </div>

                    </div>

                </div>

                </div><br>


    </section>
</body>
</html>


         <!--     
                        <a href="article.html" class="btn btn-primary btn-info text-light btn-sm" tabindex="-1"
                            role="button" aria-disabled="true">Read full blog</a> -->