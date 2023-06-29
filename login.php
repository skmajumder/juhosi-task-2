<!-- Header -->
<?php include('includes/header.php'); ?>

<!-- Nav menu -->
<?php include('includes/nav.php'); ?>

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
                    <h1>Login page</h1>
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
                validate_user_login();
                display_message();
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
                            <label for="user_id" class="form-label">User ID</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" minlength="6" id="password" name="password"
                                   required>
                        </div>
                        <div class="d-grid gap-3">
                            <button class="btn btn-primary" type="submit">Login</button>
                            <a href="change-password.php" class="btn btn-primary">Change Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php include('includes/footer.php'); ?>


