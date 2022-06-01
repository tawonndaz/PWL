<?php 
	include __DIR__ . "/../process/crud.php"; 
	$process = new Process();
	$q = get('q');
	$all = $process->tampil($q,$koneksi);

	if(isset($_GET['hapus'])) {
	    $id = $_GET['hapus'];
	    $status_hapus = $process->delete($id,$koneksi);
	    header('Location: index.php?p=datanama');
	}
?> 
<div class="px-3 px-lg-4">
	<a class="btn btn-primary float-end btn-lg mt-5" href="index.php?p=datanama&m=add">Tambah Baru</a> 
	<h2 class="fw-bold mt-1 mt-lg-2 float-start">Data Nama & ALamat</h2> 
	<div style="clear:both;" class="float-end"> 
		<form action="index.php?p=datanama&m=search" class="row mt-1"> 
			<div class="col-auto pe-0 mt">
				<input autocomplete="off" type="hidden" name="p" value="datanama"> 
				<input class="form-control form-control-lg mt-2" autocomplete="off" type="text" name="q" placeHolder="Type to search by Nama" value="<?php echo ($q);?>"> 
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-lg btn-primary mt-2">Search</button>
			</div>
		</form> 
	</div> 
	<div style="clear:both">&nbsp;</div> 
	<div class="mt-lg-4 table-responsive-md">
		<h4><?php echo $q!=""?"Hasil pencarian untuk '".($q)."'":"";?></h4> 
		<table class="table table-dark table-striped"> 
			<thead class="h3"> 
				<tr> 
					<th>No</th> 
					<th>Nama</th> 
					<th>Alamat</th> 
					<th>Foto</th> 
					<th colspan="4">Action</th> 
				</tr> 
			</thead> 
			<tbody class="h4"> 
			<?php 
				$i = 1; 
				foreach ($all as $key) { 
			?> 
				<tr> 
					<td><?php echo $i;?></td> 
					<td><?php echo $key['nama'];?></td> 
					<td><?php echo $key['alamat'];?></td>
					<td><img height="70px" class="rounded border zoom d-none d-lg-block" src="assets/images/<?php echo $key['logo'];?>">
					<img height="80px" class="rounded border d-block d-lg-none" src="assets/images/<?php echo $key['logo'];?>"></td> 
					<td>
						<a target="_blank" class="btn btn-lg btn-success mt-2" href="process/pdf.php?id=<?php echo $key['id'];?>">PDF</a>
						<a class="btn btn-lg btn-info mt-2" href="index.php?p=datanama&m=edit&id=<?php echo $key['id'];?>">Edit</a> 
						<a class="btn btn-lg btn-danger mt-2" onclick="return confirm('Hapus Data<?php echo $key['nama'];?>')" <a href="index.php?p=datanama&hapus=<?php echo $key['id'];?>">Hapus</a>
					</td> 
				</tr> 
			<?php 
					$i++; 
				} 
			?> 
			</tbody> 
		</table>
	</div>
</div>