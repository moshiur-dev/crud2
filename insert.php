<?php
require_once('header.php');
require_once('config.php');

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $country=$_POST['country'];
    $iquery="INSERT INTO emp (first_name,last_name,contact,country) VALUES ('$fname','$lname','$contact','$country')";

    $iquery_run=mysqli_query($conn,$iquery);


    if($iquery_run){
        echo "<script>alert('data insert successfully');</script>";
        header("location:index.php");
    }
    else{
        echo "<script>alert('data not insert ');</script>";
    }

    mysqli_close($conn);
}



?>