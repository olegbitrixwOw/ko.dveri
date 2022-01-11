



//попап заказать звонок и 
$(document).ready(function() {
	$(".feedback_btn").click(function() {
	
		$("#modal_feedback").modal('show');
	  });
});

//вызов мастера
$(document).ready(function() {
	$(".call_master_btn").click(function() {
			//alert("123");
			//где myModal - id модального окна
			$("#modal_call_master").modal('show');
		  }); 
  $(".zakaz_product_btn").click(function() {
	//alert("123");
	//где myModal - id модального окна
	var product = $(this).attr('p_product');
	//alert(product);
	$("#msg_product").text(product);
	$("#modal_feedback").modal('show');
  }); 
});	

//добавить отзыв
$(document).ready(function() {
	$(".add_review_btn").click(function() {
			//alert("123");
			//где myModal - id модального окна
			$("#modal_add_review").modal('show');
		  }); 
});  

//фиксированное меню
/*$(document).ready(function(){

        var $menu = $("#menu");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed");
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("default");
            }
        });
		
		//scroll
    });  */
	
	$("#toTop").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
//попап окно закрываем по клику по фону	
$(document).ready(function() {	  
	$("#modal_feedback").click( function(event){
      if( $(event.target).closest(".modal-dialog").length ) 
        return;
	 // alert("123");
	  $(".close").click();
      event.stopPropagation();
    });
	$("#modal_call_master").click( function(event){
      if( $(event.target).closest(".modal-dialog").length ) 
        return;
	 // alert("123");
	  $(".close").click();
      event.stopPropagation();
    });
	$("#modal_add_review").click( function(event){
      if( $(event.target).closest(".modal-dialog").length ) 
        return;
	 // alert("123");
	  $(".close").click();
      event.stopPropagation();
    });
	
	
	
}); 	



  