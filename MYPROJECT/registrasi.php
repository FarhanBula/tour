<?php
error_reporting(0);


$registrasi = $_POST['regis'];
if ($registrasi=="DAFTAR") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $hash = md5("$user:$pass");
    //echo "<br> $username";
    //echo "<br> $password";
    include "controller/db_config.php";

    $filter = mysql_query("INSERT INTO admin(username,password,hash,level) VALUES('$user','$pass','$hash','$level') ");
    $daftar = mysql_fetch_array($filter);
      if($cek >1){
        if($daftar ['level']=="user"){
          $_SESSION['user'] = $daftar['id'];
        }
?>
    	<script text="javascript">
    		alert('User Baru Berhasil Di tambahkan')
			document.location = 'http://localhost/dorne/MYPROJECT/index.php'
		</script>
<?php
    	  }else{
?>
		<script text="javascript">
    		alert('User Baru Gagal Di tambahkan')
			document.location = 'http://localhost/dorne/MYPROJECT/registrasi.php'
		</script>		

<?php
		}  
}

?>

<?php
    $kembali = $_POST['kembali'];
    if ($kembali == "Kembali") {
?>
   		<script text="javascript">
			document.location = 'http://localhost/dorne/index.php'
		</script>
<?php
    }
?>
   
 

<title>Registrasi</title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
  <body>
	<div class="container">
	<form action="registrasi.php" method="POST">
		<br>
			 <center><h2>SIGN-IN</h2></center><br>
			 <label>Username :</label>
   <input type="text" name="user" placeholder="username...">

   <label>Password :</label>
   <input type="password" name="pass" placeholder="password...">
<br>
<br>
				 <center><input type="submit" name="regis" value="DAFTAR">
				<input type="submit" name="kembali" value="Kembali"></center>


	</form>
</div>
</body>
</html>