<?php
	function simpan($kode_stasiun,$kota,$nama_stasiun){
		$save = mysql_query("INSERT INTO train_station(station_code,city,station_name)VALUES('$kode_stasiun','$kota','$nama_stasiun')");
		if($save){
		?>
		<script type="text/javascript">
			alert('Data Berhasil Di Tambah');
		</script>
<?php
		}
	}
?>

<?php
	function tampil(){
		$cari_stasiun= mysql_query("SELECT * FROM train_station");
		$no = 1;
		while ($test = mysql_fetch_array($cari_stasiun)) {
			$kode = $test['station_code'];
			$kota = $test['city'];
			$nama = $test['station_name'];
			echo "
				<tr>
					<td><center>$no</center></td>
					<td><center>$kode</center></td>
					<td><center>$kota</center></td>
					<td><center>$nama</center></td>
					<td>
						<center>
						<form action='edit_stasiun' method='POST'>
							<input type='hidden' value='$kode' name='id'>
							<input type='submit' class='btn btn-primary' value='Edit' name='ubah'>
						</form>
						</center>
					</td>
					<td>
						<center>
						<form action='stasiun' method='POST'>
							<input type='hidden' value='$kode' name='id'>
							<input type='submit' class='btn btn-warning' value='Delete' name='hapus'>
						</form>
						</center>
					</td>
				</tr>
			";
			$no++;
		}
	}
?>
<?php

		function hapus($id){
		$hapus = mysql_query("DELETE FROM train_station WHERE station_code = '$id'");
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
	function baganti($kd_stasiun,$kota,$nm_stasiun){
		$baganti = mysql_query("UPDATE train_station SET city = '$kota', station_name='$nm_stasiun' WHERE station_code = '$kd_stasiun'");
		if($baganti){
			?>
			<script type="text/javascript">
				alert('Data berhasil Diubah');
			</script>
		<?php
		}
	}
?>