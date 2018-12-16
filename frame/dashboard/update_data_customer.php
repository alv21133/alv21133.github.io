<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Go Water</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	</head>
	<body >
		 <!-- Modal -->
        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-white" style="background-color:#151616;">
                <h5 class="modal-title  text-white" id="exampleModalLabel">Data <?php echo $_POST['nama'];?> Berhasil di Perbaharui !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-footer">
                <button onclick="window.location.href='data_member.php'" type="button" class="btn btn-dark"  data-dismiss="modal">Tutup</button>
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
	<script src="../login/vendor/bootstrap/js/bootstrap.min.js"></script>
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


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    
	</body>
	</html>

<?php

include_once'../login/conection.php';

if (isset($_POST['submit'])) {

            $id=$_POST['id'];
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];
            $telp=$_POST['telpon'];
            $bayar=$_POST['bayar'];
            $paket=$_POST['paket'];
            $status=$_POST['status'];

          
            $up=$dbkonek->query("update customer set Nama='$nama', Alamat='$alamat' , Telp='$telp' , Pembayaran='$bayar' , paket='$paket' , Status='$status'   where ID='$id'");

            if ($up) {
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