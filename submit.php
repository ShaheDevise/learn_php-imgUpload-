<?php

// connect config file
require_once('./config.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // include user inpput
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $image = $_FILES['user_img'];

    // genarate image name
    $gen_img = 'codechums_'.'image_'.rand().'_'.time().'_'.'n'.'.'.pathinfo($image['name'],PATHINFO_EXTENSION);


    $insert_sql = "INSERT INTO `image_upload` (`fullname`, `email`, `image`) VALUES ('$fullname', '$email', '$gen_img')";

    $run_sql = mysqli_query($conn_dbs, $insert_sql);

    if($run_sql){
        echo "<script>";
        echo "alert('Thank you. Data Has Been Submitted Successfully.')";
        echo "</script>";
        // move image
        move_uploaded_file($image['tmp_name'],'./uploads/'.$gen_img);
        header('refresh:0.5;url=./index.php');
    }else{
        echo "<script>";
        echo "alert('Opps. Try again letter')";
        echo "</script>";
    }

}

?>