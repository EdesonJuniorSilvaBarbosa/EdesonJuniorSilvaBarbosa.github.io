// JavaScript Document

$(document).ready(function(){
	
	$(".nav li").hover(function(){
		
		
		$("ul", this).fadeIn("slow");
		
		
		},function(){
			
			
			$("ul", this).fadeOut("slow");
			
			
			});
	
	});