<?php
	function tampil(){
		$admin = mysql_query("SELECT * FROM admin");
		$no = 1;
		while ($test = mysql_fetch_array($admin)) {
			$id = $test ['id'];
			$nama	= $test['nama'];
			$username = $test['username'];
			$password = $test['password'];
			echo "
			<div class='kolom-75'>
				<input type='text' class='form-element' name='name' readonly='' placeholder='Nama Lengkap...' required='' value='<?php echo $name?>''>
			</div>
			";
			$no++;
		}
	}
?>