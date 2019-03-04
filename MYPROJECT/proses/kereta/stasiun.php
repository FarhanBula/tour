<?php
        include"controller/db_config.php";
        include"function/function_stasiun.php";

            $simpan = $_POST['simpan'];
    if($simpan == "simpan"){
        $kode_stasiun = $_POST['kd_stasiun'];
        $kota = $_POST['kota'];
        $nama_stasiun = $_POST['nm_stasiun'];

    simpan($kode_stasiun,$kota,$nama_stasiun);
    }

    $hapus = $_POST['hapus'];
    if($hapus=="Delete"){
        $id = $_POST['id'];
        //echo"<br> $id";
        hapus($id);
    }
        $Ubah = $_POST['Ubah'];
    if ($Ubah=="Edit"){
        $kd_stasiun = $_POST['kd_stasiun'];
        $kota = $_POST['kota'];
        $nm_stasiun = $_POST['nm_stasiun'];
        //echo "<br><br><br> $kd_keahlian";
        //echo "<br><br><br> $nm_keahlian";
        baganti($kd_stasiun,$kota,$nm_stasiun);
    }
?>


<div class="main">
			<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="container-fluid">
						<div class="panel panel-headline">
							<div class="panel-heading">
								<h5 class="panel-title">PEMESANAN TIKET PESAWAT DAN TIKET KERETA API</h5>
								<p class="panel-subtitle">CREATE BY: KELOMPOK 3</p>
								<hr>
									<center><h3><b>STASIUN KERETA API</b></h3></center>

										<center>	
				        <div id="page-wrapper" >
            <div id="page-inner">
               
            <div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="input_stasiun" class="btn btn-danger">+Tambah</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <center>
                                        <tr>
                                            <th width="1px">NO</th>
                                            <th width="200px"><center>Kode Stasiun</center></th>
                                            <th width="250px"><center>Kota</center></th>
                                            <th width="250px"><center>Nama Stasiun</center></th>
                                            <th><center>Edit</center></th>
                                            <th><center>Hapus</center></th>
                                        </tr>
                                    </center>
                                    </thead>
                                    <tbody>
                                        <h6>
                                        <?php

                                            tampil();
                                        ?>
                                    </h6>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br><br>
                    <!-- End  Hover Rows  -->
                </div>
               
 
				</center>
									</div>
								</div>

