
<html lang="en" style="height: auto;"><head>
head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Network Monitorer favicon-->

  <link rel="icon" type="image/x-icon" href="dist/img/favicon.ico">
<title> Network Monitorer  </title>
   
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href='default.css' rel='stylesheet' type='text/css' media='all' />

 <!-- Network Monitorer Login session-->
 
</head>
<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-closed sidebar-collapse" style="height: auto;">
           
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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


<div id='header' class='container'>
                <div id='logo'>
                        <h1>Network Monitorer / Dashboard</h1>
                        <span>Please select IP address type for the analyses.</span>
                </div>
                <div id='menu'>
                        <ul>
                                <li><a href='logout.php' accesskey='2' title=''>
                                                <font size=4>LOGOUT</font>
                                        </a></li>
                        </ul>
                </div>
        </div>
        <div id='wrapper3' align='center'>
                <a href='ip4.php' class='button button-small'>IPv4 Monitoring</a><br>
                <a href='ip6.php' class='button button-small'>IPv6 Monitoring</a><br>
                <a href='policies/public' class='button button-small'>Create Filter Policy</a><br>
                <a href='system.php' class='button button-small'> Server Status</a><br>
        </div>
<div class="row footer">
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login" style="color:lightyellow"> </a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers" s style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Developer Info</a>
</div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Asia Pacific University</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/adil.jpg" width=100 height=100 alt="adil" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a  style="color:#202020; font-family:'typo' ; font-size:18px" title="">Mohamed Adil</a>
		<h4 style="font-family:'typo' ">mohameddata187@gmail.com</h4>
		<h4 style="font-family:'typo' ">UC3F2008IT(ISS), TP055842 </h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="col-md-2 box">
<a href="feedback.php" style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Feedback</a></div>
   <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>


</body>

</html>