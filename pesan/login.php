<?php session_start();
if (isset($_POST['admin']))
{
	include ("conn.php");
	$user_name=htmlentities((trim($_POST['admin'])));
	$password=htmlentities(md5($_POST['kunci']));
	
	$login=mysql_db_query($db,"select * from admin where user='$user_name' and password='$password'",$koneksi);
	
	$cek_login=mysql_num_rows($login);
		if (empty($cek_login))
		{
			?><script language="javascript">
			alert("Maaf, Password Anda salah!!");
			document.location="login.php";
			</script><?php
		}
		else
		{
			//daftarkan ID jika user dan password BENAR
			while ($row=mysql_fetch_array($login))
			{
				$id=$row[0];
				session_register('id');
				session_register('user_name');
			}
			echo "<script> document.location.href='home.php'; </script>";
		}
}
?>


<html>
<title>Login</title>
<head>
<meta charset="utf-8">
<title>BakulTicket | Login</title>

<link rel="icon" href="../images/favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="../css/style-form.css" media="screen">

<script language="javascript">
function cek(){
	var user= document.getElementById('userid').value;
	var pass= document.getElementById('passwd').value;
	if(user.replace(/^\s+|\s+$/g, '')==''){
		alert('Username Harus Diisi!');
		return false;
	} 
	if(pass.replace(/^\s+|\s+$/g, '')==''){
		alert('Password Harus diisi!');
		return false;
	}
	return true;
}
</script>
</head>
<body>



<div id="container">
    <div id="atas">
        <h1 style="font: bold 22px Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;">Admin Login</h1>
    </div>  <!-- end of top-->
    
    <div id="leftSide">
    	<fieldset>
        	<legend>Login Details</legend>
            <form class="form" id="form2" name="form2" method="post" action="login.php">
            	<label for="username">Username</label>
                <div class="div_texbox">
                      <input name="admin" type="text" 
                      class="username" id="userid" value="" />
                </div>
                
            	<label for="password">Password</label>
                <div class="div_texbox">
          			<input name="kunci" type="password"
					class="password" id="passwd" value="" />
        		</div>
                
                <div class="button_div">
          			<input name="Submit" type="submit"
					onClick="return cek()" value="LOGIN" class="buttons" />
        		</div>
            </form>
            <div class="clear"></div>
        </fieldset>
    </div>  <!-- end og leftside-->
</div>  <!-- end of container-->




</body>
</html>