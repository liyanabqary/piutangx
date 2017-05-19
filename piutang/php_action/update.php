<?php 

require_once 'db_connect.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	
	$id 			= $_POST['id'];
	$npwpd 			= $_POST['editnpwpd'];
	$thn_pajak 		= $_POST['editthn_pajak'];
	$jns_pajak 		= $_POST['editjns_pajak'];
	$nama_wp 		= $_POST['editnama_wp'];
	$tgl_sspd 		= $_POST['edittgl_sspd'];
	$no_sspd 		= $_POST['editno_sspd'];
	$pokok_bayar 	= $_POST['editpokok_bayar'];
	$denda 			= $_POST['editdenda'];
	$jml_bayar 		= $_POST['editjml_bayar'];
	$masa_denda 	= $_POST['editmasa_denda'];
	
	

	$sql = "UPDATE tbl_piutang SET npwpd='$npwpd', thn_pajak='$thn_pajak', jns_pajak='$jns_pajak', nama_wp='$nama_wp', tgl_sspd='$tgl_sspd', no_sspd='$no_sspd', pokok_bayar='$pokok_bayar', denda='$denda', jml_bayar='$jml_bayar', masa_denda='$masa_denda' WHERE id = $id";
	$query = $connect->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Successfully Added";		
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error while adding the member information";
	}

	// close the database connection
	$connect->close();

	echo json_encode($validator);

}