<?php

shell_exec("shellipv4.sh");
?>

<html>

<head>
        <title>Network Monitorer</title>
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />
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
include_once '../dbConnectioninfo.php';
session_start();
if (!(isset($_SESSION['username']))) {
    header("location:index.php");
} else {
    $name     = $_SESSION['name'];
    $username = $_SESSION['username'];
    
    include_once '../dbConnectioninfo.php';
    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Welcome Back!,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
}
?>
      </li>
    </ul>

        <div id="header" class="container">
                <div id="logo">
                        <h1>Network Monitorer</h1>
                        
                </div>
                <div id="menu">
                        <ul>
                                <li class="current_page_item"><a href="home.php" accesskey="1" title="">
                                                <font size=5>HOME</font>
                                        </a></li>
                                <li><a href="ipv4.php" accesskey="2" title="">
                                                <font size=5>IPv4</font>
                                        </a></li>
                                <li><a href="arp.php" accesskey="3" title="">
                                                <font size=5>ARP</font>
                                        </a></li>
                                <li><a href="udp.php" accesskey="3" title="">
                                                <font size=5>UDP</font>
                                        </a></li>
                                <li><a href="ip4.php" accesskey="4" title="">
                                                <font size=5>Refresh</font>
                                        </a></li>
                                <li><a href="top.php" accesskey="5" title="">
                                                <font size=5>TOP TALKERS</font>
                                        </a></li>
                                <li><a href="logout.php" accesskey="1" title="">
                                                <font size=5>LOGOUT</font>
                                        </a></li>
                        </ul>
                </div>
        </div>
        <div id="wrapper3" align="center">
                <p>
                        Click on the Protocol name to view details.

                </p>
        </div>
</body>

</html>