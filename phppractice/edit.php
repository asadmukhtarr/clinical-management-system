<?php 
    include('includes/header.php'); 
    $id = $_GET['id']; // id ..
    include('actions/cn.php');
    $query = "SELECT * FROM `users` WHERE id='$id'";
    $result = mysqli_query($connection,$query) or die('cant run query for fetch user');
    $rows = mysqli_fetch_array($result);   
?>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 mt-1">
                <?php include('includes/flash.php'); ?>
                <form action="actions/update.php?id=<?php echo $rows['id']; ?>" class="mt-3" method="post">
                    <div class="card shadow-lg">
                        <div class="card-header bg-warning">
                            <i class="fa fa-user-plus"></i> Edit Here 
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for=""> <i class="fa fa-user-circle"></i> Name </label>
                                <input type="text" class="form-control" value="<?php echo $rows['name']; ?>" placeholder="Enter Your Name" name="name">
                        </div>
                        <div class="form-group mt-3">
                                <label for=""> <i class="fa fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" value="<?php echo $rows['email']; ?>" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="form-group mt-3">
                                <label for=""> <i class="fa fa-whatsapp"></i> What's App</label>
                                <input type="number" class="form-control" value="<?php echo $rows['whatsapp']; ?>" placeholder="Enter Your Email" name="whatsapp">
                        </div>
                        <div class="form-group mt-3">
                             <label for=""> <i class="fa fa-venus-mars"></i> Gender </label>
                              <select name="gender" id="" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="male" <?php if ($rows['gender'] == "male"){ echo 'selected'; } ?>>Male</option>
                                <option value="female" <?php if ($rows['gender'] == "female"){ echo 'selected'; } ?>>Female</option>
                              </select>
                        </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning w-100 float-end"> <i class="fa fa-user-plus"></i> Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>
