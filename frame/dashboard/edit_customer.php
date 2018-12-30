<?php
//error_reporting(0);
//session_start();
include_once  '../login/conection.php';
include_once  'update_data_customer.php';
//if (isset($_SESSION['login']) != TRUE) {
 //   header("location: ../login/");
//}

?>

<!doctype html>

 <html class="no-js" lang="">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Data Member</title>
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
                    <li class="menu-title">Go Water Data</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Member</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="data_member.php">Data Member</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="tambah_akun_member.php">Tambah Akun</a></li>
                            <li><i class="fa fa-pencil"></i><a href="konfirmasi.php">Konfirmasi Member</a></li>                
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
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="agenda.php">Agenda</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="#">Planing</a></li>
                        </ul>
                    </li>
                  
                </div>
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
                    <a class="navbar-brand" href="./"><img style="width: 70px; height:45px" src="../img/logo_admin.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> 
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> 
                </div> 
            </div>
            <div class="top-right"> 
                <div class="header-menu"> 
                  <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../img/bg-img/client-1.jpg" alt="User Avatar">
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


         <!--  Traffic   tabel detail customers-->
            <div class="row">
            <?php 
                        $id=$_GET['%rwz%qr$'];      
                        $view=$dbkonek->query("select * from customer where ID='$id'");
                        while ($data=mysqli_fetch_array($view)) {
                                            
                             ?>
                  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-7 font-weight-bold" >ID : <?php echo $data['ID']?> <h4 class="mb-7 font-weight-bold" style="text-align:center"><?php echo $data['Nama']?></h4></h4>                                    
                                    <form action="" method="POST">
                                        
                                            
                                            <div class="row"> 
                                                <div class="col-md-3">
                                                    <img   src="../dashboard/images/user.png" style=" width:200px;" ></img>
                                                    </div>
                                            

                                                 <div class="col-md-9">
                                                        <div class="form-row ">

                                                               <input hidden name="id" value="<?php echo $data['ID']?>"></input>    
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="validationServer01">Nama</label>
                                                                    <input type="text" name="nama" class="form-control is-valid" id="validationServer01"  value="<?php echo $data['Nama']?>" required>
                                                                        <div class="valid-feedback">
                                                                                GoWater Data !
                                                                    </div>
                                                                </div>
                                                                    
                                                            <div class="col-md-6 mb-3">
                                                                    <label for="validationServer02">Alamat</label>
                                                                    <input type="text" name="alamat"class="form-control is-valid" id="validationServer02" value="<?php echo $data['Alamat']?>" required>
                                                                            <div class="valid-feedback">
                                                                                GoWater Data ! 
                                                                     </div>
                                                            </div>
                                                            
                                                        </div>
                                                <!-- row2 -->
                                                <div class="form-row">
                                                  
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationServer01">No Telepon</label>
                                                        <input type="text" name="telpon" class="form-control is-valid" id="validationServer01"  value="<?php echo $data['Telp']?>" required>
                                                                <div class="valid-feedback">
                                                                     GoWater Data !
                                                                </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationServer02">Status Pembayaran</label>
                                                            <!-- <input type="text" name="bayar" class="form-control is-valid" id="validationServer02" value=required> -->
                                                            <select class="form-control is-valid" name="bayar" id="validationServer02">
                                                                <option value="<?php echo $data['Pembayaran']?>"><?php echo $data['Pembayaran']?> </option>
                                                                    <?php
                                                                    if ($data['Pembayaran']==Lunas) {
                                                                        echo"<option value='Belum Lunas'>Belum Lunas</option>";
                                                                    }else{
                                                                        echo"<option value='Lunas'>Lunas</option>";
                                                                    }
                                                                    ?>
                                                                
                                                            </select>  
                                                            
                                                            
                                                            <div class="valid-feedback">
                                                                        GoWater Data !
                                                                    </div>
                                                    </div>
                                                            
                                                </div>
                                                <!-- row3 -->
                                                <div class="form-row">
                                                    
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationServer01">Paket</label>
                                                        <input type="text" name="paket" class="form-control is-valid" id="validationServer01"  value="<?php echo $data['paket']?>" required>
                                                                <div class="valid-feedback">
                                                                     GoWater Data !
                                                                </div>
                                                    </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="validationServer02">Status Customer</label>
                                                                <input type="text" name="status" class="form-control is-valid" id="validationServer02" value="<?php echo $data['Status']?>" required>
                                                                        <div class="valid-feedback">
                                                                            GoWater Data !
                                                                        </div>
                                                            </div>
                                                            
                                                              </div>
                                                            </div>
                                                         <div class="col-md-1"></div>
                                          
                                             
                                                    </div> <!-- row -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div style="text-align:center;">
                                                                <input class="btn btn-info" type="submit" name="submit" value="Simpan"></input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                         </form>

                                    
                                      
                            </div>
                        </div>
                    </div>         

                    <!-- ahir form  -->


            
            </div> <!-- /.order -->





        </div> <!-- /.row -->
            <!-- To Do and Live Chat End --> 


<!-- .content -->
        <div class="clearfix"></div>
        
    <section>
        <footer class="site-footer">
            <div class=" card" >
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; 2018 
                        </div>
                        <div class="col-sm-6 text-right">
                            Designed by <a href="#">Sasori</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    </div><!-- /#right-panel -->

   <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>


    <!--Chartist Chart-->
    <script src="assets/js/lib/chartist/chartist.min.js"></script>
    <script src="assets/js/lib/chartist/chartist-plugin-legend.js"></script> 

    
    <script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.spline.js"></script>


    <script src="assets/weather/js/jquery.simpleWeather.min.js"></script>
    <script src="assets/weather/js/weather-init.js"></script>


    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/calendar/fullcalendar.min.js"></script>
    <script src="assets/calendar/fullcalendar-init.js"></script>
     <script src="assets/js/lib/flot-chart/excanvas.min.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="assets/js/lib/flot-chart/curvedLines.js"></script>
    <script src="assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="assets/js/lib/flot-chart/flot-chart-init.js"></script>
    <script>
        jQuery(document).ready(function($) {
            "use strict"; 

            
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

            // Pie chart flotPie1  End

            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'} 
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: { 
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }
                
            });

            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });

             // Line Chart  #flotLine5 End


 


            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End

            


            //Traffic chart chart-js 
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        } 
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End 



            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End

        });  // End of Document Ready 
    </script>




<div id="container">
  
 
  
</div>



</body>
</html>
