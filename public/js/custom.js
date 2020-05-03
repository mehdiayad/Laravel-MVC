$(document).ready(function(){
	  
	$(".product_img_show_1").click(function(){
	  
		//alert( "alert 1" );
		//alert($('.product_img_show_1').attr('src'));
		//alert($('.product_img_show_display').attr('src'));
	 	$('#product_img_show_display').attr('src',$('.product_img_show_1').attr('src'));
	});
	
	$(".product_img_show_2").click(function(){
		  
		//alert( "alert 2" );
		//alert($('.product_img_show_2').attr('src'));
		//alert($('.product_img_show_display').attr('src'));
	 	$('#product_img_show_display').attr('src',$('.product_img_show_2').attr('src'));
	});
	
	$(".product_img_show_3").click(function(){
		  
		//alert( "alert 3" );
		//alert($('.product_img_show_3').attr('src'));
		//alert($('.product_img_show_display').attr('src'));
	 	$('#product_img_show_display').attr('src',$('.product_img_show_3').attr('src'));
	});
	
});