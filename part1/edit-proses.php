<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id	= $_POST['id'];	
	$nim		= $_POST['nim'];
	$nama		= $_POST['nama'];
	$alamat		= $_POST['alamat'];
	$kom		= $_POST['kom'];	
	$jurusan	= $_POST['jurusan'];
	$update = mysqli_query($koneksi,"UPDATE db_mahasiswa SET 
 nim='$nim', nama='$nama', alamat='$alamat', kom='$kom', jurusan='$jurusan'  WHERE id_mhs='$id'") or die(mysqli_error());

	if($update){
		echo '<h3>Data berhasil di update! ';	
		echo '<a href="index.php?id='.$id.'">Kembali</a>';
	}else{
		echo 'Gagal menyimpan data! ';
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';
	}
}else{	
	echo '<script>window.history.back()</script>';
}
?>
