<?php 
	define('DD', __DIR__ . "/..");
	require DD . "/infra/functions.php";
	if(isset($_GET['page']) && !empty($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else
	{
		$page = 'home';
	}
	_view_resolver($page, null);
 ?>

