<?php


if(isset($_GET['url']))
{
	$title = $_GET['url'];

	

	if($_GET['url'] == 'index' OR !file_exists('pages/'.$_GET['url'].'.php'))
	{
		$title = 'Page not found';
	}
}else{
	$title = 'Home page';
}

require_once('pages/layout/header.php');
require_once('bootstrap.php');
require_once('pages/layout/footer.php');




  ?>