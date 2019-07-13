<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_nilai";

$nisDidapat = $_GET['nis'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM table_nilai WHERE nis=$nisDidapat";

if ($conn->query($sql) === TRUE) {
    $content1 = "<h1>Record deleted successfully<h1> </br>";
    $content2 = "<a href='viewAllSiswa.php'>Back View All</a>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<html>
<head>
<title>Record Delete Siswa</title>
<link rel="stylesheet" href="deleteSiswa.css"/>
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