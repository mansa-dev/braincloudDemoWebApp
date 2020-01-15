
var base_url = window.location.href;


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
    
    $(".filter_ul li span").click(function(){
      $( this ).toggleClass('bg_white');
      $(this).next('.li_dropdown').toggle();
    });

    
    //Ajax to load the data on 
	$(document).on('click','.show_more',function(){
		
        var id = $(this).attr('id');
   

        $.ajax({
            type:'POST',
            url: base_url+'loadContactData',
            data:'id='+id,

            success:function(html){
            	console.log(html); 
                $('#show_more_main'+id).remove();
                $('#list_view_table').append(html);
            }
        });
    });
    
    
});