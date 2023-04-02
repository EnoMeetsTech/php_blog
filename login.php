<?php
require "inc/header.php";
?>
<div class="container">
<?php
require './pages/header-home.php';
include 'inc/process.php';
?>

<div class="d-flex aligns-items-center justify-content-center py-3">
    <form action="" method="post">
        <div class="form-group">
            <h4 class="text-center">Login</h4>
            <?php
            if(isset($error)){
                ?>
                <div class="alert alert-danger">
                <strong><?php echo $error; ?></strong>
            </div>
            <?php
            } elseif(isset($success)){
                ?>
                 <div class="alert alert-success">
                <strong><?php echo $success; ?></strong>
            </div>
                <?php
            }
            ?>
        </div>
        <div class="form-group py-2">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email Address" id="">
        </div>
        <div class="form-group py-2">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" id="">
        </div>
        <hr>
        <p>
            Don't have an account? <a href="register.php">Register</a>
        </p>
        <button type="submit" name="login" class="btn btn-dark my-3">Login</button>
    </form>
</div>

<?php
require "inc/footer.php";
?>
</div>
<?php
require './pages/footer-home.php';
?>