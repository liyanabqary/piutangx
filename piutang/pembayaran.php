<?php include('atas.php'); ?>
<!-- INI BATASNYA DATA AWAL -->


<?php if(isset($_GET['data'])){ ?>
<br />
<br />
<br />
<br />
<br />
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Piutang</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


<br/>
<br/>

<form name="form1" id="status_wp"action="" method="get" class="niceform" enctype="multipart/form-data">
	<table class="table-hover">
		
		<tr>
			<align="left"><h5>Status WP</h5>
			<td><select type="filter" name="status_wp" class="form-control" width="20%" onchange="document.getElementById('status_wp').submit()">
			<option value=""> --- Pilih Status --- </option>
				<option value="Aktif">Aktif</option>
				<option value="Pasif">Pasif</option>
			</select></td>	
		</tr>
	</table>	
</form>	

<form name="form1" id="jns_pajak"action="" method="get" class="niceform" enctype="multipart/form-data">
	<table class="table-hover">
		
		<tr>
			<align="left"><h5>Jenis Pajak</h5>
			<td><select type="filter" name="jns_pajak" class="form-control" width="20%" onchange="document.getElementById('status_wp').submit()">
			<option value=""> --- Pilih Status --- </option>
				<option value="#">Hotel</option>
				<option value="#">Restaurant</option>
				<option value="#">Reklame</option>
				<option value="#">Hiburan</option>
				<option value="#">Parkir</option>
				<option value="#">Penerangan Jalan</option>
				<option value="#">Air Bawah Tanah</option>
				<option value="#">Minerba</option>
				<option value="#">Sarang Burung Walet</option>
				
			</select></td>	
		</tr>
	</table>	
</form>

<form name="form1" id="jns_pajak"action="" method="get" class="niceform" enctype="multipart/form-data">
	<table class="table-hover">
		
		<tr>
			<align="left"><h5>Masa Pajak</h5>
			<td><select type="filter" name="masa_pajak" class="form-control" width="20%" onchange="document.getElementById('status_wp').submit()">
			<option value=""> --- Pilih Masa Pajak --- </option>
				<option value="#">Januari</option>
				<option value="#">Februari</option>
				<option value="#">Maret</option>
				<option value="#">April</option>
				<option value="#">Mei</option>
				<option value="#">Juni</option>
				<option value="#">Juli</option>
				<option value="#">Agustus</option>
				<option value="#">September</option>
				<option value="#">Oktober</option>
				<option value="#">Nopember</option>
				<option value="#">Desember</option>
				
			</select></td>	
		</tr>
	</table>	
</form>


<form name="form1" id="jns_pajak"action="" method="get" class="niceform" enctype="multipart/form-data">
	<table class="table-hover">
		
		<tr>
			<align="left"><h5>Tahun Pajak</h5>
			<td><select type="filter" name="thn_pajak" class="form-control" width="20%" onchange="document.getElementById('status_wp').submit()">
			<option value=""> --- Pilih Tahun Pajak --- </option>
				<option value="#">2014</option>
				<option value="#">2015</option>
				<option value="#">2016</option>
				<option value="#">2017</option>
			</select></td>	
		</tr>
	</table>	
</form>		


<br/>
<br/>
</center>
<a href="?tambah";>
	<button type="button" class="btn btn-default">
		<span class="glyphicon glyphicon-plus"></span> Input Data Piutang
	</button>
</a>
<br/>
<br/>

<table  class="table table-striped table-bordered table-hover" id="example">
	<thead>
		<tr align="center" style="background-color:orange;">
		
			<td><strong>No</td>
			<td><strong>Npwpd</td>
			<td><strong>Jenis Pajak</td>
			<td><strong>Masa Pajak</td>
			<td><strong>Tahun Pajak</td>
			<td><strong>Kode Pajak</td>
			<td><strong>Nama Wajib Pajak</td>
			<td><strong>Tanggal SSPD</td>
			<td><strong>No.SSPD</td>
			<td><strong>Pokok Bayar</td>
			<td><strong>Denda</td>
			<td><strong>Jumlah Bayar</td>
			<td><strong>Status WP</td>
			<td width="10%"><strong>Action</td>
		<strong>
		</tr>
	</thead>
	<tbody>
	
	
<?php
	$sql="select * from tbl_piutang order by id desc"; 
	$rs=mysql_query($sql); 
	$no=1;
	while($row=mysql_fetch_array($rs)){

	
?>

<tr>
 	<td align="center"><?php echo $no; ?></td>
	<td align="center"><?php echo $row['1']; ?></td>
	<td align="center"><?php echo $row['2']; ?></td>
	<td align="center"><?php echo $row['3']; ?></td>
	<td align="center"><?php echo $row['4']; ?></td>
	<td align="center"><?php echo $row['5']; ?></td>
	<td align="center"><?php echo $row['6']; ?></td>
	<td align="center"><?php echo $row['7']; ?></td>
	<td align="right"> <?php echo "Rp.",""?><?php echo $row ['8'];?></td>
	<td align="right"><?php echo "Rp.",""?><?php echo $row ['9'];?></td>
	<td align="right"><?php echo "Rp.",""?><?php echo $row ['10'];?></td>
	<td align="center"><?php echo $row['11']; ?></td>
	<td align="center"><?php echo $row['12']; ?></td>

<!-- edit dan hapus ini jangan di rubah, biar enak, usahakan setiap nama id pakai id saja, jangan ada embel2 lain -->
	<td>
		<a href="?edit&id=<?php echo $row['0']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
		<a href="?hapus&id=<?php echo $row['0']; ?>" onclick="return confirm('Yakin Mau Hapus?');" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
	</td>
<!-- INI BATASNYA -->
</tr>
<?php $no++; } ?>
	</tbody>
</table>
<?php } ?>
<!-- INI BATASNYA DATANYA -->

