<?php
$con = mysqli_connect("localhost", "root", "", "Gaming Hub Data");

if(mysqli_connect_error()){
    echo"<script>alert('Connection Failed')</script>";
    exit();
}
?>

