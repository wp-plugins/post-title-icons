<?php

 	
 		//insert custom icon url for all posts
 				
	function ggs_icon_url($title){
		global $ggs_options;
	 	$title = ' <img src=" ' . $ggs_options['icon_url'] . ' "> ' . $title ;
	 	return $title; 	
	 	}
 	
 	add_filter('the_title', 'ggs_icon_url');
 	
 		
 		
 		//insert custom icon url for category specific posts url_1 & icon_1		
 	function ggs_icon_url_1($title){
		global $ggs_options;
		if ( in_category($ggs_options['icon_1'])){
	 	$title = ' <img src=" ' . $ggs_options['url_1'] . ' "> ' . $title ;
	 	}
	 	return $title; 	
	 	}
 	
 	add_filter('the_title', 'ggs_icon_url_1');
 	
 	 		//insert custom icon url for category specific posts url_2 & icon_2		
 	function ggs_icon_url_2($title){
		global $ggs_options;
		if ( in_category($ggs_options['icon_2'])){
	 	$title = ' <img src=" ' . $ggs_options['url_2'] . ' "> ' . $title ;
	 	}
	 	return $title; 	
	 	}
 	
 	add_filter('the_title', 'ggs_icon_url_2');
 	
 	
 	 		//insert custom icon url for category specific posts url_3 & icon_3		
 	function ggs_icon_url_3($title){
		global $ggs_options;
		if ( in_category($ggs_options['icon_3'])){
	 	$title = ' <img src=" ' . $ggs_options['url_3'] . ' "> ' . $title ;
	 	}
	 	return $title; 	
	 	}
 	
 	add_filter('the_title', 'ggs_icon_url_3');
 	
 	
 	 		//insert custom icon url for category specific posts url_4 & icon_4		
 	function ggs_icon_url_4($title){
		global $ggs_options;
		if ( in_category($ggs_options['icon_4'])){
	 	$title = ' <img src=" ' . $ggs_options['url_4'] . ' "> ' . $title ;
	 	}
	 	return $title; 	
	 	}
 	
 	add_filter('the_title', 'ggs_icon_url_4');
 	
 	 		//insert custom icon url for category specific posts url_5 & icon_5		
 	function ggs_icon_url_5($title){
		global $ggs_options;
		if ( in_category($ggs_options['icon_5'])){
	 	$title = ' <img src=" ' . $ggs_options['url_5'] . ' "> ' . $title ;
	 	}
	 	return $title; 	
	 	}
 	
 	add_filter('the_title', 'ggs_icon_url_5');
 	

 	
 	?>
