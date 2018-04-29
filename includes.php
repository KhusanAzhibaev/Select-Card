<?php
$ranks = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "jack", "queen", "king", "ace");

$suites = array(
	"club" => array(
		'icon' => "♣",
		'ranks' => $ranks,
	),
	"spade" => array(
		'icon' => "♠",
		'ranks' => $ranks,
	),
	"heart" => array(
		'icon' => "♥",
		'ranks' => $ranks,
	),
	"diamond" => array(
		'icon' => "♦",
		'ranks' => $ranks,
	),
	"joker" => array(
		'icon' => "J",
		'ranks' => array('red', 'black'),
	),
);