<?php
include("database.php");
$login = 0;
$invalidUsername = 0;
$invalidPassword = 0;
$emptyField = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // include("database.php");
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($username) && empty($password)) {
        // echo "You didn't put any credential";
        $emptyField = 1;
    } else {
        // $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM signupinfo WHERE username = '$username'";
        // echo $sql . "<br>";
        // $result = mysqli_query($conn, $sql);
        // echo $result;

        try {
            $result = mysqli_query($conn, $sql);
            // $num = mysqli_num_rows($result);
            if (mysqli_num_rows($result) == 1) {
                // echo "Welcome {$username}!!! you are successfully logged in to fakebook";
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $hashedPassword = $row['password'];
                // echo $hashedPassword;
                if (!password_verify($password, $hashedPassword)) {
                    // echo "Invalid password!";
                    $invalidPassword = 1;
                } else {
                    // echo "Logged in successful";
                    $login = 1;
                    session_start();
                    $_SESSION['username'] = $username;
                    header('location:home.php');
                }
            } else {

                // echo "Invalid username";
                $invalidUsername = 1;
            }
        } catch (mysqli_sql_exception) {
            echo "Something went wrong";
        }
        // if ($result) {
        //     $num = mysqli_num_rows($result);
        //     if ($num > 0) {
        //         echo "Welcome {$username}!!! you are successfully logged in to fakebook";
        //     } else {

        //         echo "Please insert valid username / password";
        //     }
        // }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Login page</title>
</head>

<body>

    <div class="container mt-5 w-50">
        <h2 class="text-center">Login to Fakebook</h2><br>
        <?php
        if ($invalidUsername) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sory!</strong> invalid username!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        } elseif ($invalidPassword) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sory!</strong> invalid password!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        } elseif ($emptyField) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sory!</strong> You didn\'t put any credential!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        } elseif ($login) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successful!</strong> You have successfully registered.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sory!</strong> invalid username & password!
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
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>

</html>
<?php
// mysqli_close($conn);
?>