$(document).ready(function(){
$("#inpt_search").on('focus', function () {
	$(this).parent('label').addClass('active');
});

$("#inpt_search").on('blur', function () {
	if($(this).val().length == 0)
		$(this).parent('label').removeClass('active');
});

$(window).scroll(function(){

	var scroll = $(window).scrollTop();
  
	if (scroll > 50 ) {
	  $('.navbar-brand').addClass('scrolled');
	}
  
	if (scroll <= 0 ) {
	  $('.navbar-brand').removeClass('scrolled');
   }
  
  });


});
