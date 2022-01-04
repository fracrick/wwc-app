<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
require('functions.inc.php');

$output = array(
	"error" => false,
	"string" => "",
	"answer" => 0
);

$paragraph = strtolower($_REQUEST['paragraph']);
$word = strtolower($_REQUEST['word']);

$answer=check($paragraph,$word);

$output['string']=$paragraph."+".$word."=".$answer;
$output['answer']=$answer;

echo json_encode($output);
exit();

