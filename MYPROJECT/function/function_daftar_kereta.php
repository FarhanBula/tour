<?php
	function simpan($nm_kereta,$ekonomi,$bisnis,$first_class,$hrga_ekonomi,$hrga_bisnis,$eksekutif){
		$save = mysql_query("INSERT INTO train(train_name,eco_seat_num,busines_seat_num,exec_seat_num,eco_seat_num1,busines_seat_num1,exec_seat_num1)VALUES('$nm_kereta','$ekonomi','$bisnis','$first_class','$hrga_ekonomi','$hrga_bisnis','$eksekutif')");
		if($save){
			?>
			<script type="text/javascript">
				alert('Data berhasil Di Simpan');
			</script>
		<?php
		}
	}
?>
<?php
	function tampil(){
		$cari = mysql_query("SELECT * FROM train");
		$no = 1;
		while ($test = mysql_fetch_array($cari)) {
			$nama	= $test['train_name'];
			$ekonomi = $test['eco_seat_num'];
			$bisnis = $test['busines_seat_num'];
			$class = $test['exec_seat_num'];
			$ekonomis = $test['eco_seat_num1'];
			$bisniss = $test['busines_seat_num1'];
			$classs = $test['exec_seat_num1'];
			echo "
				<tr>
					<td><center>$no</center></td>
					<td><center>$nama</td>
					<td><center>$ekonomi</center></td>
					<td><center>$bisnis</center></td>
					<td><center>$class</center></td>
					<td><center>$ekonomis</center></td>
					<td><center>$bisniss</center></td>
					<td><center>$classs</center></td>
					<td>
						<form action='edit_daftar_kereta' method='POST'>
							<input type='hidden' value='$nama' name='id'>
							<input type='submit' class='btn btn-primary' value='Edit' name='ubah'>
						</form>
					</td>
					<td>
						<form action='daftar_kereta' method='post'>
							<input type='hidden' value='$nama' name='id'>
							<input type='submit' class='btn btn-warning' value='Delete' name='hapus'>
						</form>
					</td>
				</tr>
			";
			$no++;
		}
	}

		function hapus($id){
		$hapus = mysql_query("DELETE FROM train WHERE train_name = '$id'");
		if($hapus){
			?>
			<script type="text/javascript">
				alert('Data berhasil Di hapus');
			</script>
		<?php
		}
	}
?>

<?php
	function baganti($nm_kereta,$ekonomi,$bisnis,$kelas,$ekonomi1, $bisnis1,$kelas1){
		$baganti = mysql_query("UPDATE train SET eco_seat_num = '$ekonomi', busines_seat_num='$bisnis', exec_seat_num='$kelas', eco_seat_num1 = '$ekonomi1', busines_seat_num1='$bisnis1', exec_seat_num1='$kelas1' WHERE train_name = '$nm_kereta'");
		if($baganti){
			?>
			<script type="text/javascript">
				alert('Data berhasil Diubah');
			</script>
		<?php
		}
	}
?>