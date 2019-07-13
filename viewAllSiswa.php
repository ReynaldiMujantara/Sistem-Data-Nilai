<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_nilai";
$linkKeHome = "</br><a href='home.html'>Back</a>";

$nomor = 1;

$dataHeadTable = "<table>
  <tr>
    <th>Nis</th>
    <th>Nama</th>
	<th>Nilai Pengetahuan</th>
	<th>Predikat Pengetahuan</th>
	<th>Nilai Keterampilan</th>
	<th>Predikat Keterampilan</th>
	<th>Nilai UTS</th>
	<th>Nilai UAS</th>
	<th>Rata - Rata</th>
	<th>Keterangan</th>
	<th>Kelas</th>
	<th>Delete</th>
	<th>Edit</th>
  </tr>";
  
  $datatr ="<tr> ";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT nis, 
nama, 
nilai_p, 
predikat_p, 
nilai_k, 
predikat_k, 
nilai_uts, 
nilai_uas, 
rata_rata, 
keterangan, 
kelas, mapel FROM table_nilai";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nisSiswa = $row['nis'];
		$namaSiswa = $row['nama'];
		$nilai_p = $row['nilai_p'];
		$nilai_k = $row['nilai_k'];
		$predikat_k = $row['predikat_k'];
		$predikat_p = $row['predikat_p'];
		$nilai_uts = $row ['nilai_uts'];
		$nilai_uas = $row ['nilai_uas'];
		$rata_rata = $row ['rata_rata'];
		$keterangan = $row ['keterangan'];
		$kelas = $row ['kelas'];
		$mapel = $row ['mapel'];
		$datatr = $datatr . "<tr>";
		
		$datatr = $datatr . "<td><input type='button' id='nis$nomor' readonly value='$nisSiswa'></td>";
		$datatr = $datatr . "<td><input type='button' id='nama$nomor'  value='$namaSiswa'></td>";
		$datatr = $datatr . "<td><input type='button' id='nilai_p$nomor'  value='$nilai_p'></td>";	
		$datatr = $datatr . "<td><input type='button' id='predikat_p$nomor' readonly value='$predikat_p'></td>";	
		$datatr = $datatr . "<td><input type='button' id='nilai_k$nomor'  value='$nilai_k'></td>";	
		$datatr = $datatr . "<td><input type='button' id='predikat_k$nomor' readonly value='$predikat_k'></td>";	
		$datatr = $datatr . "<td><input type='button' id='nilai_uts$nomor'  value='$nilai_uts'></td>";	
		$datatr = $datatr . "<td><input type='button' id='nilai_uas$nomor'  value='$nilai_uas'></td>";	
		$datatr = $datatr . "<td><input type='button' id='rata_rata$nomor' readonly value='$rata_rata'></td>";	
		$datatr = $datatr . "<td><input type='button' id='keterangan$nomor' readonly value='$keterangan'></td>";	
		$datatr = $datatr . "<td><input type='button' id='kelas$nomor' value='$kelas'></td>";	
		$datatr = $datatr . "<td><input type='button' id='mapel$nomor'  value='$mapel'></td>";	

		$datatr = $datatr . "<td><a href='deleteSiswa.php?nis=$nisSiswa'>Delete</a></td>";
		//$datatr = $datatr . "<td><a href='editSiswa.php?nis=$nisSiswa'>Edit</a></td>";
		$datatr = $datatr . "<td><a href='#' onClick = 'aksiEdit(this,$nomor)' status = 'edit' id='tombol_edit$nomor' >Edit</a></td>";
		$datatr = $datatr . "</tr>";
		
		$nomor++;
    }
	$dataHeadTable = $dataHeadTable . $datatr . "</table>";
} else {
    echo "0 results";
}
$conn->close();
//echo $dataHeadTable;
//echo $linkKeHome;
?>
<html>
<head>
<title>Data Product</title>
<link rel="stylesheet" href="viewAllSiswa.css">
<script src="jquery-3.3.1.min.js"></script>
<script src="myFunction.js"></script>
</head>
<body>
<table>
	<tr>
		<th>Nis</th>
		<th>Nama</th>
		<th>Nilai Pengetahuan</th>
		<th>Predikat Pengetahuan</th>
		<th>Nilai Keterampilan</th>
		<th>Predikat Keterampilan</th>
		<th>Nilai UTS</th>
		<th>Nilai UAS</th>
		<th>Rata - Rata</th>
		<th>Keterangan</th>
		<th>Kelas</th>
		<th>Mapel</th>
		<th>Delete</th>
		<th>Edit</th>
  </tr>
  <tr>
	<?= $datatr?>
  </tr>	
</table>
<center>
<?= $linkKeHome?>
</center>

</body>
</html>