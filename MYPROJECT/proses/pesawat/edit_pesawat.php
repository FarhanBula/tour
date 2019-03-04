<?php
	$id = $_POST['id'];
	include"controller/db_config.php";
	$search = mysql_query("SELECT * FROM airplane WHERE aircraft_type ='$id'");
	$y = mysql_fetch_array($search);
	$nm_pesawat = $y["aircraft_type"];
	$ekonomi = $y["eco_seat_num"];
	$bisnis = $y["busines_seat_num"];
	$kelas = $y["first_class"];
	$ekonomi1 = $y["eco_seat_num1"];
	$bisnis1 = $y["busines_seat_num1"];
	$kelas1 = $y["first_class1"];
?>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>EDIT DAFTAR PESAWAT</b></h3></center>
				</div>
			<div class="md-12">
				<form action="daftar_pesawat" method="POST">
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Nama pesawat
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="nm_pesawat" readonly="" placeholder="Masukan type Pesawat..." required="" value="<?php echo $nm_pesawat; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Ekonomi
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="ekonomi" placeholder="Masukkan Nomor Ekonomi" required="" value="<?php echo $ekonomi; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Bisnis
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="bisnis" placeholder="Masukkan Nomor Bisnis..." required="" value="<?php echo $bisnis;?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								First Class
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="first_class" placeholder="Masukkan Nomor First Class" required="" value="<?php echo $kelas; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								/Ekonomi
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="ekonomi1" placeholder="Masukkan Harga Ekonomi" required="" value="<?php echo $ekonomi1; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								/Bisnis
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="bisnis1" placeholder="Masukkan Harga Bisnis" required="" value="<?php echo $bisnis1; ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								/Eksekutif
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="first_class1" placeholder="Masukkan Harga Eksekutif..." required="" value="<?php echo $kelas1; ?>">
						</div>
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