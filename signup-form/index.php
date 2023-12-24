<?php
// include("database.php");
$user = 0;
$success = 0;
$emptyUsername = 0;
$emptyPassword = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include("database.php");
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($username)) {
        // echo "Enter a username please!";
        $emptyUsername = 1;
    } elseif (empty($password)) {
        // echo "Please enter a password";
        $emptyPassword = 1;
    } else {
        $sql = "SELECT * FROM signupinfo WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num == 1) {
                $user = 1;
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO signupinfo(username, password) Values('$username','$hash')";
                try {
                    mysqli_query($conn, $sql);
                    // echo "User registration successful!";
                    $success = 1;
                    header('location:login.php');
                } catch (mysqli_sql_exception) {
                    echo "User registration failed!";
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Registration form</title>
</head>

<body>

    <div class="container mt-5 w-50">
        <h2 class="text-center">Welcome to Fakebook</h2><br>
        <?php
        if ($emptyUsername) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please!</strong> Enter a username first.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        } elseif ($emptyPassword) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please!</strong> Enter a password.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        }
        if ($user) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sory!</strong> User already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        } elseif ($success) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successful!</strong> You have successfully registered.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        }
        ?>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <div class="mb-3">
                <label>Username:</label>
                <input type="text" name="username" placeholder="Enter your name" class="w-100">
            </div>
            <div class="mb-3">
                <label>Password:</label>
                <input type="password" name="password" placeholder="Enter your password" class="w-100">
            </div>
            <button type="submit" name="sign-up" class="btn btn-primary w-100">Sign-up</button>
        </form>
    </div>
</body>

</html>
<?php
mysqli_close($conn);
?>