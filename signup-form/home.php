<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Fakebook</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-warning mt-5">Welcome to Fakebook! <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php" class="text">Logout</a>
    </div>
</body>

</html>