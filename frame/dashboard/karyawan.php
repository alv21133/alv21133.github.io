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
    <title>Data Member</title>
    <meta name="description" content="sasori admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="apple-touch-icon" href="../img/judul.png">

    <link rel="shortcut icon" href="../img/judul.png"> 

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
                            <li><i class="fa fa-flash"></i><a href="ui-tabs.html">Invoice</a></li>                
                          
                           
                        </ul>
                    </li>

                    <li class="menu-title">Data Keuangan</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Keuangan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Keuangan</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Transaksi</a></li>
                            <li><i class="fa fa-dollar "></i><a href="maps-vector.html">Kerusakan</a></li>
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

            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7f-cash"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text">Rp <span class="count">23569</span></div>
                                        <div class="stat-heading">Pendapatan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7f-cart"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text">Rp <span class="count">34350</span></div>
                                        <div class="stat-heading">Pengeluaran</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7f-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count">68</span></div>
                                        <div class="stat-heading">Agenda</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7f-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                          <?php
                                        $ambil=$dbkonek->query("select count(ID) as jumlah from customer");
                                        while ($hasil=mysqli_fetch_array($ambil)) {           
                                        ?>
                                        <div class="stat-text"><span class="count"><?php echo $hasil['jumlah'];  ?></span></div> 
                                        <?php
                                        }
                                        ?>                                                   
                                        <div class="stat-heading">Anggota</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Widgets End -->


            <!--  Traffic  -->
            <div class="row">
                
                  <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-7"style="text-align:center" >Status Penggunaan air</h4>
                                <div class="flot-container">
                                    <div id="cpu-load" class="cpu-load"></div>
                                </div>
                            </div>
                        </div>
                    </div>          


                            <div class="col-lg-4">
                                <div class="card-body">
                                      <div class="col-lg-12">
                                            <div class="card weather-box">
                                                <h4 class="weather-title box-title">Cuaca hari ini</h4>
                                                <div class="card-body">  
                                                    <div class="weather-widget">
                                                        <div id="weather-one" class="weather-one">koko</div>
                                                    </div> 
                                                </div>
                                            </div><!-- /.card -->
                                </div> <!-- /.card-body -->
                            </div>
                        </div> <!-- /.row --> 
                        
                        <div class="card-body"></div>
                    </div> 
                </div><!-- /# column -->
            </div>
            <!--  Traffic  End -->


            <div hidden class="row">

                    <div class="col-xl-4">
                        <div class="row"> 
                            <div class="col-lg-6 col-xl-12">
                                <div class="card br-0"> 
                                    <div class="card-body">
                                        <div class="chart-container ov-h">
                                            <div id="flotPie1" class="float-chart"></div>
                                        </div>
                                    </div> 
                                </div><!-- /.card -->
                            </div>

                            <div class="col-lg-6 col-xl-12">
                                <div class="card bg-flat-color-3  ">
                                    <div class="card-body">
                                        <h4 class="card-title m-0  white-color ">August 2018</h4>
                                    </div>
                                     <div class="card-body">
                                         <div id="flotLine5" class="flot-line"></div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-md-4 -->
                </div> 
            </div> <!-- /.order -->





            <!-- To Do and Live Chat --> 
            <div hidden class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title box-title">kegiatan</h4>
                            <div class="card-content">
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span> 
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div> <!-- /.todo-list -->
                            </div>
                        </div> <!-- /.card-body -->
                    </div><!-- /.card -->
                </div>

            
            </div> <!-- /.row -->
            <!-- To Do and Live Chat End --> 

            <!-- Calender Chart Weather  -->
            <div hidden class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">  
                            <!-- <h4 class="box-title">Chandler</h4> -->
                            <div class="calender-cont widget-calender">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card ov-h">
                        <div class="card-body bg-flat-color-2"> 
                            <div id="flotBarChart" class="float-chart ml-4 mr-4"></div>
                        </div>
                        <div id="cellPaiChart" class="float-chart"></div> 
                    </div><!-- /.card -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card weather-box">
                        <h4 class="weather-title box-title">Weather</h4>
                        <div class="card-body">  
                            <div class="weather-widget">
                                <div id="weather-one" class="weather-one"></div>
                            </div> 
                        </div>
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->
            <!-- Calender Chart Weather  End -->







            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add a category </strong></h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->

        </div> <!-- .content -->



        <div class="clearfix"></div>

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
