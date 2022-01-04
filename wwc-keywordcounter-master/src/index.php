<?php 
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

$paragraph = strtolower($_REQUEST['paragraph']);
$word = strtolower($_REQUEST['word']);

//hold word count
$wordCountArray = str_word_count($paragraph, 1);

//count key words
$keywords = 0;

foreach ($wordCountArray as $key) {
	if ($key == $word) {
	$keywords++;
	}	
	}


echo json_encode($keywords);
exit();
