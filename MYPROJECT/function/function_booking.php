<?php
	function tampil(){
		$booking = mysql_query("SELECT * FROM booking");
		$no =1;

		while ($test = mysql_fetch_array($booking)) {
			$id = $test['id'];
			$bookings	= $test['booking_code'];
			$customer = $test['customer'];
			$booking_date = $test['booking_date'];
			$status = $test['status'];
			$payment_status = $test['payment_status'];

			echo "
				<tr>
					<td><center>$no</center></td>
					<td><center>$bookings</center></td>
					<td><center>$customer</center></td>
					<td><center>$booking_date</center></td>
					<td><center>$status</center></td>
					<td><center>$payment_status</center></td>
					<td>
					<center>
					<form action='edit_booking' method='POST'>
							<input type='hidden' value='$id' name='id'>
							<input type='submit' class='btn btn-primary' value='Edit' name='ubah'>
						</form>
					</center>
					</td>
					<td>
					<center>
						<form action='booking' method='POST'>
							<input type='hidden' value='$id' name='id'>
							<input type='submit' class='btn btn-warning' value='Delete' name='hapus'>
						</form>
					</center>
					</td>
				</tr>
		";
			$no++;
		}
	}

		function hapus($id){
		$hapus = mysql_query("DELETE FROM booking WHERE id = '$id'");
		if($hapus){
			?>
			<script type="text/javascript">
				alert('Data Berhasil Di Haspus');
			</script>
		<?php
		}
	} 
?>

<?php
	function baganti($id,$customer,$booking_date,$status,$payment_status){
		$baganti = mysql_query("UPDATE booking SET  customer='$customer', booking_date = '$booking_date', status = '$status', payment_status = '$payment_status' WHERE id = '$id'");
		if($baganti){
			?>
			<script type="text/javascript">
				alert('Data berhasil Diubah');
			</script>
		<?php
		}
	}
?>
