<!-- php function of deploying the policy !-->
<?php
if(isset($_POST['go'])){
    $address = $_POST['rules'];
     // split address by new line
    $address = explode("\n", $address);
    // foreach address line
    foreach($address as $line){
        //exec line as command after appending iptables to it
        //strip line of spaces and tabs and convert to string
        $line = trim($line);
        exec("sudo iptables $line ");
        echo '/n';
    }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Network Monitorer / Apply Policy</title>

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
<script type="text/javascript" src="js/iptables.js"></script>
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
<h1 style="text-align:center">Network Monitorer / Apply Policy</h1>
<form method="POST" align='center' >
  <textarea type="textarea" name="rules"></textarea>
  <input type="submit" name="go" method="post">

</form>

</br>
</br>
<div align="right" style="padding-top:0.2em"><a href="http://164.132.241.118/finished1/index.php"> Back Home > </a></div>

</div>
</body>
</html>
