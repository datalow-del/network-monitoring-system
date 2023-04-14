
<html lang="en" style="height: auto;"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Network Monitoring  | Dashboard </title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Network Monitorer favicon-->
  <link rel="icon" type="image/x-icon" href="dist/img/favicon.ico">
  <link href='default.css' rel='stylesheet' type='text/css' media='all' />
<style type="text/css">/* Chart.js */

@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-closed sidebar-collapse" style="height: auto;">
  <div class="wrapper">

<body>

         
<!-- Navbar & login session keeper-->
      <li class="nav-item">
        
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <?php
include_once 'dbConnectioninfo.php';
session_start();
if (!(isset($_SESSION['username']))) {
    header("location:index.php");
} else {
    $name     = $_SESSION['name'];
    $username = $_SESSION['username'];
    
    include_once 'dbConnectioninfo.php';
    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Welcome Back!,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
}
?>
      </li>
    </ul>



  <div id="header" class="container">
    <div id="logo">
      <h1>Network Monitorer / System Status</h1>
   
    </div>
    
 
  </div>
 
  <div id="menu">
      <ul>
        <li class="current_page_item"><a href="home.php" accesskey="1" title="">
            <font size=5>HOME</font>
          </a></li>
        
        <li><a href="logout.php" accesskey="1" title="">
            <font size=5>LOGOUT</font>
          </a></li>
      </ul>
    </div>

    
    <!-- Main content -->
    <section class="content" align='center' >
      <div class="container-fluid" align='center'>
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-server"></i></span>

              <div class="info-box-content">
              <span class="info-box-text">Public IP Address</span>
                <span class="info-box-number">
<?php 
$ip_address=file_get_contents('http://checkip.dyndns.com/');
$ip_address = str_replace("Current IP Address:","",$ip_address);
echo $ip_address;
?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="	fas fa-microchip"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Usage</span>
                <span class="info-box-number">
                <?PHP
        echo shell_exec("python3 scriptcpu.py");
        ?>
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-memory"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Memory Usage</span>
                <span class="info-box-number">
                <?PHP
                echo shell_exec("python3 scriptmemory.py");  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- fix for small devices only -->
         
         </div> 
         </div>

<div class="row" align='center'>
          <div class="col-md-12" align='center'>
            <div class="card" align='center'>
        

                <div class="card-tools" align='center'>
                  <div class="btn-group" align='center'>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card" align='center'>
                <div class="card-header" align='center'>
                  <h3 class="card-title ">Main / System Information</h3>
                </div>
  <div class="card-body p-0" align='center'>
                  <table class="table" align='center'>
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Label</th>
                        <th>Specifcation</th>
                        <th style="width: 40px"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Platform</td>
<td> <?PHP
                echo shell_exec("python3 osname.py");
                ?>
                        
</td>                 </tr>
                      <tr>
                        <td>2.</td>
                        <td>CPU Type</td>
                       <td><?PHP
                echo shell_exec(" python3 cpuname.py");
                ?></td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Uptime Duration </td>
                        <td>
                        <?PHP
                echo shell_exec("python3 scriptuptime.py");
                ?>
                        </td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Current Date and Time</td>
                        <td>
                        <p><span id="datetime"></span></p>
                        <script language="javascript">
 var today = new Date();
 document.write(today);
 </script>
                        </td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Network Bandwidth Usage</td>
                        <td>
                        <p><span id="datetime"></span></p>
                        <?PHP
                echo shell_exec("python3 networkband.py");
                ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
  </div>
  


 
 
</body>

</html>