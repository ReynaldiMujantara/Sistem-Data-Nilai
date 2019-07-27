<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_nilai";
$linkKeHome = "</br><a href='home.html'>Back</a>";
$nisDidapat = $_GET ['nis'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT nis, mapel, nama, nilai_p, nilai_k, nilai_uts,
nilai_uas, kelas FROM table_nilai WHERE nis = $nisDidapat";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$nisDidapat = $row['nis'];
		$mapel =$row['mapel'] ;
		$nama =$row['nama'];	
		$nilai_p =$row['nilai_p'];
		$nilai_k =$row['nilai_k'];
		$nilai_uts =$row['nilai_uts'];
		$nilai_uas =$row['nilai_uas'];
		$kelas =$row['kelas'];
		
    }
	
	
	
} else {
    echo "0 results";
}

$conn->close();


?>
<html>
<head>
<title>Edit Siswa</title>
<!-- <link rel="stylesheet" href="editsiswa.css"> -->
<script src="cssobfuscatededit.js"></script>
</head>
<center>
<h1>Edit</h1>
<body>
<p>Silahkan Edit Siswa Dengan Benar</p>
<form action="updatesiswa.php" method="post">
<div id="formulir">
NIS:</br><input name="nis" class="textField" type="text" readonly="true" value="<?= $nisDidapat ?>"/></br>
Mapel:</br><select name="mapel" value="<?= $mapel ?>"/>
				<option value="DB">Database</option>
				<option value="PHP">PHP</option>
				<option value="Graphic">Graphic</option>
				<option value="Java D">Java D</option>
				<option value="Android">Android</option>
				<option value="B.Inggris">B.Inggris</option>
			</select></br>
Nama:</br><input name="nama" class="textField" type = "text" value="<?= $nama ?>" /></br>
Nilai Pengetahuan:</br><input name="nilai_p" class="textField" type="text" value="<?= $nilai_p ?>" /></br>
Nilai Keterampilan:</br><input name="nilai_k" class="textField" type="text" value="<?= $nilai_k ?>" /></br>
Nilai UTS:</br><input name="nilai_uts" class="textField" type="text" value="<?= $nilai_uts ?>" /></br>
Nilai Uas:</br><input name="nilai_uas" class="textField" type="text" value="<?= $nilai_uas ?>" /></br>
Kelas:</br>	<select name="kelas" value="<?= $kelas ?>">
				  <option value="RPL X-A">RPL X-A</option>
				  <option value="RPL X-B">RPL X-B</option>
				  <option value="RPL X-C">RPL X-C</option>
				  <option value="RPL XI-A">RPL XI-A</option>
				  <option value="RPL XI-B">RPL XI-B</option>
				  <option value="RPL XI-C">RPL XI-C</option>
				  <option value="RPL XII-A">RPL XII-A</option>
				  <option value="RPL XII-B">RPL XII-B</option>
				  <option value="RPL XII-C">RPL XII-C</option>
			</select></br>
<input class="textField" type="submit" value="Save"/>
</div>
</form>
</center>
</body>
</html>
