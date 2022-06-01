<form method="POST" action="" enctype="multipart/form-data" class="h2 mt-3">
	<h1 class="fw-bold text-decoration-underline">TAMBAH DATA</h1> 

	<label class="form-label mt-3">Nama :</label>
	<input type="text" class="form-control form-control-lg" name="nama">

	<label class="form-label mt-3">Alamat :</label>
	<input type="text" class="form-control form-control-lg" name="alamat">

	<label class="form-label mt-3">Nama :</label>
	<input type="file" class="form-control form-control-lg" name="logo">

	<button type="submit" name="submit" class="btn btn-lg btn-success mt-4">Simpan</button>
</form>
<?php
require_once "process/crud.php"; 
$process = new Process();
if (isset($_POST['submit'])) {
	$process->add(post('nama'),post('alamat'),'logo',$koneksi);
	header("location:index.php?p=datanama"); 
}
?>