<?php
require_once('header.php');
require_once('config.php');
?>

<style>
    form{
        display:inline-block;
    }
</style>
<div class="container">
    <h1 class="text-center text-uppercase">This is CRUD Project</h1>
    <div class="button-area" style="margin-left:90%">
        <a href="form.php" class="btn btn-primary">ADD DATA</a>
    </div>
    <div class="table-area" style="margin-top:20px">
    <table class="table table-striped table-dark">
        <thead class="text-center">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Country</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php
            $squery="SELECT * FROM emp";
            $squery_run=mysqli_query($conn,$squery);
            if($squery_run){
                while($data=mysqli_fetch_assoc($squery_run)){
                ?>
                <tr>
                    <th scope="row"><?php echo $data['id'];?></th>
                    <td><?php echo $data['first_name'];?></td>
                    <td><?php echo $data['last_name'];?></td>
                    <td><?php echo $data['contact'];?></td>
                    <td><?php echo $data['country'];?></td>
                    <td>
                        
                        <form action="edit.php" method="POST">
                        <input type="hidden" value="<?php echo $data['id'];?>" name="id">
                            <input type="submit" class="btn btn-primary" value="EDIT" name="edit">
                        </form>
                        <form action="delete.php" method="POST">
                        <input type="hidden" value="<?php echo $data['id'];?>" name="id">
                            <input type="submit" class="btn btn-danger" value="DELETE" name="delete">
                        </form>
                    </td>
                </tr>
                <?php
                }
                
            }
        ?>
            
        </tbody>
</table>
    </div>
</div>

<?php
require_once('footer.php');

?>