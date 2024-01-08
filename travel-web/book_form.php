<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include("connect_db.php");
    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
        $sql = "INSERT INTO booking_form(name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

        mysqli_query($conn, $sql);

        header('location:book.php');
    } else {
        echo "Something went wrong! try again.";
    }
}
