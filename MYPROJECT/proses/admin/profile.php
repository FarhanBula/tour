<?php
	$id = $_POST['id'];
	include"controller/db_config.php";
	$search = mysql_query("SELECT * FROM admin WHERE id ='$id'");
	$y = mysql_fetch_array($search);
	$name = $y["nama"];
	$username = $y["username"];
	$password = $y["password"];
?>


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>MY PROFILE </b></h3>
					<div class="avatar">
						<img src="assets/img/logo-user-png-4.png">
					</div>
					</center>
				</div>
			<div class="md-12">
				<form action="user" method="POST">
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Nama lengkap
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="name" readonly="" placeholder="Nama Lengkap..." required="" value="<?php echo $name  ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Username
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="Username" readonly="" placeholder="Username...." required="" value="<?php echo $username ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Password
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="password" readonly="" placeholder="Password..." required="" value="<?php echo $password ?>">
							<br><br><br>
						</div>
					</div>
				</div>
			</form>

</div>

			</div>
		</div>
	</div>
</div>