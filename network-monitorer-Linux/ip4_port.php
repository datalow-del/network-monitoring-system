<?php
include('session.php');
?>
<html>

<head>
        <title>Welcome</title>
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
        <div id="header" class="container">
                <div id="logo">
                        <h1>Dashboard</h1>
                        <span>Welcome</span>
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
                <form name="form1" method="post" action="porto1.php">

                        <?php
                        $conn = new mysqli("localhost", "root", "", "packets");
                        if ($conn->connect_error) {
                                die('Could not connect: ' . $conn->connect_error);
                        }
                        $query = "Select DISTINCT Destination_Port FROM ip";
                        $execute = mysqli_query($conn, $query);
                        echo "</br></br> Select a Port Number for Other Applications Analysis: ";
                        echo '<select name="port_number">';
                        while ($row = mysqli_fetch_array($execute)) {
                                echo '<option value="' . $row['Destination_Port'] . '">' . $row['Destination_Port'] . '</option>';
                        }
                        echo "</select></br></br>";
                        $conn->close();
                        ?>
                        <input type="submit" align="center" value="submit"></input>
                </form>
        </div>
</body>

</html>