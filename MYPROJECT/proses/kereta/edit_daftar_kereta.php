<?php
	$id = $_POST['id'];
	include"controller/db_config.php";
	$search = mysql_query("SELECT * FROM train WHERE train_name ='$id'");
	$y = mysql_fetch_array($search);
	$nm_kereta = $y["train_name"];
	$ekonomi = $y["eco_seat_num"];
	$bisnis = $y["busines_seat_num"];
	$kelas = $y["exec_seat_num"];
	$ekonomi1 = $y["eco_seat_num1"];
	$bisnis1 = $y["busines_seat_num1"];
	$kelas1 = $y["exec_seat_num1"];
?>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>EDIT DAFTAR KERETA API</b></h3></center>
				</div>
			<div class="md-12">
				<form action="daftar_kereta" method="POST">
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								NAMA KERETA
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="nm_kereta" placeholder="Masukan Nama Kereta..." required="" readonly="" value="<?php echo $nm_kereta; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								EKONOMI
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="ekonomi" placeholder="Ekonomi...." required="" value="<?php echo $ekonomi; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								BISNIS
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="bisnis" placeholder="Bisnis..." required="" value="<?php echo $bisnis; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								FIRST CLASS
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="kelas" placeholder="First class..." required="" value="<?php echo $kelas ?>">
						</div>
					</div>					
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								/EKONOMI
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="ekonomi1" placeholder="IDR........" required="" value="<?php echo $ekonomi1; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								/BISNIS
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="bisnis1" placeholder="IDR........" required="" value="<?php echo $bisnis1;  ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								/EKSEKUTIF
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="kelas1" placeholder="IDR........" required="" value="<?php echo $kelas1; ?>">
						</div>
					</div>
					<div class="kolom-25"></div>
						<div class="kolom-75">
							<input type="submit" value="Edit" name="Ubah" class="btn btn-danger">
						</div>
						<br><br><br><br>
					</div>
				</div>
			</form>

</div>

			</div>
		</div>
	</div>
</div>