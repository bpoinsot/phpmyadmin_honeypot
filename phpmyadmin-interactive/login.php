<?php
// the name of the file you're writing to
$myFile = "log.txt";

// opens the file for appending (file must already exist)
$fh = fopen($myFile, 'a+');

// Makes a CSV list of your post data
$comma_delimited_list = implode(", ", $_POST) . "\n";

// Write to the file
fwrite($fh, $comma_delimited_list);

// You're done
fclose($fh);

// redirect
header( 'Location: index2.php' ) ;
?>
