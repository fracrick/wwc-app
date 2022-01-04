<?php 

echo "Test Script Starting\n";


$sentence = "One two three four";

$expected = 4;
$count = str_word_count($sentence, 0);
echo "Test result: ".$sentence." = ".$count." (expected: ".$expected.")";

if($count==$expected) {
	echo "Test passed";
	exit(0);

}
else
{
	echo "Test failed";
	exit(1);
}
