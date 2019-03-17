<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$show = mysqli_query($koneksi,"SELECT * FROM db_mahasiswa WHERE 
      id_mhs='$id'");
	if(mysqli_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysqli_fetch_assoc($show);
	}
	?>
	
<form action="edit-proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="container">
    <h1>Edit Data</h1>
    <p>Inputkan data mahasiswa dengan benar.</p>
    <hr>

    <label for="nim"><b>NIM</b></label>
    <input type="text" placeholder="Enter nim" name="nim" required value="<?php echo $data['nim']; ?>">
    
    <label for="nama"><b>Nama Lengkap</b></label>
    <input type="text" placeholder="Enter nama" name="nama" required value="<?php echo $data['nama']; ?>">

    <label for="alamat"><b>Alamat</b></label>
    <input type="text" placeholder="Enter alamat" name="alamat" required value="<?php echo $data['alamat']; ?>">

    <label for="kom"><b>KOM</b></label>
    <input type="text" placeholder="Enter kom" name="kom" required value="<?php echo $data['kom']; ?>">

    <label for="jurusan"><b>JURUSAN</b></label>
    <input type="text" placeholder="Enter jurusan" name="jurusan" required value="<?php echo $data['jurusan']; ?>">

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="simpan" class="registerbtn">Simpan</button>
  </div>
</form>

</body>
</html>
