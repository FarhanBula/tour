<?php
        include"controller/db_config.php";
        include"function/function_admin.php";

    $hapus = $_POST['hapus'];
    if($hapus=="Delete"){
        $id = $_POST['id'];
        //echo"<br> $id";
        hapus($id);
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
									<center><h3><b>DAFTAR ADMIN</b></h3></center>

										<center>	
				        <div id="page-wrapper" >
            <div id="page-inner">
               
            <div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="proses/admin/pdfadmin.php" class="btn btn-danger" target="_blank"><i class="fa fa-print">&nbsp;&nbsp;CETAK</i></a></div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <center>
                                        <tr>
                                            <th width="1px"><center>NO</center></th>
                                            <th width="250px"><center>Nama Lengkap</center></th>
                                            <th width="200px"><center>Username</center></th>
                                            <th width="200px"><center>Password</center></th>
                                            <th width="10px"><center>Level</center></th>
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
                    <!-- End  Hover Rows  -->
                                         <br><br><br><br>
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