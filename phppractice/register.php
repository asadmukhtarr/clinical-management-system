<?php include('includes/header.php'); ?>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 mt-1">
                <?php include('includes/flash.php'); ?>
                <form action="actions/register.php" class="mt-3" method="post">
                    <div class="card shadow-lg">
                        <div class="card-header bg-warning">
                            <i class="fa fa-user-plus"></i> Sign Up Here 
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for=""> <i class="fa fa-user-circle"></i> Name </label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
                        </div>
                        <div class="form-group mt-3">
                                <label for=""> <i class="fa fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="form-group mt-3">
                                <label for=""> <i class="fa fa-whatsapp"></i> What's App</label>
                                <input type="number" class="form-control" placeholder="Enter Your Email" name="whatsapp">
                        </div>
                        <div class="form-group mt-3">
                             <label for=""> <i class="fa fa-venus-mars"></i> Gender </label>
                              <select name="gender" id="" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                              </select>
                        </div>
                        <div class="form-group mt-3">
                                <label for=""> <i class="fa fa-key"></i> Password</label>
                                <input type="password" id="password" class="form-control" placeholder="Enter Your password" name="password">
                                <span class="text-danger" id="password_error"><span>
                        </div>
                        <div class="form-group mt-3">
                                <label for=""> <i class="fa fa-key"></i> Confrim Password</label>
                                <input type="password" id="cpassword" onChange="confirmpassword(this.value)" class="form-control" placeholder="Enter Your password" name="cpassword">
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
<script>
    function confirmpassword(v){
        var password  = document.getElementById("password").value;
        var cpassword = document.getElementById("cpassword").value;
        if(password == cpassword){
            console.log("password is working");
        } else {
            console.log('not matched');
            document.getElementById("password_error").innerHTML  = "Password did not matched";
        }
    }
</script>
<?php include('includes/footer.php'); ?>
