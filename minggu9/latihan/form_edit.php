<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $data_sekolah = $lib->get_by_id($id);
}
else
{
    header('Location: index.php');
}

if(isset($_POST['tombol_update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $logo = $_POST['logo']; 
    $status_update = $lib->update($id,$nama,$alamat,$logo);
    if($status_update)
    {
        header('Location:index.php');
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
                <h3>Update Data Sekolah</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $data_sekolah['id']; ?>"/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data_sekolah['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_sekolah['alamat']; ?>" name="alamat" class="form-control" id="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                    <div class="col-sm-10">
                        <td><input type="file" name="logo"></td>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logo" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>