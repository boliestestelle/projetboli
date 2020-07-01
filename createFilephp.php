<?php 
/* set the FTP hostname */ 
$user = "test"; 
$pass = "myFTP"; 
$host = "example.com"; 
$file = "tests.txt"; 
$hostname = $user . ":" . $pass . "@" . $host . "/" . $file; 

/* the file content */ 
$content = "this is just a test."; 

/* create a stream context telling PHP to overwrite the file */ 
$options = array('ftp' => array('overwrite' => true)); 
$stream = stream_context_create($options); 

/* and finally, put the contents */ 
file_put_contents($hostname, $content, 0, $stream); 
?>