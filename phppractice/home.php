<?php 
    include('includes/header.php'); 
    if(empty($_SESSION['user'])){
        header('Location:index.php');
    }
    include('actions/cn.php'); // connection ..
    $query = "SELECT * FROM `users` ORDER BY `id` DESC";
    $result = mysqli_query($connection,$query) or die('cant run query');
    $rows = mysqli_num_rows($result);
?>
<div class="jumbotron bg-warning border border-top-1 border-danger shadow-lg">
   <div class="container pt-5 pb-3">
        <h2> <i class="fa fa-home"></i> Welcome <?php echo $_SESSION['user']; ?></h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo accusantium totam molestiae maxime tenetur culpa a in sit. Laboriosam explicabo deleniti quidem ipsum ducimus illum porro officiis nulla, eius aliquam iste, culpa molestias! Voluptas ipsa nesciunt temporibus asperiores doloribus? Eveniet sit quibusdam cum architecto ex magni explicabo rerum, similique iste!
        </p>
   </div>
</div>
<div class="container mb-5 p-2">
    <div class="card mt-3 shadow-lg">
        <div class="card-header bg-warning">
            <i class="fa fa-users"></i> All Users
        </div>
        <?php include('includes/flash.php'); // for flash message ... ?>
        <table class="table table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th><i class="fa fa-user"></i> Name</th>
                    <th><i class="fa fa-envelope"></i> Email</th>
                    <th><i class="fa fa-whatsapp"></i> What's App</th>
                    <th><i class="fa fa-venus-mars"></i> Gender</th>
                    <th><i class="fa fa-cogs"></i> Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($rows > 0){ 
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row['name']; ?> </td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['whatsapp']; ?></td>
                    <td><?php echo ucfirst($row['gender']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">
                            <button class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </a>
                        <button class="btn btn-sm btn-danger" value="<?php echo $row['id']; ?>" onclick="confirmDelete(this.value)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <?php  
                    }} else { 
                ?>
                <tr>
                    <td class="text-center">
                       <i class="fa fa-exclimination-triangle"></i> No Record Found
                    </td>
                </tr>
                <?php 
                } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    function confirmDelete(id){
        if(confirm("Are you sure? You want to delete user.") == true){
            window.location = "./actions/delete.php?id="+id;
        } 
    }
</script>
<?php include('includes/footer.php'); ?>
