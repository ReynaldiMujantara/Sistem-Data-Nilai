function tutupReadOnly(idElement){
	$('#'+idElement).prop('type','button');
}

function bukaReadOnly(idElement){
	$('#'+idElement).prop('type','text');
}


function aksiEdit(elemen, nomor){
	
	var statusSkarang = $(elemen).attr('status');
	
	if(statusSkarang=='edit'){
		//saat tombol akan editing
		//alert("saya saat ini " + statusSkarang);
		bukaReadOnly("nama"+nomor);
		bukaReadOnly("nilai_p"+nomor);
		bukaReadOnly("nilai_k"+nomor);
		bukaReadOnly("nilai_uts"+nomor);
		bukaReadOnly("nilai_uas"+nomor);
		bukaReadOnly("kelas"+nomor);
		bukaReadOnly("mapel"+nomor);
		
		
		
		$(elemen).attr('status', 'update');
		$('#tombol_edit'+nomor).text('Update');
	} else{
		//saat tombol akan updating
		var nilaiNama = $('#nama'+nomor).val();
		var nilaiMapel = $('#mapel'+nomor).val();
		var nilaiNilai_P = $('#nilai_p'+nomor).val();
		var nilaiNilai_K = $('#nilai_k'+nomor).val();
		var nilaiNilai_Uts = $('#nilai_uts'+nomor).val();
		var nilaiNilai_Uas = $('#nilai_uas'+nomor).val();
		var nilaiKelas = $('#kelas'+nomor).val();
		var nilaiNis = $('#nis'+nomor).val();
		
		$.ajax({
		  method: "POST",
		  url: "updatesiswa.php",
		  data: { mapel: nilaiMapel,
		  nama: nilaiNama,
		  nilai_p: nilaiNilai_P,
		  nilai_k: nilaiNilai_K,
		  nilai_uts:nilaiNilai_Uts,
		  nilai_uas:nilaiNilai_Uas,
		  kelas:nilaiKelas,
		  nis:nilaiNis }
		})
	  .done(function( msg ) {
		alert( "Data Tersimpan " );
		$(elemen).attr('status', 'edit');
		$('#tombol_edit'+nomor).text('Edit');
		
		tutupReadOnly("nama"+nomor);
		tutupReadOnly("nilai_p"+nomor);
		tutupReadOnly("nilai_k"+nomor);
		tutupReadOnly("nilai_uts"+nomor);
		tutupReadOnly("nilai_uas"+nomor);
		tutupReadOnly("kelas"+nomor);
		tutupReadOnly("mapel"+nomor);
		location.reload();
	  });
		
		}
	
	
	
	
	
}