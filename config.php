<?php

$con = mysqli_connect("localhost","root","","yovage");

if(!$con){
    echo "<script>alert('There is a technical error on Server')</script>";
}
