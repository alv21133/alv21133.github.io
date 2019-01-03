
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Go Water</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	</head>
	<body>
		 <!-- Modal -->
        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-white" style="background-color:#e206b3;">
                <h5 class="modal-title  text-white font-weight-bold" id="exampleModalLabel">Transaksi Berhasil !</h5>
                <button type="button" class="close"  onclick="window.location.href='update_pemakaian.php'" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    Pembayaran dari akun <?php echo $_POST['nama'] ?> Untuk pemakaian pada periode <?php echo $_POST['tanggal'] ?> berhasil di lakukan.
                    
                </div>
            <div class="modal-footer">
               
            </div>
            </div>
        </div>
        </div>

		<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!--------------------------------->

	<script src="../js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="../js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="../js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="../js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="../js/active.js"></script>
	</body>
	</html>



<?php
include_once  '../login/conection.php';
if (isset($_POST['submit'])) {
    # code...

                $tg=date("Y-m-d");
                $biaya=$_POST['biaya']*2000;

                $simpan=$dbkonek->query("insert into transaksi (Customer_ID,Biaya,Tanggal_Bayar,Bayar) values ('$_POST[id]','$biaya','$tg','$_POST[bayar]')");
                $status=$dbkonek->query("update customer SET Pembayaran='Lunas' WHERE ID='$_POST[id]'");


                if ($simpan && $status) {
                echo "<script type='text/javascript'>
                                            $(document).ready(function(){
                                            $('#hapus').modal('show');
                                            });
                                            </script>";                        

            }else{
                echo"gagal delete";
            }

    }
?>