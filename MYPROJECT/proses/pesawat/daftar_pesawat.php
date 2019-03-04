<?php
        include"controller/db_config.php";
        include"function/function_pesawat.php";

    $hapus = $_POST['hapus'];
    if($hapus=="Delete"){
        $id = $_POST['id'];
        //echo"<br> $id";
        hapus($id);
    }
        $simpan = $_POST['simpan'];
    if($simpan == "simpan"){
        $pesawat = $_POST['pesawat'];
        $ekonomi = $_POST['ekonomi'];
        $bisnis = $_POST['bisnis'];
        $first_class = $_POST['first_class'];
        $hrga_ekonomi = $_POST['/ekonomi'];
        $hrga_bisnis = $_POST['/bisnis'];
        $eksekutif = $_POST['/eksekutif'];

    simpan($pesawat,$ekonomi,$bisnis,$first_class,$hrga_ekonomi,$hrga_bisnis,$eksekutif);
    }

    $Ubah = $_POST['Ubah'];
    if($Ubah=="Edit"){
        $nm_pesawat = $_POST['nm_pesawat'];
        $ekonomi = $_POST['ekonomi'];
        $bisnis = $_POST['bisnis'];
        $kelas = $_POST['first_class'];
        $ekonomi1 = $_POST['ekonomi1'];
        $bisnis1 = $_POST['bisnis1'];
        $kelas1 = $_POST['first_class1'];
        //echo "<br><br><br> $kd_keahlian";
        //echo "<br><br><br> $nm_keahlian";
        baganti($nm_pesawat,$ekonomi,$bisnis,$kelas,$ekonomi1,$bisnis1,$kelas1);
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
									<center><h3><b>DAFTAR PESAWAT</b></h3></center>

										<center>	
				        <div id="page-wrapper" >
            <div id="page-inner">
               
            <div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                         <div class="panel-heading">
                        <a href="input_pesawat" class="btn btn-danger">+Tambah</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <center>
                                        <tr>
                                            <th><center>NO</center></th>
                                            <th width="250px"><center>Nama Pesawat</center></th>
                                            <th width="50px"><center>Ekonomi</center></th>
                                            <th width="50px"><center>Bisnis</center></th>
                                            <th width="190px"><center>First Class</center></th>
                                            <th width="125px"><center>/Ekonomi</center></th>
                                            <th width=125px""><center>/Bisnis</center></th>
                                            <th width="125px"><center>/Eksekutif</center></th>
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


	