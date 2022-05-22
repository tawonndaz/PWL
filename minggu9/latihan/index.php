<?php 
include('library.php');
$lib = new Library();
$data_sekolah = $lib->show();

if(isset($_GET['hapus_sekolah']))
{
    $id = $_GET['hapus_sekolah'];
    $status_hapus = $lib->delete($id);
    if($status_hapus)
    {
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
                <h3>Data Sekolah</h3>
            </div>
            <div class="card-body">
                <a href="form_add.php" class="btn btn-success">Tambah</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Logo</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_sekolah as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        echo "<td>".$row['logo']."</td>";
                        echo "<td><a class='btn btn-info' href='form_edit.php?id=".$row['id']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_sekolah=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>