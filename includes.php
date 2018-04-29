<?php
$ranks = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "jack", "queen", "king", "ace");

$suites = array(
	"clubs" => array(
		'icon' => "♣",
		'ranks' => $ranks,
	),
	"spades" => array(
		'icon' => "♠",
		'ranks' => $ranks,
	),
	"hearts" => array(
		'icon' => "♥",
		'ranks' => $ranks,
	),
	"diamonds" => array(
		'icon' => "♦",
		'ranks' => $ranks,
	),
	"jokers" => array(
		'icon' => "J",
		'ranks' => array('red', 'black'),
	),
);