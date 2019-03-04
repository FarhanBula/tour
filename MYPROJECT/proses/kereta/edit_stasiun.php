<?php
	$id = $_POST['id'];
	include"controller/db_config.php";
	$search = mysql_query("SELECT * FROM train_station WHERE station_code ='$id'");
	$y = mysql_fetch_array($search);
	$kd_stasiun = $y["station_code"];
	$kota = $y["city"];
	$nm_stasiun = $y["station_name"];
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
				<form action="stasiun" method="POST">
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Kode Stasiun
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="kd_stasiun" readonly="" placeholder=" Masukan Kode Stasiun..." required="" value="<?php echo $kd_stasiun ; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Kota
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="kota" placeholder="Masukkan Nama Kota...." required="" value="<?php echo $kota ;?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Nama Stasiun
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="nm_stasiun" placeholder="Masukkan Nama Stasiun..." required="" value="<?php echo $nm_stasiun; ?>">
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