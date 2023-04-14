<?PHP
         $output = shell_exec(" /bin/sh /var/www/html/finished/shellipv4.sh");

	 echo "<pre>$output</pre>";

	header( "refresh:21;url=http://164.132.241.118/finished/ipv4.php" );

	echo ' Please wait 21 seconds for capturing to be refreshed..... '
      ?>