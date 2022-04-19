<?php 

include 'config.php';

error_reporting(0);
session_start();

if (isset($_SESSION['email'])) {
    header("Location: ../config.php");
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jml_stok = $_POST['jml_stok']; if ($harga != $jml_stok) {
        $sql = "SELECT * FROM barang WHERE harga='$harga' AND jml_stok = '$jml_stok'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO barang (nama, harga) VALUES ('$nama', '$harga')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "alert('Berhasil')";
                $email = "";
                $_POST['harga'] = "";
                $_POST['jml_stok'] = "";
                echo 'window.location="index.php"';
            } else {
                echo "alert('ERROR.')";
            }
        } else {
            echo "alert('Barang Sudah Ada.')";
        }
  
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
    
    <title>Register Barang</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/bg2.jpg">
</head>
<body style="background: transparent;">
    <div class="col-11 col-sm-8 col-md-6 col-lg-4 center-hv bg-custom2 p-5 rounded shadowgreen border">
        <form action="" method="POST">
            <h1 class="col-10 col-md-8 mx-auto text-custom roboto-slab-serif font-weight-bold text-center mb-5 border">Register Barang</h1>
            <h5 class="text-custom mb-1">Nama barang:</h5>
            <div class="input-group">
                <input class="form-control" type="text" name="nama" value="<?php echo $nama; ?>" style="font-family:Arial, FontAwesome" required>
            </div>
            <h5 class="text-custom mt-3 mb-1">Harga:</h5>
            <div class="input-group">
                <input class="form-control mb-2" type="input"  name="harga" value="<?php echo $_POST['harga']; ?>" style="font-family:Arial, FontAwesome" required>
            </div>
            <h5 class="text-custom mt-3 mb-1">Jumlah Stok:</h5>
            <div class="input-group">
                <input class="form-control mb-2" type="input" name="jml_stok" value="<?php echo $_POST['jml_stok']; ?>" style="font-family:Arial, FontAwesome" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn btn-primary px-5 mt-3 mx-auto">Register</button>
            </div>
        </form>
    </div>
</body>
</html>