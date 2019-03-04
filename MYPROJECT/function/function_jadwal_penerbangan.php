<?php
	function simpan($asal,$tujuan,$waktu_berangkat,$waktu_tiba,$id_pesawat){
		$save = mysql_query("INSERT INTO flight(form,dest,depart_time,arriv_time,airplane_id)VALUES('$asal','$tujuan','$waktu_berangkat','$waktu_tiba','$id_pesawat')");
		if($save){
			?>
			<script type="text/javascript">
				alert('Data berhasil Di simpan');
			</script>
			<?php
		}
	}
	?>
	<?php

	function tampil(){
		$flight = mysql_query("SELECT * FROM flight");
		$no=1;
		while ($test = mysql_fetch_array($flight)) {
			$dari = $test['form'];
			$sampai = $test['dest'];
			$depart_time = $test['depart_time'];
			$arriv_time = $test['arriv_time'];
			$kode_pesawat = $test['airplane_id'];

			echo "
			<tr>
					<td><center>$no</center></td>
					<td><center>$dari</center></td>
					<td><center>$sampai</center></td>
					<td><center>$depart_time</center></td>
					<td><center>$arriv_time</center></td>
					<td><center>$kode_pesawat</center></td>
					<td>
					<center>
						<form action='edit_jadwal_penerbangan' method='POST'>
							<input type='hidden' value='$dari' name='id'>
							<input type='submit' class='btn btn-primary' value='Edit' name='ubah'>
						</form>
					</center>
					</td>
					<td>
					<center>
						<form action='jadwal_penerbangan' method='post'>
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
		$hapus = mysql_query("DELETE FROM flight WHERE form = '$id'");
		if($hapus){
			?>
		<script type="text/javascript">
			alert('Data berhasil dihapus');
		</script>
	<?php
		}
	} 
?>

<?php
	function baganti($asal,$tujuan,$waktu_berangkat,$waktu_tiba,$id_pesawat){
		$baganti = mysql_query("UPDATE flight SET dest = '$tujuan', depart_time ='$waktu_berangkat', arriv_time ='$waktu_tiba', airplane_id ='$id_pesawat' WHERE form = '$asal'");
		if($baganti){
			?>
			<script type="text/javascript">
				alert('Data berhasil Diubah');
			</script>
		<?php
		}
	}
?>