<?php
        include"controller/db_config.php";
        include"function/function_bandara.php";


    $simpan = $_POST['simpan'];
    if($simpan == "simpan"){
        $bandara = $_POST['bandara'];
        $kode = $_POST['kd_bandara'];
        $city = $_POST['kota'];

    simpan($bandara,$kode,$city);
    }

    $hapus = $_POST['hapus'];
    if($hapus=="Delete"){
        $id = $_POST['id'];
        //echo"<br> $id";
        hapus($id);
    }
        $Ubah = $_POST['Ubah'];
    if ($Ubah=="Edit"){
        $bandara = $_POST['bandara'];
        $kd_bandara = $_POST['kd_bandara'];
        $kota = $_POST['kota'];
        //echo "<br><br><br> $kd_keahlian";
        //echo "<br><br><br> $nm_keahlian";
        baganti($bandara,$kd_bandara,$kota);
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
									<center><h3><b>BANDARA</b></h3></center>

										<center>	
				        <div id="page-wrapper" >
            <div id="page-inner">
               
            <div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="tambah_bandara" class="btn btn-danger">+Tambah</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <center>
                                        <tr>
                                            <th width="1px"><center>NO</center></th>
                                            <th width="500px"><center>Bandara</center></th>
                                            <th width="200px"><center>Kode</center></th>
                                            <th width="200px"><center>Kota</center></th>
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


