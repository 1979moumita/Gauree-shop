<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gauree";
    $connect= mysqli_connect($servername,$username,$password,$dbname);
    mysqli_query($connect,'SET CHARACTER SET utf8'); 
    mysqli_query($connect,"SET SESSION collation_connection ='utf8_general_ci'");
    if($connect){
        // echo "connected";
    }
    else{
        echo "not connected";
    }

?>