<?php 


if(isset($_GET['url']))
{   
	$url = $_GET['url'];
	$url = filter_var($url,FILTER_SANITIZE_URL);
	$url = rtrim($url,'/');
	$url = explode('/',$url);


	



	$pagePath = 'pages/'.$url[0].'.php';

	if(file_exists($pagePath) AND $url[0] !='index')
	{   
		
		require_once($pagePath);
		
		
	}else{
        
        // if page is not found set the responce code to 404 and require
        // in the page not found page
        http_response_code(404);
		require_once('404.php');
	
	}

	
}else{
    // if no url is set then make index the home page
    
    $indexPath = "pages/index.php";
    if(file_exists($indexPath)):
	require_once($indexPath);
    endif;
	
}   


