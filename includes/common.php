<?php
//this file for setting connection and starting session
    $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
    session_start();
?>
