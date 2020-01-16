
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
            dataType : 'html',
            data:'id='+id,
            success:function(html){
            	 $(".show_more").attr("id",parseInt(id)+parseInt(10));
                $('#list_view_table tbody').append(html);
            }
        });
    });

    //Load more data on Name filters 
	$(document).on('click','.show_more_filter',function(){
		
        var id = $(this).attr('id');
       
        $.ajax({
            type:'POST',
            url: base_url+'loadNameFilterData',
            dataType : 'html',
            data:'id='+id,
            success:function(html){
            	 $(".show_more_filter").attr("id",parseInt(id)+parseInt(10));
                $('#list_view_table tbody').append(html);
            }
        });
    });

    //to keep all the values checked or unchecked on button clicked
    $(document).on('click','#gridCustomCheck',function(){
    

    }); 

    //Zoom functionality on the slider
    $(document).on('click','#myrange',function(){
		
        var rangeValue = $(this).val();

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

    //Ajax functionality for Name filters
    $(document).on('click','#name_filters',function(){
    
        var nameFilterValue = $('input[name="name_filter_radio"]:checked').val();
        var searchData_ = $("#name_filter_search").val();

            if(!nameFilterValue){
            	nameFilterValue = '';
            }

            if(!searchData_){
            	searchData_ = '';
            }

        	$(".load_more_button").removeClass("show_more");        
            $(".load_more_button").addClass("show_more_filter");

            $.ajax({
            type:'POST',
            url: base_url+'loadNameFilterData',
            data:{ id: nameFilterValue, offsetValue: 0, search: searchData_},
            dataType : 'html',
            success:function(html){
            	alert(html);
            	$('#list_view_table_body').empty();
                $('#list_view_table_body').append(html);
            }
        });
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