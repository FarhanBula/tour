<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>INPUT JADWAL PENERBANGAN</b></h3></center>
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
							<input type="text" class="form-element" name="asal" placeholder="Asal......" required="">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								TUJUAN
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="tujuan" placeholder="Masukkan Tujuan......." required="">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								WAKTU KEBERANGKATAN
							</label>
						</div>
						<div class="kolom-75">
							<input type="time" class="form-element" name="waktu_berangkat" placeholder="Masukkan Waktu Keberangkatan......." required="">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								WAKTU TIBA
							</label>
						</div>
						<div class="kolom-75">
							<input type="time" class="form-element" name="waktu_tiba" placeholder="Masukkan Waktu Tiba......." required="">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								ID PESAWAT
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="id_pesawat" placeholder="Masukkan ID PESAWAT..." required="">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
					</div>
						<div class="kolom-75">
							<input type="submit" value="simpan" name="simpan" class="btn btn-danger">
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