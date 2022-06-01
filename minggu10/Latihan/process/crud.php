<?php 
class Process {
	public function tampil($q,$koneksi) {
		$addonq = ''; 
		if($q!=""){ 
			$addonq = " WHERE nama LIKE '%".$q."%'"; 
		} 
		$hasil = $koneksi->prepare("SELECT * FROM sekolah ".$addonq." ORDER BY id DESC"); 
		$hasil->execute(); 
		$data = $hasil->fetchAll(); 
		return $data;
	}
	public function add($nama,$alamat,$image,$koneksi) {
		$logo = ""; 
		if($_FILES[$image]['tmp_name']!="") { 
			$tmp_logo = $_FILES[$image]['tmp_name']; 
			$logo = $_FILES[$image]['name']; 
			move_uploaded_file($tmp_logo, __DIR__ . "/../assets/images/".$logo);
		} 
		$simpan = $koneksi->prepare("INSERT INTO sekolah (`nama`,`alamat`,`logo`) VALUES ('".$nama."','".$alamat."','".$logo."')"); 
		$simpan->execute();  
	}
	public function update($id,$nama,$alamat,$image,$koneksi) {
		$update_logo = ""; 
		if($_FILES[$image]['tmp_name']!="") { 
			$tmp_logo = $_FILES[$image]['tmp_name']; 
			$logo = $_FILES[$image]['name']; 
			move_uploaded_file($tmp_logo, __DIR__ . "/../assets/images/".$logo); 
			$update_logo = ",`logo`='".$logo."'"; 
		} 
		$simpan = $koneksi->prepare (
			"UPDATE sekolah SET 
				`nama`='".$nama."', 
				`alamat`='".$alamat."' 
				".$update_logo." 
			WHERE 
				`id` ='".$id."'"
		); 
		$simpan->execute(); 
	}
	public function delete($id,$koneksi) {
		$hapus = $koneksi->prepare("DELETE FROM sekolah WHERE `id` = '".$id."'"); 
		$hapus->execute(); 
	}
}
?>