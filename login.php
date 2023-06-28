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
            <div class="col-lg-8 offset-lg-2 py-5">
                <div class="loginForm p-5">
                    <form method="post" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label for="username" class="form-label">ID (Username):</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" minlength="6" id="password" name="password"
                                   required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php include('./includes/footer.php'); ?>


