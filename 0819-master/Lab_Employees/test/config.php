<?php
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$dbname = 'lab0818';
	$dbport = '8889' ;

    $link = mysqli_connect ($dbhost, $dbuser, $dbpass, null, $dbport) or die(mysqli_connect_error()) ;
    $result = mysqli_query ($link, "set names utf8") ;
    
    mysqli_select_db ($link, $dbname) ;

?>