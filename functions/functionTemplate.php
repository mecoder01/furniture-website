<?php
function funcTemplate($filename, $tempVars){
	extract($tempVars);
	ob_start();
	require $filename;
	$dataContent = ob_get_clean();
	return $dataContent;
}
