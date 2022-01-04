<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

$sentence = $_REQUEST['sentence'];

// count words
$count = str_word_count($sentence, 0);

echo json_encode($output);
exit();

