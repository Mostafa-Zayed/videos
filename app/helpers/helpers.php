<?php 

function isActive($routeName){
    return null !== request()->segment(2) && request()->segment(2) === $routeName ? 'active' : '';
}

function reg_active($routeName)
{
	$part = request()->segment(1);

	if(isset($part) && $part === $routeName){

		return 'active';
	}else{
		return null;
	}
}

if(!function_exists('createBreadCrumb'))
{
	function createBreadCrumb()
	{
		$route =  request()->segments();
		if(isset($route) && !empty($route)){
			array_unshift($route,'home');
			return $route;
		}else{
			return null;
		}

	}
}

function test(){

	return 'active" aria-current="page"';
}

if(!function_exists('getVideoId')){
	function getVideoId($url)
	{
		preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
		return isset($match[1]) ? $match[1] : null ;
	}
}


