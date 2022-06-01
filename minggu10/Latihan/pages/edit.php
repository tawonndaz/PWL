<?php 
	$hasil = $koneksi->prepare("SELECT * FROM sekolah WHERE `id` = '".get('id')."'"); 
	$hasil->execute(); 
	$data = $hasil->fetch(PDO::FETCH_ASSOC); 
?> 
<form method="POST" action="" enctype="multipart/form-data" class="h2 mt-3"> 
	<h1 class="fw-bold text-decoration-underline">EDIT DATA</h1> 
	<input type="hidden" name="id" value="<?php echo $data['id'];?>"> 

	<label class="form-label mt-3">Nama :</label>
	<input type="text" name="nama" class="form-control form-control-lg" value="<?php echo $data['nama'];?>">

	<label class="form-label mt-3">Alamat :</label>
	<input type="text" name="alamat" class="form-control form-control-lg" value="<?php echo $data['alamat'];?>">

	<label class="form-label mt-3">Foto :</label><br>
	<img height="80px" class="rounded border zoom" src="assets/images/<?php echo $data['logo'];?>">
	<input type="file" class="form-control form-control-lg mt-2" name="logo">		
	
	<button type="submit" name="submit" class="btn btn-lg btn-success mt-4">Update</button>
</form>
<?php
require_once "process/crud.php"; 
$process = new Process();
if (isset($_POST['submit'])) {
	$process->update(post('id'),post('nama'),post('alamat'),'logo',$koneksi);
	header("location:index.php?p=datanama"); 
}
?>