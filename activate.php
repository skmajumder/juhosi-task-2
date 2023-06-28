<!-- Header -->
<?php include('./includes/header.php'); ?>

<!-- Nav menu -->
<?php include('./includes/nav.php'); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mt-4 p-5 bg-light rounded">
                    <h1>Active User</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mt-4 text-center">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4><?php activate_user(); ?></h4>
                    <?php display_message(); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <p><a href="login.php" class="btn btn-primary btn-lg">Login</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('./includes/footer.php'); ?>


