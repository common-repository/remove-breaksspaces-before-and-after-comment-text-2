<?php
/*
Plugin Name: Remove Breaks/Spaces Before And After Comment Text
Author URI: http://atilus.com/
Author: Atilus, LLC
Version: 1.0
*/ 

function rba($comment) {
	$comment = nl2br($comment);
	$comment = trim(preg_replace('/^(<br>|<br\/>|<br \/>|&nbsp;|<p>|<\/p>|<\/ p>)+/m', '', $comment));
	$comment = strrev($comment); // Here begin's the fun part.
	$comment = trim(preg_replace('/^(<br>|>\/rb<|>\/ rb<|;psbn&|>p<|>p\/<|>p \/<)+/m', '', $comment));
	$comment = strrev($comment); // Back to normal now...
	return $comment;
}

add_filter('pre_comment_content', 'rba');

?>
