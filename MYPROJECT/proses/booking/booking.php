<?php
        include"controller/db_config.php";
        include"function/function_booking.php";

        $hapus = $_POST['hapus'];
    if($hapus=="Delete"){
        $id = $_POST['id'];
        //echo"<br> $id";
        hapus($id);
    }

            $Ubah = $_POST['Ubah'];
    if ($Ubah=="Edit"){
        $kd_booking = $_POST['kd_booking'];
        $customer = $_POST['customer'];
        $booking_date = $_POST['booking_date'];
        $status = $_POST['status'];
        $payment_status = $_POST['payment_status'];
        //echo "<br><br><br> $kd_keahlian";
        //echo "<br><br><br> $nm_keahlian";
        baganti($kd_booking,$customer,$booking_date,$status,$payment_status);
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
									<center><h3><b>BOOKING</b></h3></center>

										<center>	
				        <div id="page-wrapper" >
            <div id="page-inner">
               
            <div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="proses/booking/pdfbooking.php" class="btn btn-danger" target="_blank"><i class="fa fa-print">&nbsp;&nbsp;CETAK</i></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <center>
                                        <tr>
                                            <th width="1px">NO</th>
                                            <th width="250px"><center>Kode Booking</center></th>
                                            <th width="250px"><center>Customer</center></th>
                                            <th width="250px"><center>Tanggal Booking</center></th>
                                            <th width="100px"><center>Status</center></th>
                                            <th width="200px"><center>Biaya</center></th>
                                            <th width="15px"><center>Edit</center></th>
                                            <th width=1px><center>Hapus</center></th>
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
                    <br>
                    <br><br><br><br>
                    <!-- End  Hover Rows  -->
                </div>
               
 
				</center>
									</div>
								</div>

