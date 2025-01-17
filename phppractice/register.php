<?php include('includes/header.php'); ?>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="card shadow-lg">
                    <div class="card-header bg-warning">
                        <i class="fa fa-user-plus"></i> Sign Up Here 
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> <i class="fa fa-user-circle"></i> Name </label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="name">
                       </div>
                       <div class="form-group mt-3">
                            <label for=""> <i class="fa fa-envelope"></i> Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                       </div>
                       <div class="form-group mt-3">
                            <label for=""> <i class="fa fa-whatsapp"></i> What's App</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="whatsapp">
                       </div>
                       <div class="form-group mt-3">
                            <label for=""> <i class="fa fa-venus-mars"></i> Gender </label> <br />
                            <i class="fa fa-male" aria-hidden="true"></i> Male
                            <input type="radio" value="male" name="gender">
                            <i class="fa fa-female" aria-hidden="true"></i> Female
                            <input type="radio" value="female" name="gender">
                       </div>
                       <div class="form-group mt-3">
                            <label for=""> <i class="fa fa-key"></i> Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your password" name="email">
                       </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-warning w-100 float-end"> <i class="fa fa-user-plus"></i> Sign Up</button>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>
