<?php

function isActive($routeName){
    return null !== request()->segment(3) && request()->segment(3) === $routeName ? 'active' : '';
}


if(!function_exists('getVideoId')){
	function getVideoId($url)
	{
		preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
		return isset($match[1]) ? $match[1] : null ;
	}
}


