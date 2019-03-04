<?php
        include"controller/db_config.php";
        include"function/function_jadwal_penerbangan.php";

    $hapus = $_POST['hapus'];
    if($hapus=="Delete"){
        $id = $_POST['id'];
        //echo"<br> $id";
        hapus($id);
    }
    $simpan = $_POST['simpan'];
    if($simpan == "simpan"){
        $asal = $_POST['asal'];
        $tujuan = $_POST['tujuan'];
        $waktu_berangkat = $_POST['waktu_berangkat'];
        $waktu_tiba = $_POST['waktu_tiba'];
        $id_pesawat = $_POST['id_pesawat'];

    simpan($asal,$tujuan,$waktu_berangkat,$waktu_tiba,$id_pesawat);
    }
        $Ubah = $_POST['Ubah'];
    if ($Ubah=="Edit"){
        $asal = $_POST['asal'];
        $tujuan = $_POST['tujuan'];
        $waktu_berangkat = $_POST['waktu_berangkat'];
        $waktu_tiba = $_POST['waktu_tiba'];
        $id_pesawat = $_POST['id_pesawat'];
        baganti($asal,$tujuan,$waktu_berangkat,$waktu_tiba,$id_pesawat);
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
									<center><h3><b>JADWAL PENERBANGAN</b></h3></center>

										<center>	
				        <div id="page-wrapper" >
            <div id="page-inner">
               
            <div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="input_penerbangan" class="btn btn-danger">+Tambah</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <center>
                                        <tr>
                                            <th width="1px"><center>NO</center></th>
                                            <th width="100px"><center>Asal</center></th>
                                            <th width="100px"><center>Tujuan</center></th>
                                            <th width="200px"><center>Waktu Keberangkatan</center></th>
                                            <th width="150px"><center>Waktu Tiba</center></th>
                                            <th width="10px"><center>Id_Pesawat</center></th>
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
					</div>
				</div>	
		</div>			
    </center>
</div>
</div>
</div>
</div>
</div>
