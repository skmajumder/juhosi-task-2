<!-- Header -->
<?php include('includes/header.php'); ?>

<!-- Nav menu -->
<?php include('includes/nav.php'); ?>

<?php if (get_logged_in()): ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="mt-4 p-5 bg-light rounded">
                        <h1>Order Form</h1>
                        <p><?php echo $_SESSION['username']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section register-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 py-2 text-center">
                    <?php
                    display_message();
                    validate_customer_order();
                    ?>
                </div>
            </div>
        </div>
    </section

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 py-5">
                    <div class="orderForm p-5">
                        <form id="orderForm" method="post">
                            <div class="mb-3">
                                <label for="order-date" class="form-label">Order Date:</label>
                                <input type="date" class="form-control" id="order-date" name="order_date" required>
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" placeholder="Company" id="company"
                                       name="company" value="<?php echo $_SESSION['userID']; ?>" readonly required>
                            </div>
                            <div class="mb-3">
                                <label for="owner" class="form-label">Order Owner:</label>
                                <input type="text" class="form-control" placeholder="Owner" id="owner" name="owner"
                                       value="<?php echo $_SESSION['username']; ?>" required readonly>
                            </div>
                            <div class="mb-3">
                                <label for="item" class="form-label">Item/Product:</label>
                                <input type="text" class="form-control" placeholder="Product Name" id="item" name="item"
                                       required>
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">EA/Count:</label>
                                <input type="number" class="form-control" placeholder="Quantity in Number" id="quantity"
                                       name="quantity" required>
                            </div>
                            <div class="mb-3">
                                <label for="weight" class="form-label">Weight:</label>
                                <input type="number" class="form-control" placeholder="Weight in KG" id="weight"
                                       name="weight" required>
                            </div>
                            <div class="mb-3">
                                <label for="request-shipment" class="form-label">Request for Shipment:</label>
                                <input type="text" class="form-control" id="request-shipment" placeholder="Shipment"
                                       name="request_shipment"
                                       required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
else:
    redirect('index.php');
endif; ?>

<!-- Footer -->
<?php include('includes/footer.php'); ?>


