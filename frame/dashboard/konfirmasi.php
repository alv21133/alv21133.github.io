<?php
//error_reporting(0);
//session_start();
include_once  '../login/conection.php';
//if (isset($_SESSION['login']) != TRUE) {
 //   header("location: ../login/");
//}
?>


<!doctype html>

 <html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Konfirmasi Member</title>
    <meta name="description" content="sasori admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../img/judul.png">
    <link rel="shortcut icon" href="../img/judul.png"> 
    <link rel="stylesheet" href="assets/css/normalize.css">
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


    <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart { 
            min-height: 335px; 
        }
        #flotPie1  {
            height: 150px;
        } 
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        } 

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>

</head>
<body>


    <!-- Left Panel --> 
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default"> 
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="karyawan.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">GO WATER PDATA</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Member</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="data_member.php">Data Member</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="tambah_akun_member.php">Tambah Akun</a></li>
                            <li><i class="fa fa-pencil"></i><a href="#">Konfirmasi Member</a></li>                
                            <li><i class="fa fa-flash"></i><a href="update_pemakaian.php">Pemakaian</a></li>                                      
                        </ul>
                    </li>

                    <li class="menu-title">Data Keuangan</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Keuangan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="keuangan.php">Keuangan</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="transaksi.php">Transaksi</a></li>
                            <li><i class="fa fa-dollar "></i><a href="kerusakan.php">Kerusakan</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Agenda</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Kegiatan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Pengunguman</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Planing</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel --> 
    <!-- Left Panel -->

    <!-- Right Panel --> 
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">  
            <div class="top-left">
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="../"><img style="width: 70px; height:45px" src="../img/logo_admin.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> 
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> 
                </div> 
            </div>
            <div class="top-right"> 
                <div class="header-menu"> 
                  <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>
                            <a class="nav-link" onclick="<?php session_unset()?>" href="../login/"  ><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div> 
                </div>  
            </div>
        </header><!-- /header -->
        <!-- Header-->


        <div class="content pb-0">


            <div class="clearfix"></div>



            <!-- tabel data -->
            <!--  Traffic  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">  
                        
                            <h4 class="box-title" style="text-align:center">Data Customer Baru</h4>
            
                            <table class=" table table-striped " id="member">                             
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>id Pelanggan</th>
                                                <th>nama </th>
                                                <th>Alamat</th>
                                                <th>Telp</th>
                                                <th>Status</th>
                                                <th>Paket</th>
                                                <th>Terima</th>
                                                <th>Hapus</th>
                                                
                                            </tr><br>
                                        </thead>
                                    <?php
                                    $ambil=$dbkonek->query("select * from customer where Status='Belum Verifikasi'");
                                    while ($hasil=mysqli_fetch_array($ambil)) {
                                            
                                            ?>
                                            <tr>
                                        <td><?php echo $hasil['ID']; ?> </td>
                                        <td><?php echo $hasil['Nama']; ?> </td>
                                        <td><?php echo $hasil['Alamat']; ?> </td>
                                        <td><?php echo $hasil['Telp']; ?> </td>
                                            
                                        <?php
                                                if ($hasil['Status']== "Lunas") {
                                                    ?>
                                                <td class="badge badge-success"><?php echo $hasil['Status']; ?> </td>
                                                <?php
                                                }else{
                                                    ?>
                                                  <td class="badge badge-danger"><?php echo $hasil['Status']; ?> </td> 
                                                  <?php
                                                }
                                        ?>
                                        <td><?php echo $hasil['paket']; ?> </td>
                                        <td>
                                        <a style="margin-left:2rem;" href="terima_konfirmasi.php?qwz=<?php echo $hasil['ID'];?>" class="btn btn-info" onclick="return confirm('Data <?php echo $hasil['Nama'];?> Akan di Konfirmasi..?')"  value="" >Terima</a> 
                                        </td>
                                        <td >
                                                    <script>
                                                        function show() {
                                                         $('#button1').on('click', function() {
                                                            $('#hapus_modal').show();
                                                        });

                                                        }
                                                    
                                                    </script>
                                                                           
                                            <a href="delete_new.php?qwz=<?php echo $hasil['ID'];?>" class="ti-trash" onclick="return confirm('Anda yakin data <?php echo $hasil['Nama'];?> ingin menghapus..?')"></a>                                       
                                      </td>                                                                             
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                        <div class="row">                              
                                
                        </div> <!-- /.row --> 



                        
                        <div class="card-body"></div>
                    </div> 
                </div><!-- /# column -->
            </div>
            <!--  Traffic  End -->
        <!-- tabel2 -->

                                                    <!-- Modal -->
                <div class="modal fade" id="hapus_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda yakin untuk menghapus data ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <?php echo $t_id?>
                    </div>
                    <div class="modal-footer">
                        <a href="konfirmasi.php"><button type="button" class="btn btn-primary">Hapus</button></a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>       
                    </div>
                    </div>
                </div>
                </div>







        </div> <!-- .content -->
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="#">sasori</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

 
 

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/vendor/Jquery3.1.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
       <script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.spline.js"></script>

    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/data_table/datatables.min.js"></script>
    <script src="assets/data_table/select-1.2.6/js/select.bootstrap4.min.js"></script>
    <script src="assets/data_table/FixedHeader/js/dataTables.fixedHeader.min.js"></script>
   


    <!--Chartist Chart-->
    <script src="assets/js/lib/chartist/chartist.min.js"></script>
    <script src="assets/js/lib/chartist/chartist-plugin-legend.js"></script> 

    <script src="assets/weather/js/jquery.simpleWeather.min.js"></script>
    <script src="assets/weather/js/weather-init.js"></script>


    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/calendar/fullcalendar.min.js"></script>
    <script src="assets/calendar/fullcalendar-init.js"></script>



            <script>

                
            </script>



<script>
    jQuery(document).ready(function() {
   jQuery('#member').DataTable( {
         "language": {
            "lengthMenu": "Tampilkan _MENU_ ",
            "zeroRecords": "Data Tidak Ada",
            "info": "Halaman _PAGE_ Dari _PAGES_",
            "infoEmpty": "Data Tidak Ada",
            "search": "Cari",
            "paginate": {
                       "next":       "Lanjut",
                        "previous":   "Sebelumnya"
                        },
            
            
        },
        select: {
        style: 'single'
        },
        fixedHeader: {
            header: true,
            footer: true
        }
       
    } );
} );






        jQuery(document).ready(function($) {
            "use strict"; 

            // Pie chart flotPie1 
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: { 
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });

            

        });  // End of Document Ready 
    </script>


    




<div id="container">
  
 
  



</body>
</html>
