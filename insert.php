<?php

include("./config.php");

if(true){
    $insert = "INSERT INTO `enquiry`(`name`, `email`, `mobile`, `destination`, `plandate`, `peoplecount`, `message`) VALUES ('Shruti','of@gmail.com','9970461389','Landon','11-12-2024','7','okay n')";

    $result = mysqli_query($con,$insert);

    if($result){
        echo "<script>alert('Inserted in Server sucessfully')</script>";
    }
    else{
        echo "<script>alert('error')</script>";
    }
}