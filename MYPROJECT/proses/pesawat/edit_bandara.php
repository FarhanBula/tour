<?php
	$id = $_POST['id'];
	include"controller/db_config.php";
	$search = mysql_query("SELECT * FROM airport WHERE name ='$id'");
	$y = mysql_fetch_array($search);
	$bandara = $y["name"];
	$kd_bandara = $y["code"];
	$kota = $y["city"];
?>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>EDIT DATA BANDARA</b></h3></center>
				</div>
			<div class="md-12">
				<form action="bandara" method="POST">
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Bandara
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="bandara" readonly="" placeholder="Bandara..." required="" value="<?php echo $bandara  ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Kode
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="kd_bandara" placeholder="Masukkan Kode Bandara...." required="" value="<?php echo $kd_bandara ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Kota
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="kota" placeholder="Masukkan Nama Kota..." required="" value="<?php echo $kota ?>">
						</div>
					<div class="baris">
						<div class="kolom-25">
					</div>
						<div class="kolom-75">
							<input type="submit" value="Edit" name="Ubah" class="btn btn-danger">
						</div>
					</div>
				</div>
			</form>

</div>

			</div>
		</div>
	</div>
</div>