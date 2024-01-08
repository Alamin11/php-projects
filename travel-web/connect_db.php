<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "booking_db";
$conn = "";

try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
    );
} catch (mysqli_sql_exception) {
    echo "connection could not be established";
}
if ($conn) {
    echo "You are connected!<br>";
}
