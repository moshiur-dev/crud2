<?php
require_once('config.php');
require_once('header.php');


$id=$_POST['id'];

$uquery="SELECT * FROM emp WHERE id='$id'";

$uquery_run=mysqli_query($conn,$uquery);


?>

<div class="container">
<?php
  while($data=mysqli_fetch_assoc($uquery_run)){
?>
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $data['id']?>">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" placeholder="Enter your First Name" name="fname" class="form-control" value="<?php echo $data['first_name']?>">
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" placeholder="Enter your Last Name" name="lname" class="form-control" value="<?php echo $data['last_name']?>">
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" placeholder="Enter your Contact Number" name="contact" class="form-control" value="<?php echo $data['contact']?>">
  </div>
  <div class="form-group">
    <label>Country</label>
    <input type="text" placeholder="Enter your Country Name" name="country" class="form-control" value="<?php echo $data['country']?>">
  </div>
  
 
  <button type="Update Data" class="btn btn-primary" name="update">Submit</button>
</form>

<?php
  }
?>

</div>



