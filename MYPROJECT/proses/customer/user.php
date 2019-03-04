<?php
        include"controller/db_config.php";
        include"function/function_customer.php";

                $hapus = $_POST['hapus'];
    if($hapus=="Delete"){
        $id = $_POST['id'];
        //echo"<br> $id";
        hapus($id);
    }

    $Ubah = $_POST['Ubah'];
    if ($Ubah=="Edit"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $county = $_POST['county'];
        //echo "<br><br><br> $kd_keahlian";
        //echo "<br><br><br> $nm_keahlian";
        baganti($name,$email,$city,$county);
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
									<h3><b>CUSTOMER</b></h3>

										<center>	
				        <div id="page-wrapper" >
            <div id="page-inner">
               
            <div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="proses/customer/pdfcustomer.php" class="btn btn-danger" target="_blank"><i class="fa fa-print">&nbsp;&nbsp;CETAK</i></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <center>
                                        <tr>
                                            <th width="1px">NO</th>
                                            <th width="250px"><center>Nama Lengkap</center></th>
                                            <th width="200px"><center>Email</center></th>
                                            <th width="200px"><center>Kota</center></th>
                                            <th width="200px"><center>Negara</center></th>
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
                     <br><br><br><br><br>

                    <!-- End  Hover Rows  -->
                </div>
               
				</center>
									</div>
								</div>


	