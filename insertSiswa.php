<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_nilai";

$nisDapat = $_POST['nis'];
$mapelDapat = $_POST['mapel'];
$namaDapat = $_POST['nama'];
$nilaiPDapat = $_POST['nilai_p'];
$predikatPDapat ="";
$nilaiKDapat = $_POST['nilai_k'];
$predikatKDapat ="";
$nilaiUtsDapat = $_POST['nilai_uts'];
$nilaiUasDapat = $_POST['nilai_uas'];
$keteranganDapat ="";
$nilaiRataDapat ="";
$kelasDapat = $_POST['kelas'];

$inputBerhasil = "Data Yang Anda Masukan Berhasil";
$balikInsert = "</br><a href='insertSiswa.html'>Back </a>";
$viewAllSiswa = "</br><a href='viewAllSiswa.php'>View All </a>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		$predikatPDapat = predikat($nilaiPDapat);
		$predikatKDapat = predikat ($nilaiKDapat);

		$nilaiRataDapat = ($nilaiPDapat +$nilaiKDapat +$nilaiUtsDapat+$nilaiUasDapat)/4;

		
		if($nilaiRataDapat>=70){
			$keteranganDapat = "Lulus";
		}else{
			$keteranganDapat = "TidakLulus";
		}
$sql = "INSERT INTO table_nilai (nis,
 nama,
 nilai_p,
 predikat_p,
 nilai_k,
 predikat_k, 
 nilai_uts,
 nilai_uas,
 rata_rata,
 keterangan,
 mapel,
 kelas)
VALUES ($nisDapat, 
'$namaDapat', 
$nilaiPDapat,
'$predikatPDapat', 
$nilaiKDapat,
'$predikatKDapat',
 $nilaiUtsDapat,
 $nilaiUasDapat,
 $nilaiRataDapat,
 '$keteranganDapat',
 '$mapelDapat',
 '$kelasDapat')";

if ($conn->query($sql) === TRUE) {
    $content1="<h1>Data Yang Anda Masukan Telah Berhasil<h1></br>";
	$content="$viewAllSiswa";
} else {
    $content1="<h1>Nis Yang Anda Masukan Sudah Ada Yang Menggunakan Mohon Cek Kembali<h1>";
	$content="$balikInsert";
}

 

$conn->close();
function predikat($nilaiMasuk){
	if ($nilaiMasuk >= 90)
        {
          $predikatHasil = "A";
          
		  
        }
        else if ($nilaiMasuk  >= 80)
        {
          $predikatHasil = "B";
        
        }
        else if ($nilaiMasuk  >= 75)
        {
          $predikatHasil = "C";
          
        }
        else if ($nilaiMasuk  >= 60)
        {
          $predikatHasil = "D";
          
        }
        else
        {
          $predikatHasil = "D";
           
        }
		return $predikatHasil;
}

?>
<html>
<head>
<title>Record Insert Siswa</title>
<link rel="stylesheet" href="insertSiswaPhp.css"/>
</head>
<body>
<center>
<div id="content">
<?=$content1?>
<?=$content?>
</div>
</center>
</body>
</html>