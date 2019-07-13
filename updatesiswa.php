<?php

$mapelDapat = $_POST['mapel'];
$namaDapat = $_POST['nama'];
$nilaiPDapat = $_POST['nilai_p'];
$nilaiKDapat = $_POST['nilai_k'];
$nilaiUtsDapat = $_POST['nilai_uts'];
$nilaiUasDapat = $_POST['nilai_uas'];
$kelasDapat = $_POST['kelas'];
$nisDapat = $_POST['nis'];
$nilaiRataDapat ="";
$predikatPDapat ="";
$predikatKDapat ="";
$keteranganDapat ="";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_nilai";

$linkKeTable = "</br><a href='viewallsiswa.php'>Back</a>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		$predikatPDapat = predikat($nilaiPDapat);
		$predikatKDapat = predikat($nilaiKDapat);

		$nilaiRataDapat = ($nilaiPDapat +$nilaiKDapat +$nilaiUtsDapat+$nilaiUasDapat)/4;

		
		if($nilaiRataDapat>=70){
			$keteranganDapat = "Lulus";
		}else{
			$keteranganDapat = "TidakLulus";
		}

$sql = "UPDATE table_nilai SET mapel='$mapelDapat',
nama='$namaDapat',
nilai_p=$nilaiPDapat,
nilai_k=$nilaiKDapat,
nilai_uts=$nilaiUtsDapat,
nilai_uas=$nilaiUasDapat,
rata_rata=$nilaiRataDapat,
predikat_p='$predikatPDapat',
predikat_k='$predikatKDapat',
keterangan='$keteranganDapat',
kelas='$kelasDapat' WHERE nis=$nisDapat";

if ($conn->query($sql) === TRUE) {
    $content1 = "<h1>Record updated! successfully</h1>";
	$content2 = $linkKeTable;
} else {
    $content1 = "Error: " . $sql . "<br>" . $conn->error;
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
<title>Update</title>
<link rel="stylesheet" href="update.css"/>
</head>
<body>

<center>
<div id="content">
<?= $content1 ?> 
<?= $content2 ?> 
</div>
</center>
</body>
</html>