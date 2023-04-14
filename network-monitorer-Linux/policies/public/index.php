<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Network Monitorer / Create Policy</title>
<style type="text/css">
.orange { color: #FF9900; }
.block { background-color:#E1E1E1; margin-left: 1em; padding: 0.5em; border:solid 1px #BBBBBB }
.block2 { padding-left: 2em; }
.desc { background-color:#E9F3F5; margin-left: 1em; padding: 0.5em; border:solid 1px #C0D8DC;  }
.rules { background-color:#FFCCCC; margin-left: 1em; padding: 0.5em; border:solid 1px #C0D8DC;  }
.command { font-family:"Courier New", Courier, mono; }
#wrapper { width: 600px; background-color:#FFFFFF; margin: 0 auto; padding: 2em; border:solid 1px #CCCCCC; }
BODY {font-family:"Trebuchet MS", Arial, Verdana, Helvetica, sans-serif; font-size:12px; background-image:url('https://www.itl.cat/pngfile/big/210-2101051_dark-web-scanning-background-image-for-website-of.jpg') ;  }
</style> 
<script type="text/javascript" src="js/create.js"></script>
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


</head>
<body>
           
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
    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Welcome Back!,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://164.132.241.118/finished1/logout.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
}
?>
      </li>
    </ul>

<div id="wrapper">
<h1 style="text-align:center">Network Monitorer / Create Policy</h1>
<form id="form" name="form" method="post" onsubmit="return generateIPTables()">
  <p class="desc">Create filtering policy to be deployed on the system.</p>
  <p class="rules" id="ruleset"> Your ruleset will appear here </p>
  <p><b>General Options</b></p>
  <p class="block">
	<label>
	<input type="checkbox" name="isRedHat" value="checkbox" />
	Is this a RedHat 5.x / CentOS 5.x server?</label>
	<br />
    <label>
    <input type="checkbox" name="loopback" value="checkbox" checked="checked" />
    Allow traffic to/from loopback device</label>
    <br />
    <label>
    <input type="checkbox" name="outgoing" value="checkbox" checked="checked" />
    Block outgoing traffic (does not affect established sessions and DNS queries)</label>
  </p>
  <p class="block2">Usually, anything arriving or exiting on a loopback interface should be allowed. This is because local applications sometimes bounce data to each other using the TCP/IP stack via loopback.</p>
  <p><b>Accept Inbound Traffic</b></p>
  <p class="block">
    <label><input type="checkbox" name="tcp_21" value="21" /> FTP (21)</label>
	  <label><input type="checkbox" name="tcp_22" value="22" /> SSH (22)</label>
    <label><input type="checkbox" name="tcp_25" value="25" /> SMTP (25) </label>	
    <label><input type="checkbox" name="tcp_80" value="80" /> HTTP (80) </label>
    <label><input type="checkbox" name="tcp_110" value="110" /> POP3 (110) </label>
    <label><input type="checkbox" name="udp_123" value="123" /> NTP (123) </label>
    <label><input type="checkbox" name="udp_67" value="67" /> DHCP (67) </label>
    <br />
    <label><input type="checkbox" name="udp_9987" value="9987" /> Teamspeak VOIP (9987) </label>
    <label><input type="checkbox" name="udp_53" value="53" /> DNS (53) </label>
  </p>

  <p class="block2">By default, all inbound traffic is blocked. Thus, select the services your want the outside world to have access to on your host.</p>

  <p><b>Custom TCP port(s) </b></p>
  <p class="block">
  <label>
  <input type="text" name="start_port" />
  Start Port</label>
  <label>
  <input type="text" name="end_port" />
  End Port (Optional)</label>
  </p>
  <p class="block2">Enter a custom TCP port - or port range between 1 - 65535.</p>
  
  <p><b>Accept Inbound ICMP Messages </b></p>
  <p class="block">
    <label>
    <input type="checkbox" name="icmp_8" value="8" />
Ping (echo-request)</label>
    <label>
    <input type="checkbox" name="icmp_11" value="11" />
Traceroute (Time Exceeded)</label>
  </p>
  <p class="block2">ICMP (Internet Control Message Protocol) messages are used to report error conditions and controlling connections to your server. If you wish your host to be able to respond to <span class="command">ping</span> or <span class="command">traceroute</span>, enable the options above.</p>
  
  <p><b>Restricted  Inbound Client Access </b></p>
  <p class="block">
  <label>
  <input type="text" name="network" value="0.0.0.0/0" />
  Permitted network</label>
  </p>
  <p class="block2">By default, <code>0.0.0.0/0</code> will allow anyone to access to any addresses. In order to only allow private LAN connections, set this value to <code>10.0.0.0/24</code> or similar.</p>
  <br>
  
  <p align="center">
    <label >
    <input type="submit"  name="Submit" value="Generate Policy" />
    </label>
  </p>
  <p >
  <div  align="center"style="padding-top:0.2em"><a href="../applyrules.php"> < APPLY RULES >  </a></div>
  </p>
 
</form>
<div align="right" style="padding-top:0.2em"><a href="../../index.php"> Back Home > </a></div>


</body>
</html>
