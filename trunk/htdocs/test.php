<?php

/* JPEGCam Test Script */
/* Receives JPEG webcam submission and saves to local file */

$filename = date('YmdHis') . '.jpg';
$result = file_put_contents( $filename, $HTTP_RAW_POST_DATA );
if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}

$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $filename;
print "$url\n";

?>