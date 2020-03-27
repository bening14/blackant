<?php
//membuat koneksi database
$host="localhost";
$user="blackant_admin";
$password="bacs140108";
$database="blackant_blackant";
$conn=mysql_connect($host,$user,$password);
mysql_select_db($database,$conn);
//cek koneksi
//menyimpan data yang dikirim

$nama=$_POST['nama'];
$usaha=$_POST['usaha'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$email=$_POST['email'];
$jenis=$_POST['jenis'];
$target=$_POST['target'];
$visi=$_POST['visi'];
$warna=$_POST['warna'];
$paket=$_POST['paket'];
$pesan=$_POST['pesan'];

//membuat variable lalu isikan dengan data
$query=mysql_query ("insert into biodata(nama, usaha, alamat, telp, email, jenis, target, visi, warna, paket, pesan) value('$nama','$usaha','$alamat','$telp','$email','$jenis','$target','$visi','$warna','$paket','$pesan')");
//menyimpan data



if($query){
?>
	<script language="javascript">
	alert("Data anda telah tersimpan di database kami, terima kasih atas kepercayaan anda");
	document.location="../index.html";
	</script>
<?php	
	}
	else{
?>	
	<script language="javascript">
	alert("Mohon maaf, telah terjadi kesalahan, data anda belum tersimpan di database kami, silahkan melakukan pengisian ulang form");
	document.location="form.php";
	</script>
<?php	
	
	echo mysql_error();}
?>