<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Go Water</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	</head>
	<body>
		 <!-- Modal -->
        <div class="modal fade" id="salah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-white" style="background-color:#e206b3;">
                <h5 class="modal-title  text-white" id="exampleModalLabel">Maaf Username & Password  Salah !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Jika anda lupa dengan username dan password maka datang ke kantor Go-Water untuk proses recovery account anda.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark"  data-dismiss="modal">Mengerti</button>
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
		session_start();
		include_once  'conection.php';
		 error_reporting(0);		

			if (isset($_POST['submit'])) {
				$username=$_POST['username'];
				$password=$_POST['pass'];

				

				$data=$dbkonek->query("SELECT * FROM customer WHERE Nama='$username' AND Password='$password' LIMIT 1");
				$count=mysqli_num_rows($data);
				while ($p_data=mysqli_fetch_array($data)) {
				$id=$p_data['ID'];

				}
			
				 if ($count!= null) {
				 		$_SESSION['login']=true;
				 		$_SESSION['user']=$username;
				 		$_SESSION['pass']=$password;
                        $_SESSION['unix']=$id;
				 		header("location: ../dashboard/dashboard_member.php");
				 	}else{
						 
						
						echo "<script type='text/javascript'>
								$(document).ready(function(){
								$('#salah').modal('show');
								});
								</script>
                			";
				 	}


				}		


	?>
	