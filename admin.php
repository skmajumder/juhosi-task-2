<!-- Header -->
<?php include('./includes/header.php'); ?>

<!-- Nav menu -->
<?php include('./includes/nav.php'); ?>

<?php
$sql = "SELECT id, username FROM auth WHERE role = 'customer'";
$customers = query($sql);
confirm($customers);

$userIDs = [];
$totalQuantityCustomers = 0;
$totalWeightCustomers = 0;
$totalBoxCountCustomers = 0;
?>

<?php if (get_logged_in() && $_SESSION['userRole'] === 'admin'): ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="mt-4 p-5 bg-light rounded">
                        <h1>Admin Profile</h1>
                        <p>
                            <?php
                            echo $_SESSION['username'];
                            display_message();
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-table my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Item/Customer</th>
                                <?php while ($row = fetch_array($customers)) : ?>
                                    <th>
                                        <?php
                                        echo ucwords($row['username']);
                                        $userIDs[] = $row['id'];
                                        ?>
                                    </th>
                                <?php endwhile; ?>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php ?>
                            <tr>
                                <td>Quantity</td>
                                <?php
                                foreach ($userIDs as $userID) {
                                    $sql_2 = "SELECT SUM(quantity) AS total_quantity FROM customer WHERE userID = '$userID'";
                                    $quantity = query($sql_2);
                                    confirm($quantity);
                                    $row = fetch_array($quantity);
                                    $totalQuantity = $row['total_quantity'];
                                    $totalQuantityCustomers += $totalQuantity;
                                    echo "<td>$totalQuantity</td>";
                                }
                                ?>
                                <td><?php echo $totalQuantityCustomers; ?></td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <?php
                                foreach ($userIDs as $userID) {
                                    $sql_2 = "SELECT SUM(weight) AS total_weight FROM customer WHERE userID = '$userID'";
                                    $quantity = query($sql_2);
                                    confirm($quantity);
                                    $row = fetch_array($quantity);
                                    $totalWeight = $row['total_weight'];
                                    $totalWeightCustomers += $totalWeight;
                                    echo "<td>$totalWeight</td>";
                                }
                                ?>
                                <td><?php echo $totalWeightCustomers; ?></td>
                            </tr>
                            <tr>
                                <td>Box Count</td>
                                <?php
                                foreach ($userIDs as $userID) {
                                    $sql_2 = "SELECT SUM(box_count) AS total_box_count FROM customer WHERE userID = '$userID'";
                                    $quantity = query($sql_2);
                                    confirm($quantity);
                                    $row = fetch_array($quantity);
                                    $totalBoxCount = $row['total_box_count'];
                                    $totalBoxCountCustomers += $totalBoxCount;
                                    echo "<td>$totalBoxCount</td>";
                                }
                                ?>
                                <td><?php echo $totalBoxCountCustomers; ?></td>
                            </tr>
                            </tbody>
                        </table>
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
<?php include('./includes/footer.php'); ?>