<!-- INI KALAU MAU HAPUS -->
<?php
	if(isset($_GET['hapus'])){
		$id=$_GET['id'];
		$sql="delete from tbl_piutang where id='$id'"; 
		mysql_query($sql);
		echo '<script type="text/javascript">
			//<![CDATA[
			window.location="?data"
			//]]>
		</script>';
	}
?>

<!-- INI BATASNYA HAPUS -->

<!-- INI KALAU MAU EDIT -->
<?php if(isset($_GET['edit'])){ ?>
<?php
$sql="select * from tbl_piutang where id='$_GET[id]'";
$rs=mysql_query($sql);
$row=mysql_fetch_array($rs);
 { ?>
 
<br />
<br />
<br />
<br/>
<br/>
<br/>



<form action="" method="post" class="niceform" enctype="multipart/form-data">
<table class="table-hover">
	<tr class="warning">
		<td colspan="6" ><center><h3><strong>Edit Data Piutang</strong><h3></td>
	</tr>
	
		<tr>
			<td align="left"><h4>Npwpd</td>
			<td><input type="text" name="npwpd" class="form-control" size="50" value="<?php echo $row['1'];?>" required/></td>
		</tr>
		
		<tr>
		<td align="left"><h4>Jenis Pajak</td>
		<td><select type="text" name="jns_pajak" class="form-control" value="<?php echo $row['2'];?>">
			  <option value="_">-- Pilih Jenis Pajak --</option>
				<option value="Hotel">Hotel</option>
				<option value="Restaurant">Restaurant</option>
				<option value="Reklame">Reklame</option>
				<option value="Hiburan">Hiburan</option>
				<option value="Parkir">Parkir</option>
				<option value="Penerangan Jalan">Penerangan Jalan</option>
				<option value="Air Bawah Tanah">Air Bawah Tanah</option>
				<option value="Minerba">Minerba</option>
				<option value="Sarang Burung Walet">Sarang Burung Walet</option>
		</td>	  
		</select>
		</tr>
		
		<tr>
		<td align="left"><h4>Masa Pajak</td>
		<td><select type="text" name="masa_pajak" class="form-control" value="<?php echo $row['3'];?>">
			  <option value="_">-- Pilih Masa Pajak --</option>
				<option value="Januari">Januari</option>
				<option value="Februari">Februari</option>
				<option value="Maret">Maret</option>
				<option value="April">April</option>
				<option value="Mei">Mei</option>
				<option value="Juni">Juni</option>
				<option value="Juli">Juli</option>
				<option value="Agustus">Agustus</option>
				<option value="September">September</option>
				<option value="Oktober">Oktober</option>
				<option value="Nopember">Nopember</option>
				<option value="Desember">Desember</option>
		</td>	  
		</select>
		</tr>
		
		<tr>
		<td align="left"><h4>Tahun Pajak</td>
		<td><select type="text" name="thn_pajak" class="form-control" value="<?php echo $row['4'];?>">
		<option value="_">-- Pilih Tahun Pajak --</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>

		</td>	  
		</select>
		</tr>
		
		<tr>
			<td align="left"><h4>Kode Pajak</td>
			<td><input type="text" name="kode_pajak" class="form-control" size="54" value="<?php echo $row['5'];?>" required/></td>
		</tr>
		<tr>
		
		<tr>
			<td align="left"><h4>Nama Wajib Pajak</td>
			<td><input type="text" name="nama_wp" class="form-control" size="54" value="<?php echo $row['6'];?>" required/></td>
		</tr>
		
		<tr>
			<td align="left"><h4>Tanggal SSPD</td>
			<td><input type="date" name="tgl_sspd" class="form-control" size="54" value="<?php echo $row['7'];?>" required/></td>
		</tr>
		
		<tr>
			<td align="left"><h4>No.SSPD</td>
			<td><input type="text" name="no_sspd" class="form-control" size="54" value="<?php echo $row['8'];?>" required/></td>
		</tr>
				
		<tr>
			<td align="left"><h4>Pokok Bayar</td>
			<td><input type="text" name="pokok_bayar" class="form-control" size="54" value="<?php echo $row['9'];?>" required/></td>
		</tr>
			
			<tr>
			<td align="left"><h4>Denda</td>
			<td><input type="text" name="denda" class="form-control" size="54" value="<?php echo $row['10'];?>" required/></td>
		</tr>
		<tr>
		
		<tr>
			<td align="left"><h4>Jumlah Bayar</td>
			<td><input type="text" name="jml_byrdandenda" class="form-control" size="54" value="<?php echo $row['11'];?>" required/></td>
		</tr>
		<tr>
		
		<tr>
		<td align="left"><h4>Status Bayar</td>
		<td><select type="text" name="status_wp" class="form-control" value="<?php echo $row['12'];?>">
			  <option value="_">-- Pilih Status --</option>
			  <option value="Aktif">Aktif</option>
			  <option value="Pasif">Pasif</option>
		</td>	  
		</select>
		</tr>
		
	<tr>
		<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="EDIT" class="btn btn-primary"/></td>
		</tr>
</table>
</form>


<?php	} if(isset($_POST['submit'])){
	
	
		$id							=$_GET['id'];
		$npwpd					=$_POST['npwpd'];
		$jns_pajak				=$_POST['jns_pajak'];
		$masa_pajak			=$_POST['masa_pajak'];
		$thn_pajak				=$_POST['thn_pajak'];
		$kode_pajak			=$_POST['kode_pajak'];
		$nama_wp				=$_POST['nama_wp'];
		$tgl_sspd					=$_POST['tgl_sspd'];
		$no_sspd					=$_POST['no_sspd'];
		$pokok_bayar			=$_POST['pokok_bayar'];
		$denda						=$_POST['denda'];
		$jml_byrdandenda	=$_POST['jml_byrdandenda'];
		$status_wp				=$_POST['status_wp'];
		
	
		
		$sql="update tbl_piutang set npwpd='$npwpd', jns_pajak='$jns_pajak', masa_pajak='$masa_pajak', thn_pajak='$thn_pajak', kode_pajak='$kode_pajak', nama_wp='$nama_wp', tgl_sspd='$tgl_sspd', no_sspd='$no_sspd', pokok_bayar='$pokok_bayar', denda='$denda', jml_byrdandenda='$jml_byrdandenda', status_wp='$status_wp' where id='$id'";
		if(mysql_query($sql)){
				echo '<script type="text/javascript">
		//<![CDATA[
		alert ("Berhasil Edit");
		window.location="?data";
		//]]>
	</script>';
	} else {
	echo '<script type="text/javascript">
		//<![CDATA[
		alert ("Gagal Simpan");
		window.location="?data";
		//]]>
	</script>';}
		}
 ?>

<!-- INI BATASNYA EDIT -->

<!-- INI KALAU MAU NAMBAH -->

<?php } ?>

<?php if(isset($_GET['tambah'])){ ?>

<br />
<br />
<br />
<br/>
<br/>
<br/>

<form action="" method="post" class="niceform" enctype="multipart/form-data">
	<table class="table-hover">
		
		<tr class="warning">
			<td colspan="6" ><center><h3><strong>Input Data Piutang</strong></h3></td>
		</tr>
		
					
		<tr>
			<td align="left"><h4>Npwpd</h4></td>
			<td><input type="text" name="npwpd" class="form-control" size="50" required/></td>
		</tr>
		
		<tr>
		<td align="left"><h4>Jenis Pajak</td>
		<td><select type="text" name="jns_pajak" class="form-control">
			  <option value="_">-- Pilih Jenis Pajak --</option>
				<option value="Hotel">Hotel</option>
				<option value="Restaurant">Restaurant</option>
				<option value="Reklame">Reklame</option>
				<option value="Hiburan">Hiburan</option>
				<option value="Parkir">Parkir</option>
				<option value="Penerangan Jalan">Penerangan Jalan</option>
				<option value="Air Bawah Tanah">Air Bawah Tanah</option>
				<option value="Minerba">Minerba</option>
				<option value="Sarang Burung Walet">Sarang Burung Walet</option>
		</td>	  
		</select>
		</tr>
		
		<tr>
		<td align="left"><h4>Masa Pajak</td>
		<td><select type="text" name="masa_pajak" class="form-control">
			  <option value="_">-- Pilih Masa Pajak --</option>
				<option value="Januari">Januari</option>
				<option value="Februari">Februari</option>
				<option value="Maret">Maret</option>
				<option value="April">April</option>
				<option value="Mei">Mei</option>
				<option value="Juni">Juni</option>
				<option value="Juli">Juli</option>
				<option value="Agustus">Agustus</option>
				<option value="September">September</option>
				<option value="Oktober">Oktober</option>
				<option value="Nopember">Nopember</option>
				<option value="Desember">Desember</option>
		</td>	  
		</select>
		</tr>
		
		
		<tr>
		<td align="left"><h4>Tahun Pajak</td>
		<td><select type="text" name="thn_pajak" class="form-control">
			  <option value="_">-- Pilih Tahun Pajak --</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>

		</td>	  
		</select>
		</tr>
		

		<tr>
			<td align="left"><h4>Kode Pajak</td>
			<td><input type="text" name="kode_pajak" class="form-control" required/></td>
		</tr>
		
				<tr>
			<td align="left"><h4>Nama Wajib Pajak</td>
			<td><input type="text" name="nama_wp" class="form-control" required/></td>
		</tr>
		
		<tr>
			<td align="left"><h4>Tanggal SSPD</td>
			<td><input type="date" name="tgl_sspd" class="form-control" required/></td>
		</tr>
		
		<tr>
			<td align="left"><h4>No.SSPD</td>
			<td><input type="text" name="no_sspd" class="form-control" required/></td>
		</tr>
		
		
		<tr>
		
			<td align="left"><h4>Pokok Bayar</td>
			<td><input type="text" name="pokok_bayar"  class="form-control" required/></td>
			
		</tr>
	
		
		<tr>
			<td align="left"><h4>Denda</td>
			<td><input type="text" name="denda" class="form-control" required/></td>
		</tr>
		
		
		<tr>
			<td align="left"><h4>Jumlah Bayar</td>
			<td><input type="text" name="jml_byrdandenda" class="form-control" required/></td>
		</tr>
		
		
		<tr>
		<td align="left"><h4>Status Bayar</td>
		<td><select type="text" name="status_wp" class="form-control">
			  <option value="_">-- Pilih Status --</option>
			  <option value="Aktif">Aktif</option>
			  <option value="Pasif">Pasif</option>
		</td>	  
		</select>
		</tr>
			
	<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="SIMPAN" class="btn btn-primary"/></td>
			</tr>
	</table>
</form>



<?php
if(isset($_POST['submit'])){
	
	

		$npwpd					=$_POST['npwpd	'];
		$jns_pajak				=$_POST['jns_pajak'];
		$masa_pajak				=$_POST['masa_pajak'];
		$thn_pajak				=$_POST['thn_pajak'];
		$kode_pajak				=$_POST['kode_pajak'];
		$nama_wp				=$_POST['nama_wp'];
		$tgl_sspd				=$_POST['tgl_sspd'];
		$no_sspd				=$_POST['no_sspd'];
		$pokok_bayar			=$_POST['pokok_bayar'];
		$denda					=$_POST['denda'];
		$jml_byrdandenda		=$_POST['jml_byrdandenda'];
		$status_wp				=$_POST['status_wp'];
	
			
		
	$sql="insert into tbl_piutang VALUES ('','$npwpd','$masa_pajak','$jns_pajak','$thn_pajak','$masa_denda','$nama_wp','$tgl_sspd','$no_sspd','$pokok_bayar','$denda','$jml_byrdandenda','$status_wp')";
	if(mysql_query($sql)){
	echo '<script type="text/javascript">
		//<![CDATA[
		alert ("Berhasil Simpan");
		window.location="?data";
		//]]>
	</script>';
	} else {
	echo '<script type="text/javascript">
		//<![CDATA[
		alert ("Gagal Simpan");
		window.location="?data";
		//]]>
	</script>';}
		}
?>
<?php } ?>

<!-- INI BATASNYA NAMBAH -->

<!-- INCLUDE ATAS.PHP DAN BAWAH.PHP JANGAN PERNAH DI HAPUS MESKIPUN BUAT BARU INGAT2 TING -->
<?php include('bawah.php'); ?>
