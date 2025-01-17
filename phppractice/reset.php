<?php include('includes/header.php'); ?>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-warning">
                        <i class="fa fa-lock"></i> Enter New Password
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                            <label for=""> <i class="fa fa-lock"></i> New Password </label>
                            <input type="password" class="form-control" placeholder="Enter New Password" name="email">
                       </div>
                       <div class="form-group mt-2">
                            <label for=""> <i class="fa fa-lock"></i> Confirm Password </label>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="email">
                       </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-warning w-100 float-end"> <i class="fa fa-unlock"></i> Update Password </button>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>

