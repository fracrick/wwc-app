<?php 
echo "Test script starting";

$paragraph = "one two three four one";
$keyword = "one";
$expected = 2;


$paragraphArray = str_word_count($paragraph,1);

$result = 0;

    foreach ($paragraphArray as $key) {
    if ($key == $keyword) {
    $result++;
    }
    }

if ($result == $expected) {
echo "Test Passed";
exit(0):
}

else {
echo "Test Failed";
exit(1);
}
