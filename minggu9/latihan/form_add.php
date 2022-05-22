<?php 
include('library.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $logo = $_POST['logo'];

    $add_status = $lib->add_data($nama, $alamat, $logo);
    if($add_status){
    header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Sekolah</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                    <td><input type="file" name="logo"></td>
                    <div class="col-sm-10">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logo" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>