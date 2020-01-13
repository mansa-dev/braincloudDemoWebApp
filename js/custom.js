$(document).ready(function(){
	 $('button').click(function(){
	 if(this.id == 'btn1'){
	   $('#list_view').show();
	   $('#grid_view').hide();
	 }else{
	   $('#list_view').hide();
	   $('#grid_view').show();
	 }
	});


	$('.list_btn').click(function(){
		 $(this).addClass('active');
		 $('.grid_btn').removeClass('active');
		 $('#list_view').show();
		 $('#grid_view').hide();
	});

	$('.grid_btn').click(function(){
		 $(this).addClass('active');
		 $('.list_btn').removeClass('active');
		 $('#list_view').hide();
		 $('#grid_view').show();
	});
});