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
                    <h1>Register</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section register-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mt-4 text-center">
                <?php validate_user_registration(); ?>
                <?php display_message(); ?>
            </div>
        </div>
    </div>
</section>

<section class="section section-register">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 py-5">
                <div class="registrationForm p-5">
                    <form id="registrationForm" method="post" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label for="username" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="address_id" class="form-label">Address id:</label>
                            <input type="number" class="form-control" id="address_id" name="address_id" required>
                        </div>
                        <div class="mb-3">
                            <label for="isBusiness" class="form-label">Is Business</label>
                            <select class="form-select" aria-label="Default select example" name="isBusiness" required>
                                <option value="0">No</option>
                                <option selected value="1">Yes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="business_reg_number" class="form-label">Business Reg Number:</label>
                            <input type="text" class="form-control" id="business_reg_number" name="business_reg_number"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" minlength="6" id="password" name="password"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" minlength="6" id="confirm-password"
                                   name="confirm-password"
                                   required>
                        </div>
                        <button type="submit" name="register-submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php include('includes/footer.php'); ?>


