<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "sql12629011";

//$servername = "sql12.freemysqlhosting.net";
//$username = "sql12629011";
//$password = "RzlzHmeUy8";
//$database = "sql12629011";

// Create a new MySQLi connection
$con = mysqli_connect($servername, $username, $password, $database)
or die("Database Error for Connection." . mysqli_error($con));

function row_count($result)
{
    return mysqli_num_rows($result);
}

function row_effect()
{
    global $con;
    return mysqli_affected_rows($con);
}

function escape_sql($string)
{
    global $con;
    return mysqli_real_escape_string($con, $string);
}

function query($query)
{
    global $con;
    return mysqli_query($con, $query);
}

function confirm($result)
{
    global $con;
    if (!$result) {
        die("Query Failed" . mysqli_error($con));
    }
}

function fetch_array($result)
{
    global $con;
    return mysqli_fetch_array($result);
}