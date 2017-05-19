<?php 

require_once 'db_connect.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$npwpd = $_POST['npwpd'];
	$thn_pajak = $_POST['thn_pajak'];
	$jns_pajak = $_POST['jns_pajak'];
	$nama_wp = $_POST['nama_wp'];
	$tgl_sspd = $_POST['tgl_sspd'];
	$no_sspd = $_POST['no_sspd'];
	$pokok_bayar = $_POST['pokok_bayar'];
	$denda = $_POST['denda'];
	$jml_bayar = $_POST['jml_bayar'];
	$masa_denda = $_POST['masa_denda'];
	

	$sql = "INSERT INTO tbl_piutang (npwpd, thn_pajak, jns_pajak, nama_wp, tgl_sspd, no_sspd, pokok_bayar, denda, jml_bayar, masa_denda) VALUES ('$npwpd','$thn_pajak','$jns_pajak','$nama_wp','$tgl_sspd','$no_sspd','$pokok_bayar','$denda','$jml_bayar','$masa_denda')";
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