function set_action(acc, id, name){
	if(acc!=""){
		if(acc=="getdelete"){
			if (confirm("Anda Yakin Mau Menghapus Data "+name+" ?")==false){
				return false;
			}		
		} else if(acc=="batalkan_penugasan"){
			if (confirm("Anda Yakin Mau Membatalkan Data Penugasan "+name+" ?")==false){
				return false;
			}		
		} else if(acc=="getKill"){
			if (confirm("Anda Yakin Mau Kill Session User "+name+" ?")==false){
				return false;
			}		
		} else if(acc=="getInActive"){
			if (confirm("Anda Yakin Mau Menginaktifkan User "+name+" ?")==false){
				return false;
			}		
		} else if(acc=="restore_database"){
			if (confirm("Anda Yakin Untuk Restore Database per "+name+"?")==false){
				return false;
			}
		} 
		document.getElementById('data_action').value=acc;
		document.getElementById('data_id').value=id;
		document.f.submit();
	}else{
		document.getElementById('data_id').value=id;
		document.f.submit();
	}
}