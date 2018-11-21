
	<?php
		session_start();
		include_once  'conection.php';
				

			if (isset($_POST['submit'])) {
				$username=$_POST['username'];
				$password=$_POST['pass'];

					echo "$username"; 
					echo "$password";
			
				$data=$dbkonek->query("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
				$count=mysqli_num_rows($data);
				 if ($count==1) {
				 		$_SESSION['login']=true;
				 		$_SESSION['user']=$username;
				 		$_SESSION['pass']=$password;
				 		header("location: ../dashboard/index.php");
				 	}else{
				 		?>
						<script type="text/javascript">alert("username password salah"); window.location = 'index.php'</script>
						<?php	
				 	}


				}		


	?>
	