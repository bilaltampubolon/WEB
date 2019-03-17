<!DOCTYPE html>
<html>
<head>
<title>Sort a HTML Table Alphabetically</title>
<style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
</head>
<body>

<h3><p><a href="index.php">ADMIN</a></p>
	<p>Data Mahasiswa</p></h3>

<table id="myTable">
  <tr>
    <th>No.</th>
    <th>Nim</th>
    <th>Nama Lengkap</th>
    <th>Alamat</th>
    <th>Kom</th>
    <th>Jurusan</th>
  </tr>
  <?php
		include_once 'koneksi.php';
		$query = mysqli_query($koneksi, "SELECT * From db_mahasiswa order by nim desc") or die(mysqli_error());
		if (mysqli_num_rows($query) == 0) {
			echo "<tr align='center'><td colspan='6'>Tidak ada data !</td></tr>";
		} else {
			$no = 1;
			while ($data = mysqli_fetch_assoc($query)) {
				echo 	"<tr>".
						"<td>".$no."</td>".
						"<td>".$data['nim']."</td>".
						"<td>".$data['nama']."</td>".
						"<td>".$data['alamat']."</td>".
						"<td>".$data['kom']."</td>".
						"<td>".$data['jurusan']."</td>".
						$no++;
			}
		}
		
		?>
</table>

<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>

</body>
</html>
