<?php session_start();
if (session_is_registered('id'))
{
	$_SESSION['id'];
	$_SESSION['user'];
	
	?>
	<html>
	<head>
		<title>Halaman Admin</title>
		<link rel="icon" href="../images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="../css/table.css" media="screen">
		
	</head>
	<body>
	<?php
//membuat koneksi database
$host="localhost";
$user="blackant_admin";
$password="bacs140108";
$database="blackant_blackant";
$conn=mysql_connect($host,$user,$password);
mysql_select_db($database,$conn);
//cek koneksi
if($conn){
	echo "   ";
	}else{
	echo "Gagal koneksi";
	}
$query=mysql_query("select * from biodata");
$jumlah=mysql_num_rows($query);?>

<div id="tabel">
	<div>
	<h2 style="font: bold 20px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;"> Selamat Datang dihalaman Administrator </h2>
	</div><div style="font: normal 14px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;">
	<?php
echo "Jumlah data ada : ".$jumlah;
	
?></div>
<table id=mytable cellspacing="0" style="margin-top:10px; width:2000px;" >
<tr>
<td width="5px" class=specalt ><center>No.</center></td>
<td width="50px" class=alt ><center>Nama</center></td>
<td width="50px" class=alt ><center>Usaha</center></td>
<td width="50px" class=alt ><center>Alamat</center></td>
<td width="50px" class=alt ><center>Telp</center></td>
<td width="20px" class=alt ><center>Email</center></td>
<td width="50px" class=alt ><center>Jenis</center></td>
<td width="50px" class=alt ><center>Target</center></td>
<td width="50px" class=alt ><center>Visi</center></td>
<td width="50px" class=alt ><center>Warna</center></td>
<td width="50px" class=alt ><center>Paket</center></td>
<td width="50px" class=alt ><center>Pesan</center></td>
<td width="35px" class=alt ><center>Aksi</center></td>
</tr>
<?php
while ($row=mysql_fetch_array($query)){
?>
<tr>
<td width="5px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;border-left: 1px solid #ccc;"><center><?php echo $c=$c+1;?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['nama'];?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['usaha'];?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['alamat'];?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['telp'];?></center></td>
<td width="20px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['email'];?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['jenis'];?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['target'];?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['visi'];?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['warna'];?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['paket'];?></center></td>
<td width="50px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center><?php echo $row['pesan'];?></center></td>
<td width="35px" style="background:#fff; font: bold 11px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;padding: 2px;text-align: center;color: #000;"><center>
	<a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm ('Apakah anda yakin ?')" >Delete</a>
</center></td>
</tr>
<?php
}
?>		

</table><br />
<a href="../pesan/logout.php">Logout</a> 
</div>
	</body>
	</html>
<?php
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="login.php";
	</script>
	<?php
}
?>