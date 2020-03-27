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
	echo "Berhasil koneksi";
	}else{
	echo "Gagal koneksi";
	}


$id=$_GET['id'];
$query=mysql_query("delete from biodata where id='$id' ");
if($query){
?><script language="javascript">document.location.href="home.php";</script><?php
}else{
echo "gagal hapus data";
}	
?>