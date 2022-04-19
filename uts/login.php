<?php 
include 'config.php';

error_reporting(0);
session_start();

if (isset($_SESSION['email'])) {
    header("Location: ../index.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: ../index.php");
    } else {
        echo "
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
src='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js'>
         Swal.fire('Our First Alert')";
    }
}

?>

<!DOCTYPE html>
<html class="html-custom">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/bg2.jpg">
</head>
<body style="background: transparent;">
    <div class="col-11 col-sm-8 col-md-6 col-lg-4 center-hv bg-custom2 p-5 rounded shadowgreen border">
        <form action="" method="POST">
            <h1 class="col-10 col-md-8 mx-auto login-text text-custom roboto-slab-serif font-weight-bold text-center mb-5 border">Login</h1>
            <h5 class="text-custom mb-1">Email:</h5>
            <div class="input-group">
                <input class="form-control" type="email" placeholder="&#xf2be;  Email" name="email" value="<?php echo $email; ?>" style="font-family:Arial, FontAwesome" required>
            </div>
            <h5 class="text-custom mt-3 mb-1">Password:</h5>
            <div class="input-group">
                <input class="form-control mb-2" type="password" placeholder="&#xf023;  Password" name="password" value="<?php echo $_POST['password']; ?>" style="font-family:Arial, FontAwesome" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn btn-primary px-5 mt-3 mx-auto">Login</button>
            </div>
            <h6 class="mt-4 text-custom text-center">Don't have an account? <a href="regis.php">Register</a>
        </form>
    </div>


</body>
</html>