<?php
    require_once('header.php');
    require_once('config.php');
?>



<div class="container">
<form action="insert.php" method="POST">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" placeholder="Enter your First Name" name="fname" class="form-control">
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" placeholder="Enter your Last Name" name="lname" class="form-control">
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" placeholder="Enter your Contact Number" name="contact" class="form-control">
  </div>
  <div class="form-group">
    <label>Country</label>
    <input type="text" placeholder="Enter your Country Name" name="country" class="form-control">
  </div>
  
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>








<?php
    require_once('footer.php');
?>