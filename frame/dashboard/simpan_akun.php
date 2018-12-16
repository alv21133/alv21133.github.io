<?php 

include_once'../login/conection.php';

$U_id= $_GET['%QW$iq@'];
?>

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
            <div class="modal fade" id="set" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header"
                <?php
                        $get=$dbkonek->query("select Nama , Password from customer where ID='$U_id'");
                        while ($data=mysqli_fetch_array($get)) {
                    ?>

                    <h5 class="modal-title" id="exampleModalCenterTitle">ID Customer : <?PHP echo $_GET['%QW$iq@']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-inline" action=" " method="POST">
                                <div class="form-group mb-2">
                                    <label for="staticEmail2" class="sr-only">Email</label>
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="<?php echo $data['Nama']?>">
                                </div>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <input type="text" class="form-control" id="inputPassword2" name="pass" placeholder="Password" value="<?php echo $data['Password']?>" >
                                </div>
                            
                        <?php
                        }
                    ?> 
                      
                  


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="location.href='tambah_akun_member.php'" data-dismiss="modal">Tutup</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan" ></input>
                </div>
                </div>
                  </form>
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

 echo "<script type='text/javascript'>
            $(document).ready(function(){
            $('#set').modal('show');
            });
        </script>";        

 if (isset($_POST['submit'])) {

   
            $pass=$_POST['pass'];
           

          
            $up=$dbkonek->query("update customer set Password='$pass' where ID='$U_id'");

            if ($up) {

                echo" 
                    <script type='text/javascript'>
                      window.location.href = 'tambah_akun_member.php';
                    </script>
                
                "; 

            }else{
                echo"gagal delete";
                
            }

     }

?>
