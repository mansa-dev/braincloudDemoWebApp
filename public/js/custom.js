
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
                $('#list_view_table').append(html);
            }
        });
    });

    //to keep all the values checked or unchecked on button clicked
    $(document).on('click','#gridCustomCheck',function(){
    

    }); 

    //Zoom functionality on the slider
    $(document).on('click','#myrange',function(){
		
        var rangeValue = $(this).val();
        // $(".user_pf_area").addClass("l_zomm");
        // $(".user_pf_area").removeClass("xs_zomm");
		//Switch statement to add the the classes on zoom in and out.
		switch (rangeValue) {
		  case '1':
		  	removeZoomClasses();
		    $(".user_pf_area").addClass('xs_zomm');
		    break;
		  case '2':
		    removeZoomClasses();
		    $(".user_pf_area").addClass('s_zomm');
		    break;
		  case '3':
		    removeZoomClasses();
		    $(".user_pf_area").addClass('m_zomm');
		    break;
		  case '4':
		    removeZoomClasses();
		    $(".user_pf_area").addClass('l_zomm');
		    break;
		  case '5':
		    removeZoomClasses();
		    $(".user_pf_area").addClass('xl_zomm');
		    break;
		}
    });
    
    
});

//Centeralised function in javscript to check the classes exist and remove 
function removeZoomClasses(){

    
	if($(".xs_zomm").length > 0){
       $(".user_pf_area").removeClass("xs_zomm");
	}

	if($(".m_zomm").length > 0){
       $(".user_pf_area").removeClass("m_zomm");
	}
	
	if($(".s_zomm").length > 0){
       $(".user_pf_area").removeClass("s_zomm");
	}
	
	if($(".l_zomm").length > 0){
       $(".l_zomm").removeClass("l_zomm");
	}
	
	if($(".xl_zomm").length > 0){
       $(".user_pf_area").removeClass("xl_zomm");
	}
   
   return true;
}