<?php
//error_reporting(0);

session_start();

include_once  '../login/conection.php';
if (isset($_SESSION['user']) == null) {
   header("location: ../login/");
 
}else{

include_once'simpan_laporan_kerusakan.php';
?>

<!doctype html>

 <html class="no-js" lang="">
<head  >
<meta charset="utf-8">
    
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
<body style=" background-image: url(../img/bg-img/welcome-bg.png);
    height: 900px;
    position: relative;
    z-index: 1;
    background-position: bottom center;
    background-size: cover;"> 

    <!-- Left Panel --> 
    <aside id="left-panel" class="left-panel "  >
        <nav class="navbar navbar-expand-sm navbar-default"  > 
            <div id="main-menu" class="main-menu collapse navbar-collapse" >
                <ul class="nav navbar-nav" >
                    <li class="active">
                        <a href="dashboard_member.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <div class="card" >
                        <div class="card-header font-weight-bold" style="text-align:center">Lapor Kerusakan</div>
                        <div class="card-body card-block">
   <!--input -->           <form action="" method="POST" class="">  
                                <div class="form-group">
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon">Username</div> -->
                                        <input type="text" readonly id="username3" name="id" class="form-control " style="text-align:center; color:Black" placeholder="Nama " value="<?php echo $_SESSION['unix'] ?>">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                
                                        <div class="col-12 col-md-12"><textarea name="detail" id="textarea-input" rows="9" placeholder="Detail Kerusakan..." class="form-control"></textarea></div>
                                    </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon">Password</div> -->
                                        <input type="text" id="password3" name="lokasi" class="form-control" placeholder="Lokasi Kerusakan.." >
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    </div>
                                </div>
                                <div class="form-actions form-group" style="text-align:center" >
                                    <input type="submit" name="submit" class="btn btn-primary btn-sm" value=" kirim "></input>
                                </div>
                            </form>
                        </div>
                    </div>
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
                    <a class="navbar-brand" href="./"><img style="width: 70px; height:45px" src="../img/logo_gowater.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> 
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> 
                </div> 
            </div>
            <div class="top-right"> 
                <div class="header-menu"> 
                  <div class="user-area dropdown float-right ">
                        <a href="#" class="dropdown-toggle active " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <div style="
                                
                                                 position:absolute;
                                                border-radius: 27px;
                                                border: 2px solid rgb(130, 0, 170);
                                                padding: 20px;                             
                                                width: 210px;                                                
                                                height: 10px; 
                                                


                                "></div>
                                <h5 style="margin:3px;" ><?php echo $_SESSION['unix']; ?></h5 style="margin:3px;" >
                                <h5 style="margin:19px;" ><?php echo $_SESSION['user']; ?></h5 style="margin:3px;" >
                                
                        <img class="user-avatar rounded-circle" src="../img/bg-img/client-1.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Agenda<span class="count">2</span></a>

  
                            <a class="nav-link" href="../dashboard/keluar.php"  ><i class="fa fa-power-off"></i>Keluar</a>
                        </div>
                    </div> 
                </div>  
            </div>
        </header><!-- /header -->
        <!-- Header-->


        <div class="content pb-0">
                <?php
               
                $user=$_SESSION['unix'];
               
                $user=$dbkonek->query("select ID,Nama, Saldo, pemakaian.Tanggal , pemakaian.Pemakaian_Bulan_Ini, transaksi.Biaya, transaksi.Tanggal_Bayar from customer join pemakaian on ID = pemakaian.Customer_ID join transaksi on ID = transaksi.Customer_ID where ID = '$user' ORDER BY Tanggal DESC LIMIT 1
                                    ");
                
                    while ($data=mysqli_fetch_array($user)) 
                    {

                        
                        
                        
                ?>
                    
                               
            <!-- Widgets  -->
            <div class="row" >
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7f-cart "></i>
                                </div>                    
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count"><?php echo $data['Pemakaian_Bulan_Ini']?></span> m<sup>3</sup></div>
                                        
                                        <div class="stat-heading">Pemakaian </div>
                                        <div style="position:absolute" class="stat-heading"><?php  echo $newDate = date("d-m-Y", strtotime($data['Tanggal'])); ?></div>
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
                                <div class="stat-icon dib flat-color-2" >
                                    <i class="pe-7f-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text" ><h style="position:absolute;left:6rem;" >Rp</h><span class="count"><?php $b=$data['Pemakaian_Bulan_Ini']; echo $b*2000 ?></span></div>
                                        <div class="stat-heading">Biaya</div> 
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
                                    <i class="pe-7f-cash"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><h style="position:absolute;left:6rem;" >Rp</h><span class="count"><?php echo $data['Saldo'] ?></span></div>
                                        <div class="stat-heading">Saldo</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }

                ?>
             
                <div class="col-lg-3 col-md-6"><a href="#agenda">
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7f-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                          <?php
                                        $ambil=$dbkonek->query("select count(No) as jumlah from agenda");
                                        while ($hasil=mysqli_fetch_array($ambil)) {           
                                        ?>
                                        <div class="stat-text"><span class="count"><?php echo $hasil['jumlah'];  ?></span></div> 
                                        <?php
                                        }
                                        ?>                                                   
                                        <div class="stat-heading">Agenda</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></a>
                </div>
            </div> 
            <!-- Widgets End -->

            <!--  Traffic  -->
            <div class="row" >
                
                  <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-7"style="text-align:center " >Status Penggunaan Saya </h4>
                                <div class="flot-container">
                                     <canvas id="team-chart"></canvas>
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
                        
                        <div class="card-body">
                           
                        </div>
                    </div> 

                               
                                <div class="card" id="agenda">
                                                  <div class="row">
                                                <div class="col-sm-4">
                                                        <div class="card-body ">  
                                                          
                                                            <div class="calender-cont widget-calender">
                                                                <div id="calendar"></div> 
                                                            </div>
                                                        </div>
                                                </div>
                                            
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <h4 class="mb-7 font-weight-bold"style="text-align:center " >Agenda yang akan datang : </h4>
                                                    <div class="flot-container">
                                                            
                                                                        <div class="card-body">
                                                                            <table class="table">
                                                                                <thead class="" >
                                                                                    <tr >
                                                                                    <th scope="col">No</th>
                                                                                    <th scope="col">Tanggal</th>
                                                                                    <th scope="col">Keterangan</th>
                                                                                
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                $get=$dbkonek->query("select * from agenda");                                   

                                                                                while ($agenda=mysqli_fetch_array($get)) {

                                                                                    ?>
                                                                                
                                                                                    
                                                                            
                                                                                <tr>
                                                                                    
                                                                                    <td><?php echo $agenda['No'];?></td>
                                                                                    <td><?php echo  date('d-m-Y ',strtotime($agenda['Tanggal']));?></td>
                                                                                    <td><?php echo $agenda['Keterangan'];?></td>
                                                                                
                                                                                </tr>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>   <!--table -->                                                               
                                                                   
                                                        </div>
                                                    </div>
                                            </div>
                                </div>
                            </div>
                       

                </div><!-- /# column -->
            </div>
            <!--  Traffic  End -->


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


    

    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
     <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script

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
    >

    <!--  Chart js -->
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/lib/chart-js/chartjs-init.js"></script>





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

<?php
}
?>
