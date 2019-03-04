

<?php
session_start();
error_reporting(0);

  $masuk = $_POST['masuk'];
  if($masuk == "LOGIN"){


     $user = $_POST['user'];
     $pass = $_POST['pass'];
     
     $hash = md5("$user:$pass");
     
     include("controller/db_config.php");

     $filter = mysql_query("SELECT * FROM admin where hash='$hash' ");
     $login = mysql_fetch_array($filter);
     if($login){
          $_SESSION['user'] = $user;


?>       
           <script text="javascript">
             document.location='http://localhost/dorne/MYPROJECT/index2.php'
         </script>
<?php
     }else{
?>
         <script text="javascript">
             alert('Username Dan Password yang anda masukan salah');
             document.location='http://localhost/dorne/MYPROJECT/index.php'
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

<title>TOUR AND TRAVEL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 <body>
   <div class="container">
  <br>
       <form action="index.php" method="post">
   <h2>LOGIN!!!</h2><br>

   <label>Username :</label>
   <input type="text" name="user" placeholder="username...">

   <label>Password :</label>
   <input type="password" name="pass" placeholder="password...">

   <center><input type="submit" name="masuk" value="LOGIN">

      				<input type="submit" name="kembali" value="Kembali">
    </form>
    <div class="login100-more" style="background-image: url('images/hero-1.jpg');">
        </div>
   </div>
</body>