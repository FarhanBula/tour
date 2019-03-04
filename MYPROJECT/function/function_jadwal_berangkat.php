<?php
	function simpan($stasiun_awal,$stasiun_akhir,$no_kereta,$waktu_berangkat,$waktu_tiba,$id_kereta){
		$save = mysql_query("INSERT INTO train_journey(depart_station,arrival_station,train_no,depart_time,arrival_time,train_id)VALUES('$stasiun_awal','$stasiun_akhir','$no_kereta','$waktu_berangkat','$waktu_tiba','$id_kereta')");
	}if($save){
		?>
		<script type="text/javascript">
			alert('Data Berhasil Di simpan');
		</script>
		<?php
	}
?>
<?php
	function tampil(){
		$train = mysql_query("SELECT * FROM train_journey");
		$no =1;

		while ($test = mysql_fetch_array($train)) {
			$dari = $test['depart_station'];
			$sampai = $test['arrival_station'];
			$no_kereta = $test['train_no'];
			$depart_time = $test['depart_time'];
			$arriv_time = $test['arrival_time'];
			$kode_kereta = $test['train_id'];

			echo "
					<td><center>$no</center></td>
					<td><center>$dari</center></td>
					<td><center>$sampai</center></td>
					<td><center>$no_kereta</center></td>
					<td><center>$depart_time</center></td>
					<td><center>$arriv_time</center></td>
					<td><center>$kode_kereta</center></td>
					<td>
					<center>
					<form action='edit_jadwal_berangkat' method='POST'>
							<input type='hidden' value='$dari' name='id'>
							<input type='submit' class='btn btn-primary' value='Edit' name='ubah'>
						</form>
					</center>
					</td>
					<td>
					<center>
						<form action='jadwal_berangkat' method='post'>
							<input type='hidden' value='$dari' name='id'>
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
		$hapus = mysql_query("DELETE FROM train_journey WHERE depart_station = '$id'");
		if($hapus){
			?>
		<script type="text/javascript">
			alert('Data Berhasil Di Hapus');
		</script>
		<?php
		}
	}
?>
<?php
	function baganti($stasiun_awal,$stasiun_akhir,$no_kereta,$waktu_berangkat,$waktu_tiba,$id_kereta){
		$baganti = mysql_query("UPDATE train_journey SET arrival_station = '$stasiun_akhir', train_no='$no_kereta', depart_time ='$waktu_berangkat', arrival_time ='$waktu_tiba', train_id = '$id_kereta' WHERE depart_station = '$stasiun_awal'");
		if($baganti){
			?>
			<script type="text/javascript">
				alert('Data berhasil Diubah');
			</script>
		<?php
		}
	}
?>
