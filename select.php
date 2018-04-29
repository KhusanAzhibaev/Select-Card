<?php
require('includes.php');

if($_POST['test_loading']=="true"){
	sleep(2);
}
if($_POST['test_failure']=="true"){
	header("HTTP/1.0 404 Not Found");
 	exit();
}

function random_card_from_suite($suite) {
	global $suites;

	$ranks = $suites[$suite]['ranks'];

	$rank = $ranks[array_rand($ranks)];

	return $suite . "." . $rank;
}

echo random_card_from_suite($_POST['suite']);