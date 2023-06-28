<!-- Header -->
<?php include('./includes/header.php'); ?>

<!-- Nav menu -->
<?php include('./includes/nav.php'); ?>

<?php
if (get_logged_in()) {
    redirect('index.php');
}
?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mt-4 p-5 bg-light rounded">
                    <h1>Change Password</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section register-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 py-2 text-center">
                <?php
                display_message();
                validate_password_change();
                ?>
            </div>
        </div>
    </div>
</section>

<section class="section section-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 py-5">
                <div class="loginForm p-5">
                    <form method="post">
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Enter Mobile Number</label>
                            <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" minlength="6" id="password" name="password"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" minlength="6" id="confirm-password"
                                   name="confirm_password"
                                   required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('./includes/footer.php'); ?>


