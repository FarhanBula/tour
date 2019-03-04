<?php
        include"controller/db_config.php";
        include"function/function_jadwal_berangkat.php";

                $hapus = $_POST['hapus'];
    if($hapus=="Delete"){
        $id = $_POST['id'];
        //echo"<br> $id";
        hapus($id);
    }

        $simpan = $_POST['simpan'];
    if($simpan == "simpan"){
        $stasiun_awal = $_POST['stasiun_awal'];
        $stasiun_akhir = $_POST['stasiun_akhir'];
        $no_kereta = $_POST['no_kereta'];
        $waktu_berangkat = $_POST['waktu_berangkat'];
        $waktu_tiba = $_POST['waktu_tiba'];
        $id_kereta = $_POST['id_kereta'];

    simpan($stasiun_awal,$stasiun_akhir,$no_kereta,$waktu_berangkat,$waktu_tiba,$id_kereta);
    }
    $Ubah = $_POST['Ubah'];
    if ($Ubah=="Edit"){
        $stasiun_awal = $_POST['stasiun_awal'];
        $stasiun_akhir = $_POST['stasiun_akhir'];
        $no_kereta = $_POST['no_kereta'];
        $waktu_berangkat = $_POST['waktu_berangkat'];
        $waktu_tiba = $_POST['waktu_tiba'];
        $id_kereta = $_POST['id_kereta'];
        baganti($stasiun_awal,$stasiun_akhir,$no_kereta,$waktu_berangkat,$waktu_tiba,$id_kereta);
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
									<center><h3><b>JADWAL BERANGKAT</b></h3></center>

										<center>	
				        <div id="page-wrapper" >
            <div id="page-inner">
               
            <div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="input_berangkat" class="btn btn-danger">+Tambah</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <center>
                                        <tr>
                                            <th><center>NO</center></th>
                                            <th width="120px"><center>Stasiun Awal</center></th>
                                            <th width="150px"><center>Stasiun Akhir</center></th>
                                            <th width="100px"><center>No kereta</center></th>
                                            <th width="150px"><center>Waktu Berangkat</center></th>
                                            <th width="150px"><center>Waktu Tiba</center></th>
                                            <th width="45px"><center>Id_Kereta</center></th>
                                            <th><center>Edit</center></th>
                                            <th><center>Hapus</center></th>
                                        </tr>
                                    </center>
                                    </thead>
                                    <tbody>
                                        <?php
                                            tampil();
                                        ?>

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
							</div>
						</div>