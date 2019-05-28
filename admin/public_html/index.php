<?php
	session_start();
	require '../includes/init.php';
	if(isset($_GET['thispage'])){
		if (isset($_SESSION['sessAdmin']) || isset($_SESSION['sessSuperAdmin'])) {
			require '../pages/' . $_GET['thispage'] . '.php';
		}else{
		require '../pages/login.php';
		}
	}else{
		require '../pages/login.php';
	}
	$tempArray = [
		'titleName' => $titleName,
		'contents' => $contents
	];
	$load_html = funcTemplate('../templates/layout_templates.php', $tempArray);
	echo $load_html;
?>	