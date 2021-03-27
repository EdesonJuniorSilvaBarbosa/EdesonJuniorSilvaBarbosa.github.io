// JavaScript Document

$(document).ready(function(){
	
	$(".nav li").hover(function(){
		
		
		$("ul", this).fadeIn("fast");
		
		
		},function(){
			
			
			$("ul", this).fadeOut("fast");
			
			
			});
	
	});
	