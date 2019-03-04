<?php
	define("host", "localhost");
	define("user", "root");
	define("pass", "");
	define("data_base", "db_tiket");

	$testing = mysql_connect(host,user,pass);

		

		$tes = mysql_select_db(data_base);
			
?>