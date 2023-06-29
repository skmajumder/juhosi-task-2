<!-- Header -->
<?php include('./includes/header.php'); ?>

<!-- Nav menu -->
<?php include('./includes/nav.php'); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mt-4 p-5 bg-light rounded">
                    <h1>Homepage</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (get_logged_in()): ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5 text-center">
                    <a href="customer.php" class="btn btn-primary btn-lg">Order</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (!get_logged_in()): ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5 text-center">
                    <a href="login.php" class="btn btn-primary btn-lg">Login</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Footer -->
<?php include('./includes/footer.php'); ?>


