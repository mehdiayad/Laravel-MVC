$(document).ready(function(){
  
	$(".product_img1").click(function(){
	  
		//alert( "alert 1" );
		//alert($('.product_img1').attr('src'));
		//alert($('.product_img_display').attr('src'));
	 	$('#product_img_display').attr('src',$('.product_img1').attr('src'));
	});
	
	$(".product_img2").click(function(){
		  
		//alert( "alert 2" );
		//alert($('.product_img2').attr('src'));
		//alert($('.product_img_display').attr('src'));
	 	$('#product_img_display').attr('src',$('.product_img2').attr('src'));
	});
	
	$(".product_img3").click(function(){
		  
		//alert( "alert 3" );
		//alert($('.product_img3').attr('src'));
		//alert($('.product_img_display').attr('src'));
	 	$('#product_img_display').attr('src',$('.product_img3').attr('src'));
	});
	
});
