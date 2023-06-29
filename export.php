<?php include('functions/init.php');

if (!get_logged_in()) {
    redirect('login.php');
}

$userID = escape_sql($_SESSION['userID']);
$sql = "SELECT * FROM orderitem INNER JOIN user ON orderitem.user_id = user.id WHERE user.id = '$userID'";
$result = query($sql);
confirm($result);

if (row_count($result)) {
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    $fileName = "data-" . date('Y-m-d');

    $fields = array('Order Date', 'Company', 'Order Owner', 'Product', 'EA/Count', 'Weight', 'Request for Shipment', 'Field box: EA', 'Field box: Size', 'Office box check', 'Specification quantity');

    // Display column names as first row
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Output each row of the data
    while ($row = fetch_array($result)) {
        $lineData = array($row['order_date'], $row['user_id'], $row['name'], $row['item'], $row['count'], $row['weight'], $row['requests'], $row['count'], 'Null', 'Null', 'Null');
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }

    // Set the content type and headers for Excel file download
    header('Content-Type: application/vnd.ms-excel');
    header("Content-Disposition: attachment; filename=$fileName.xls");
    // Render excel data
    echo $excelData;
}