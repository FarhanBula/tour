<?php
	function simpan($bandar,$kod,$cit){
		$save = mysql_query("INSERT INTO airport(name,code,city)VALUES('$bandar','$kod','$cit')");
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
		$cari_bandara = mysql_query("SELECT * FROM airport");
		$no = 1;
		while ($test = mysql_fetch_array($cari_bandara)) {
			$nama = $test['name'];
			$kode = $test['code'];
			$city = $test['city'];
			echo "
				<tr>
					<td><center>$no</center></td>
					<td><center>$nama</center></td>
					<td><center>$kode</center></td>
					<td><center>$city</center></td>
					<td>
					<center>
						<form action='edit_bandara' method='POST'>
							<input type='hidden' value='$nama' name='id'>
							<input type='submit' class='btn btn-primary' value='Edit' name='ubah'>
						</form>
					</center>
					</td>
					<td>
					<center>
						<form action='bandara' method='post'>
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
		$hapus = mysql_query("DELETE FROM airport WHERE name = '$id'");
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
	function baganti($bandara,$kd_bandara,$kota){
		$baganti = mysql_query("UPDATE airport SET code = '$kd_bandara', city='$kota' WHERE name = '$bandara'");
		if($baganti){
			?>
			<script type="text/javascript">
				alert('Data berhasil Diubah');
			</script>
		<?php
		}
	}
?>