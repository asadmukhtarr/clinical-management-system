<?php include('includes/header.php'); ?>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <?php include('includes/flash.php'); ?>
            <div class="col-lg-3">
                <form action="actions/login.php" method="get">
                    <div class="card shadow-lg">
                        <div class="card-header bg-warning">
                            <i class="fa fa-sign-in"></i> Sign In Here 
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                                <label for=""> <i class="fa fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="form-group mt-3 mb-2">
                                <label for=""> <i class="fa fa-key"></i> Password</label>
                                <input type="password" class="form-control" placeholder="Enter Your password" name="password">
                        </div>
                        <a href="forget.php" class="text-decoration-none"> <i class="fa fa-lock"></i> Forget Password??</a>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning w-100 float-end"> <i class="fa fa-sign-in"></i> Sign In</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>
