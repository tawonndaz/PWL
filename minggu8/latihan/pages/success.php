<?php 
    session_start();
?>

<!DOCTYPE html>
<html class="html-custom">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Welcome - Admin</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/bg2.jpg">

</head>

<body class="bg-transparent text-light">
    <header>
        <!------------------------------- Nav -------------------------------->
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container px-0">
                <?php 
                if (isset($_SESSION['username'])) {
                    echo "<a class='nav-link btn btn-primary rounded-pill px-5 text-light ms-auto' href='../config/logout.php'>Log Out</a>";
                }
                ?>
            </div>
        </nav>
        <!------------------------------- Header -------------------------------->
        <div class="container position-absolute start-50 end-50 top-50 translate-middle">
            <?php
            if (isset($_SESSION['username'])) {
                if ($_SESSION['hak']==1) {
                    echo "
                    <h2 class='text-light fw-bold'>Admin</h2>
                    <h1 class='text-light fw-bold'>~~Selamat Datang ".$_SESSION['nama']."~~</h1>";
                }
                else if ($_SESSION['hak']==2) {
                    echo "
                    <h2 class='text-light fw-bold'>Operator</h2>
                    <h1 class='text-light fw-bold'>~~Selamat Datang ".$_SESSION['nama']."~~</h1>";
                }
            }
            ?>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>