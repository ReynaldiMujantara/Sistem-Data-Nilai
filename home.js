$(document).ready(function(){
	$("#tableSiswa").click(function(){
	$("#tableSiswa").fadeOut(1000, function(){
	window.location.href="insertSiswa.html";
	
	});
	});
	
	$("#viewAll").click(function(){
	$("#viewAll").fadeOut(1000, function(){
		window.location.href="viewAllSiswa.php";
	});
	});
});
//window.location.href="insertSiswa.html";
//window.location.href="viewAllSiswa.php";