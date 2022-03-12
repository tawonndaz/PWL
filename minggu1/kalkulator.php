<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$angka1 = $_POST['angka1'];
		$angka2 = $_POST['angka2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $angka1+$angka2;
			break;
			case 'kurang':
				$hasil = $angka1-$angka2;
			break;
			case 'kali':
				$hasil = $angka1*$angka2;
			break;
			case 'bagi':
				$hasil = $angka1/$angka2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h1 class="judul">Kalkulator</h1>
		<form method="post"> 
			<input type="number" name="angka1" class="angka" placeholder="Angka Pertama">
			<input type="number" name="angka2" class="angka" placeholder="Angka Kedua">
			<select class="opsi" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="number" value="<?php print $hasil; ?>" class="angka">
		<?php }else{ ?>
			<input type="number" value="0" class="angka">
		<?php } ?>			
	</div>
</body>
</html>