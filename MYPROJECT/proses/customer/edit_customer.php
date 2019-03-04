<?php
	$id = $_POST['id'];
	include"controller/db_config.php";
	$search = mysql_query("SELECT * FROM customer WHERE id ='$id'");
	$y = mysql_fetch_array($search);
	$name = $y["name"];
	$email = $y["email"];
	$city = $y["city"];
	$county = $y["county"];
?>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>EDIT DATA CUSTOMER </b></h3></center>
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
							<input type="text" class="form-element" name="name" readonly="" placeholder="Masukkan Nama Lengkap..." required="" value="<?php echo $name  ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Email
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="email" placeholder="Masukkan Email...." required="" value="<?php echo $email ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Kota
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="city" placeholder="Masukkan Nama Kota..." required="" value="<?php echo $city ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								NEGARA
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="county" placeholder="Masukkan Nama Negara..." required="" value="<?php echo $county ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
					</div>
						<div class="kolom-75">
							<input type="submit" value="Edit" name="Ubah" class="btn btn-danger">
						</div>
						<br><br><br><br><br>
					</div>
				</div>
			</form>

</div>

			</div>
		</div>
	</div>
</div>