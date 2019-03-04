<?php
	$id = $_POST['id'];
	include"controller/db_config.php";
	$search = mysql_query("SELECT * FROM train_journey WHERE depart_station ='$id'");
	$y = mysql_fetch_array($search);
	$stasiun_awal = $y["depart_station"];
	$stasiun_akhir = $y["arrival_station"];
	$no_kereta = $y["train_no"];
	$waktu_berangkat = $y["depart_time"];
	$waktu_tiba = $y["arrival_time"];
	$id_kereta = $y["train_id"];
?>


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>EDIT JADWAL KEBERANGKATAN KERETA API</b></h3></center>
				</div>
			<div class="md-12">
				<form action="jadwal_berangkat" method="POST">
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								STASIUN AWAL
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="stasiun_awal" placeholder="Masukan Nama Kereta..." required="" readonly="" value="<?php echo $stasiun_awal ; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								STASIUN AKHIR
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="stasiun_akhir" placeholder="Ekonomi...." required="" value="<?php echo $stasiun_akhir; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								NO KERETA
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="no_kereta" placeholder="Bisnis..." required="" value="<?php echo $no_kereta; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								WAKTU BERANGKAT
							</label>
						</div>
						<div class="kolom-75">
							<input type="time" class="form-element" name="waktu_berangkat" placeholder="First class..." required="" value="<?php echo $waktu_berangkat; ?>">
						</div>
					</div>					
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								WAKTU TIBA
							</label>
						</div>
						<div class="kolom-75">
							<input type="time" class="form-element" name="waktu_tiba" placeholder="IDR........" required="" value="<?php echo $waktu_tiba; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								ID KERETA
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="id_kereta" placeholder="ID KERETA...." required="" value="<?php echo $id_kereta; ?>">
						</div>
					</div>
					<div class="kolom-25"></div>
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