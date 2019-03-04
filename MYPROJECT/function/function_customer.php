<?php
	function tampil(){
		$customer = mysql_query("SELECT * FROM customer");
		$no =1;

		while ($test = mysql_fetch_array($customer)) {
			$id_customer = $test['id'];
			$nama = $test['name'];
			$email = $test['email'];
			$city = $test['city'];
			$county = $test['county'];

			echo "
				<tr>
					<td><center>$no</center></td>
					<td><center>$nama</center></td>
					<td><center>$email</center></td>
					<td><center>$city</center></td>
					<td><center>$county</center></td>
					<td>
					<center>
					<form action='edit_customer' method='POST'>
							<input type='hidden' value='$nama' name='id'>
							<input type='submit' class='btn btn-primary' value='Edit' name='ubah'>
						</form>
					</center>
					</td>
					<td>
					<center>
						<form action='user' method='post'>
							<input type='hidden' value='$id_customer' name='id'>
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
		$hapus = mysql_query("DELETE FROM customer WHERE id = '$id'");
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
		function baganti($name,$email,$city,$county){
		$baganti = mysql_query("UPDATE customer SET email = '$email', city='$city', county = '$county' WHERE name = '$name'");
	if($baganti){
		?>
			<script type="text/javascript">
				alert('Data berhasil diubah');
			</script>
		<?php
		}
	}
?>

