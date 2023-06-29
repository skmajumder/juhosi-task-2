<!-- Header -->
<?php include('./includes/header.php'); ?>

<!-- Nav menu -->
<?php include('./includes/nav.php'); ?>

<?php
if (!get_logged_in()) {
    redirect('login.php');
}

$userID = escape_sql($_SESSION['userID']);
$sql = "SELECT * FROM Orderitem INNER JOIN User ON Orderitem.user_id = User.id WHERE User.id = '$userID'";
$result = query($sql);
confirm($result);
?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mt-4 p-5 bg-light rounded">
                    <h1>Order List</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-3 text-end">
                <a href="export.php" class="btn btn-primary">Export to Excel</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 py-5 text-center">
                <table id="myTable" class="display order-list-table">
                    <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Company</th>
                        <th>Order Owner</th>
                        <th>Product</th>
                        <th>EA/Count</th>
                        <th>Weight</th>
                        <th>Request for Shipment</th>
                        <th>Field box: EA</th>
                        <th>Field box: Size</th>
                        <th>Office box check</th>
                        <th>Specification quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = fetch_array($result)) : ?>
                        <tr>
                            <td><?php echo $row['order_date']; ?></td>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['item']; ?></td>
                            <td><?php echo $row['count']; ?></td>
                            <td><?php echo $row['weight']; ?></td>
                            <td><?php echo $row['requests']; ?></td>
                            <td><?php echo $row['count']; ?></td>
                            <td>Null</td>
                            <td>Null</td>
                            <td>Null</td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php include('./includes/footer.php'); ?>


