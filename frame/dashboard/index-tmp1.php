<!-- <?php
//error_reporting(0);
//session_start();
include_once  '../login/conection.php';
//if (isset($_SESSION['login']) != TRUE) {
 //   header("location: ../login/");
//}
?> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>go water </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Go Water Admin </title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="apple-touch-icon" href="images/favicon.png">
	<link rel="shortcut icon" href="images/favicon.png">
	
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link href="assets/weather/css/weather-icons.css" rel="stylesheet" />
    <link href="assets/calendar/fullcalendar.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/charts/chartist.min.css" rel="stylesheet"> 
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet"> 

</head>
</table>
<table class=" table table-striped">
  
	<thead class="thead-dark">
          <h4>Tabel Pegawai</h4>
		<tr>
			<th>id </th>
			<th>nama </th>
			<th>Alamat</th>
			<th>Telp</th>
		</tr><br>
	</thead>
<?php
$ambil=$dbkonek->query("select * from  pegawai");
while ($hasil=mysqli_fetch_array($ambil)) {
		
		?>
		<tr>
	<td><?php echo $hasil['ID']; ?> </td>
	<td><?php echo $hasil['Nama']; ?> </td>
	<td><?php echo $hasil['Alamat']; ?> </td>
	<td><?php echo $hasil['Telp']; ?> </td>
	
</tr>
<?php
}
?>
</table>

<body>
</table>
<table class=" table table-striped">
  
	<thead class="thead-dark">
          <h4>Tabel Customers</h4>
		<tr>
			<th>id Customres</th>
			<th>nama </th>
			<th>Alamat</th>
			<th>Telp</th>
			<th>Status</th>
		</tr><br>
	</thead>
<?php
$ambil=$dbkonek->query("select * from customer");
while ($hasil=mysqli_fetch_array($ambil)) {
		
		?>
		<tr>
	<td><?php echo $hasil['ID']; ?> </td>
	<td><?php echo $hasil['Nama']; ?> </td>
	<td><?php echo $hasil['Alamat']; ?> </td>
	<td><?php echo $hasil['Telp']; ?> </td>
	<td><?php echo $hasil['Status']; ?> </td>
	
</tr>
<?php
}
?>
</table>


</body>
</html>