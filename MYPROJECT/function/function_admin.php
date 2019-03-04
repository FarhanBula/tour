<?php
	function tampil(){
		$admin = mysql_query("SELECT * FROM admin");
		$no = 1;
		while ($test = mysql_fetch_array($admin)) {
			$id = $test ['id'];
			$nama	= $test['nama'];
			$username = $test['username'];
			$password = $test['password'];
			$level = $test['level'];
			echo "
				<tr>
					<td><center>$no</center></td>
					<td><center>$nama</center></td>
					<td><center>$username</center></td>
					<td><center>$password<center></td>
					<td><center>$level</center></td>
				</tr>
			";
			$no++;
		}
	}

		function hapus($id){
		$hapus = mysql_query("DELETE FROM admin WHERE id = '$id'");
	}
?>

<?php
	function baganti($id,$username,$password){
		$baganti = mysql_query("UPDATE admin SET username = '$username', password='$password' WHERE name = '$id'");
		if($baganti){
			?>
			<script type="text/javascript">
				alert('Data berhasil Diubah');
			</script>
		<?php
		}
	}
?>