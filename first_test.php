<?php

function long_word($string)
{
	$words = explode(' ', $string);
	
	$longest_word = '';
	
	foreach($words as $word)
	{
		if(strlen($word) > $longest_word)
		{
			$longest_word = $word;
		}
	}
	
	return $longest_word;
}


echo longest_word('This is the test string that we are going to use');

?>