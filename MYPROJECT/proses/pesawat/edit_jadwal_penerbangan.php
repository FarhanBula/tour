<?php
	$id = $_POST['id'];
	include"controller/db_config.php";
	$search = mysql_query("SELECT * FROM flight WHERE form ='$id'");
	$y = mysql_fetch_array($search);
	$asal = $y["form"];
	$tujuan = $y["dest"];
	$waktu_berangkat = $y["depart_time"];
	$waktu_tiba = $y["arriv_time"];
	$id_pesawat = $y["airplane_id"];
?>


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>EDIT JADWAL PENERBANGAN</b></h3></center>
				</div>
			<div class="md-12">
				<form action="jadwal_penerbangan" method="POST">
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								ASAL
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="asal" placeholder="Asal......" required="" readonly="" value="<?php echo $asal ; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								TUJUAN
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="tujuan" placeholder="Masukkan Tujuan......." required="" value="<?php echo $tujuan; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								WAKTU KEBERANGKATAN
							</label>
						</div>
						<div class="kolom-75">
							<input type="time" class="form-element" name="waktu_berangkat" placeholder="Masukkan Waktu Keberangkatan......." required="" value="<?php echo $waktu_berangkat; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								WAKTU TIBA
							</label>
						</div>
						<div class="kolom-75">
							<input type="time" class="form-element" name="waktu_tiba" placeholder="Masukkan Waktu Tiba......." required="" value="<?php echo $waktu_tiba; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								ID PESAWAT
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="id_pesawat" placeholder="Masukkan ID PESAWAT..." required="" value="<?php echo $id_pesawat; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
					</div>
						<div class="kolom-75">
							<input type="submit" value="Edit" name="Ubah" class="btn btn-danger">
						</div>
						<br><br><br><br><br><br>
					</div>
				</div>
			</form>

</div>

			</div>
		</div>
	</div>
</div>