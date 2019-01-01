    <?php
    session_start();
   include_once  '../login/conection.php';
   error_reporting(0);

    ?>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
   
  
    <link rel="stylesheet" href="assets/data_table/datatables.min.css">
      
    <link rel="stylesheet" href="assets/data_table/Select-1.2.6/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/data_table/FixedHeader/css/fixedHeader.bootstrap4.css">


    <link href="assets/weather/css/weather-icons.css" rel="stylesheet" />
    <link href="assets/calendar/fullcalendar.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/charts/chartist.min.css" rel="stylesheet"> 
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet"> 
     <div class="row">

<style>
    button {
        background-color: Transparent;
        background-repeat:no-repeat;
        border: none;
        cursor:pointer;
        overflow: hidden;
        outline:none;
        
    }
    @media print {
  #clear {
    display: none;
  }
}
</style>

     <div class="col-lg-2">
         
     </div>
                <div class="col-lg-8">
                    <div class="card">  
                         <img  src="../img/logo_admin.png" style="width:120px;margin:20px;margin-left:90px;position:absolute">
                            <h2 class="box-title" style="text-align:center;font-size:25px;margin-top:70px">Data Pemakaian Customer </h2>
                            <h4 class="box-title" style="text-align:lrft;margin-bottom:50px;margin-left:30px">Tanggal : <?php echo date("d m Y") ?></h4>
                            
                           
                         
                          
                          
                           

                            <table class=" table table-light " id="member">                             
                                        <thead class="thead-dark">
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th> Bulan Lalu</th>
                                                <th> Bulan ini</th>
                                               
                                                
                                            </tr><br>
                                        </thead>
                                    <?php
                                    $ambil=$dbkonek->query(" select No ,Customer_ID,Tanggal, Pemakaian_Bulan_Lalu,Pemakaian_Bulan_Ini,customer.nama from pemakaian join customer on Customer_ID = ID order by No ASC");
                                    while ($hasil=mysqli_fetch_array($ambil)) {
                                            
                                            ?>
                                            <tr class="text-center" >
                                        <td><?php echo $hasil['No']; ?></td>
                                        <td><?php echo $hasil['Customer_ID']; ?> </td>
                                        <td><?php echo $hasil['nama']; ?> </td>
                                        <td><?php echo $hasil['Tanggal']; ?> </td>
                                        <td><?php echo $hasil['Pemakaian_Bulan_Lalu']; ?> </td>
                                        <td><?php echo $hasil['Pemakaian_Bulan_Ini']; ?> </td>
<!--                                             
                                        <?php
                                                
                                        ?> -->
                                      
                                        
                                      
                                        
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                                                     
                                
                        </div> <!-- /.row --> 
                        </div>

                    
                        
     <div class="col-lg-2">
         <button onClick="print()" id="clear"  ><img src="images/print.png" style="margin:40px;" ></button>
     </div> <!-- /.row --> 

    
 <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>

    <script src="assets/js/lib/chartist/chartist.min.js"></script>
    <script>
   $("#myElementId").print({
    addGlobalStyles : true,
    stylesheet : null,
    rejectWindow : true,
    noPrintSelector : ".no-print",
    iframe : true,
    append : null,
    prepend : null
});
    </script>