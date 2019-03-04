<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>INPUT JADWAL KEBERANGKATAN</b></h3></center>
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
							<input type="text" class="form-element" name="stasiun_awal" placeholder="Masukan Nama Kereta..." required="">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								STASIUN AKHIR
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="stasiun_akhir" placeholder="Ekonomi...." required="">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								NO KERETA
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="no_kereta" placeholder="Bisnis..." required="">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								WAKTU BERANGKAT
							</label>
						</div>
						<div class="kolom-75">
							<input type="time" class="form-element" name="waktu_berangkat" placeholder="First class..." required="">
						</div>
					</div>					
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								WAKTU TIBA
							</label>
						</div>
						<div class="kolom-75">
							<input type="time" class="form-element" name="waktu_tiba" placeholder="IDR........" required="">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								ID KERETA
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="id_kereta" placeholder="ID KERETA...." required="">
						</div>
					</div>
					<div class="kolom-25"></div>
						<div class="kolom-75">
							<input type="submit" value="simpan" name="simpan" class="btn btn-danger">
						</div>
					</div>
				</div>
			</form>

</div>

			</div>
		</div>
	</div>
</div>