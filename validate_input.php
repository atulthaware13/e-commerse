<?php
function format_str($pstr)

{
	$rstr = trim(strip_tags(addslashes($pstr)));
	return $rstr;
}

?>