<?php 

include 'config/config.php';

error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['hak']==1){
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['hak'] = $row['hak'];
            header("Location: pages/success.php");
        }else if($row['hak']==2){
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['hak'] = $row['hak'];
            header("Location: pages/success.php");
        }else{
            echo "
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js'></script>
            <script> Swal.fire('Our First Alert')</script>";
        }   
    } else {
        echo "
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js'></script>
        <script> Swal.fire('Our First Alert')</script>";
    }
}

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/bg2.jpg">
</head>
<body class="body">
	<div class="wrapper">
	    <div class="logo">
	        <img src="images/bg2.jpg" alt="">
	    </div>
	    <div class="text-center mt-4 name">
	        Form Login
	    </div>
	    <form class="p-3 mt-3" action="" method="POST">
	        <div class="form-field d-flex align-items-center">
	            <span class="far fa-user"></span>
	            <input type="text" placeholder="Username" name="username" required>
	        </div>
	        <div class="form-field d-flex align-items-center">
	            <span class="fas fa-key"></span>
	            <input type="password" placeholder="Password" name="password" required>
	        </div>
	        <button class="btn mt-3" name="submit">Masuk</button>
	    </form>
	    <div class="text-center fs-6">
	        <a href="#">Lupa Password?</a> atau <a href="#">Buat Akun</a>
	    </div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>