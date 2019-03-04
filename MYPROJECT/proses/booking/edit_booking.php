<?php
	$id = $_POST['id'];
	include"controller/db_config.php";
	$search = mysql_query("SELECT * FROM booking WHERE booking_code ='$id'");
	$y = mysql_fetch_array($search);
	$kd_booking = $y["booking_code"];
	$customer = $y["customer"];
	$booking_date = $y["booking_date"];
	$status = $y["status"];
	$payment_status = $y["payment_status"];
?>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
					<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p><hr>
					<center><h3><b>EDIT DATA BOOKING</b></h3></center>
				</div>
			<div class="md-12">
				<form action="booking" method="POST">
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Kode Booking
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="kd_booking" readonly="" placeholder="Kode Booking..." required="" value="<?php echo $kd_booking  ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Customer
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="customer" placeholder="Masukkan Nama Customer...." required="" value="<?php echo $customer ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Tanggal Booking
							</label>
						</div>
						<div class="kolom-75">
							<input type="date" class="form-element" name="booking_date" placeholder="Kode Booking..." required="" value="<?php echo $booking_date  ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Status
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="status" placeholder="Status..." required="" value="<?php echo $status  ?>">
						</div>
					</div>
					<div class="baris">
						<div class="kolom-25">
							<label class="form-label">
								Biaya
							</label>
						</div>
						<div class="kolom-75">
							<input type="text" class="form-element" name="payment_status" placeholder="Masukkan Biaya.." value="<?php echo $payment_status ?>">
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