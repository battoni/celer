<?php 
	define('page','index');
	$page = constant('page');

	require_once "./partials/other/init/start.php";
		require_once "./partials/pages/$page/_$page.php";			
	require_once "./partials/other/init/end.php";
