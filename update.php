<?php
require_once('config.php');

$id=$_POST['id'];

if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $country=$_POST['country'];

    $query="UPDATE emp SET first_name='$fname',last_name='$lname',contact='$contact',country='$country' WHERE id='$id'";

    $query_run=mysqli_query($conn,$query);

    if($query_run){
        echo "<script>alert('Data update successfully')</script>;";
        header('location:index.php');
    }
    else{
        echo "<script>alert('Data not update ')</script>;";
        echo mysqli_error($conn);
    }
}
