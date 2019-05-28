<?php
	session_start();
	require '../includes/init.php';
	if(isset($_GET['thispage'])){
		require '../pages/' . $_GET['thispage'] . '.php';
	}
	else{
		require '../pages/home.php';
	}

	$tempArray = [
		'titleName' => $titleName,
		'contents' => $contents,
		'class_name' => $class_name
	];
	$load_html = funcTemplate('../templates/layout_templates.php', $tempArray);
	echo $load_html;
?>	

