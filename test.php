<?php
// Connecting, selecting database
$dbconn = pg_connect("host=127.0.0.1 dbname=project user=postgres password=1234")
    or die('Could not connect: ' . pg_last_error());
	$usn = $_POST['usn'];
	
    $query="select name from student where usn='".$usn."';";       
	$res=pg_query($query);
     $row=pg_fetch_array($res,null,PGSQL_ASSOC);
     echo $row['name']; echo '<br>';
?>