<?php

// Sanitise
	
function cleanInput($input) {
	$search = array(
		'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
		'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
		'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
		'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
	);
	$output = preg_replace($search, '', $input);
	return $output;
}

function sanitise($input) {
	if (is_array($input)) {
		foreach($input as $var=>$val) {
			$output[$var] = sanitise($val);
		}
	} else {
		$input  = cleanInput($input);
		$output = htmlentities($input, ENT_QUOTES, 'UTF-8');
	}
	return $output;
}