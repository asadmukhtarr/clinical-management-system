<?php if(!empty($_GET['asad'])){
                ?>
<span class="alert alert-danger">
    <i class="fa fa-exclamation-circle"></i> <?php echo $_GET['asad'] ?>
</span>
<?php
} ?>
    <?php if(!empty($_GET['success'])){
?>
<span class="alert alert-success">
    <i class="fa fa-check-circle"></i> <?php echo $_GET['success'] ?>
</span>
<?php
} ?>