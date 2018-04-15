<?php

//include 'form.html';

global $input_text;
global $output_text;

if(isset($_POST['input_text']) && isset($_POST['find_text']) && isset($_POST['replace_text']))
{
	if(!empty($_POST['input_text']) && !empty($_POST['find_text']) && !empty($_POST['replace_text']))
	{
		$input_text = $_POST['input_text'];
		$input_text_lc = strtolower($input_text);
		$find_text = $_POST['find_text'];
		$find_text_lc = strtolower($find_text);
		$replace_text = $_POST['replace_text'];
		$output_text = str_replace($find_text_lc, $replace_text, $input_text_lc);
	}
	else
	{
		echo 'Please enter all the fields.' . '<br/>';
	}
	echo 'original text: ' . $input_text . '<br/>';
	echo 'formatted text: ' . $output_text . '<br/>';
}

?>
