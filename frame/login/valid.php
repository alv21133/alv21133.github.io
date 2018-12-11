<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Page Title</title>
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
            <div class="modal-header  bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel text-white">Maaf Username & Password  Salah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Silahkan coba lagi
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"  onclick="location.href = 'index.php';" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>



		<!-- Bootstrap core JavaScript -->
    --===============================================================================================-->
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
				

			if (isset($_POST['submit'])) {
				$username=$_POST['username'];
				$password=$_POST['pass'];

					
			
				$data=$dbkonek->query("SELECT * FROM login WHERE username='$username' AND password='$password' LIMIT 1");
				$count=mysqli_num_rows($data);
				 if ($count==1) {
				 		$_SESSION['login']=true;
				 		$_SESSION['user']=$username;
				 		$_SESSION['pass']=$password;
				 		header("location: ../dashboard/karyawan.php");
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

	
	   
	   <!-- <?php
session_start();
include_once  'conection.php';
 
   if(isset($_POST['submit'])){



		$username=$_POST['username'];
		$password=$_POST['pass'];

					echo "$username"; 
					echo "$password";
			
$data=$dbkonek->query("SELECT * FROM login WHERE username='$username' AND password='$password' LIMIT 1");
$count=mysqli_num_rows($data);


        $user=$_POST['username'];
        $pass=$_POST['pass'];

        $query=$dbkonek->query("SELECT * FROM login WHERE username='$username' LIMIT 1");
        while ($result=mysqli_fetch_array($query)) {
            $db_p=$result['password'];
            $db_u=$result['username'];
        }
        if(password_verify($pass,$db_p)){

            $_SESSION["user"]="$user";
            $_SESSION["pass"]="$pass";
            
            echo"login sukses;";
            header("location:index.php");
        }else{
                
            echo "<script type='text/javascript'>
                $(document).ready(function(){
                $('#salah').modal('show');
                });
                </script>
                ";
        }
    
    }
           
	?> -->