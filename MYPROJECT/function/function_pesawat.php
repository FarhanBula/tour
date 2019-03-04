<?php
	function simpan($name,$eco,$bisn,$cls,$eko,$biss,$clas){
		$save = mysql_query("INSERT INTO airplane(aircraft_type,eco_seat_num,busines_seat_num,first_class,eco_seat_num1,busines_seat_num1,first_class1)VALUES('$name','$eco','$bisn','$cls','$eko','$biss','$clas')");
		if($save){
			?>
			<script type="text/javascript">
				alert('Data Berhasil Di Simpan');
			</script>
	<?php
		}
	}
?>
<?php
	function tampil(){
		$cari_pesawat = mysql_query("SELECT * FROM airplane");
		$no = 1;
		while ($test = mysql_fetch_array($cari_pesawat)) {
			$nama	= $test['aircraft_type'];
			$ekonomi = $test['eco_seat_num'];
			$bisnis = $test['busines_seat_num'];
			$class = $test['first_class'];
			$ekonomis = $test['eco_seat_num1'];
			$bisniss = $test['busines_seat_num1'];
			$classs = $test['first_class1'];
			echo "
				<tr>
					<td><center>$no</center></td>
					<td><center>$nama</center</td>
					<td><center>$ekonomi</center></td>
					<td><center>$bisnis</center></td>
					<td><center>$class</center></td>
					<td><center>$ekonomis</center></td>
					<td><center>$bisniss</center></td>
					<td><center>$classs</center></td>
					<td>
					<center>
						<form action='edit_pesawat' method='POST'>
							<input type='hidden' value='$nama' name='id'>
							<input type='submit' class='btn btn-primary' value='Edit' name='ubah'>
						</form>
					</center>
					</td>
					<td>
					<center>
						<form action='daftar_pesawat' method='post'>
							<input type='hidden' value='$nama' name='id'>
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
		$hapus = mysql_query("DELETE FROM airplane WHERE aircraft_type = '$id'");
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
	function baganti($nm_pesawat,$ekonomi,$bisnis,$kelas,$ekonomi1, $bisnis1,$kelas1){
		$baganti = mysql_query("UPDATE airplane SET eco_seat_num = '$ekonomi', busines_seat_num='$bisnis', first_class='$kelas', eco_seat_num1 = '$ekonomi1', busines_seat_num1='$bisnis1', first_class1='$kelas1' WHERE aircraft_type = '$nm_pesawat'");
		if($baganti){
			?>
			<script type="text/javascript">
				alert('Data berhasil Diubah');
			</script>
		<?php
		}
	}
?>