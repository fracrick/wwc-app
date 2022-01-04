<?php
function check($paragraph, $word)
{
    if (strpos($paragraph, $word) !== false)
        return 1;
    elseif (str_word_count($word,0) > 1)
        return 2;
	else 
	return 0;	
}

