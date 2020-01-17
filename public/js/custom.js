
var base_url = window.location.href;


$(document).ready(function(){
	
	// getElementById('grid_view_show_more').removeAttribute("style")

	 $('button').click(function(){
	 if(this.id == 'btn1'){
	 	alert(this.id);
	   $('#list_view').show();
	   $('#grid_view').hide();
	  // $(".grid_view_show_more").show();
	 }else{
	   $('#list_view').hide();
	   $('#grid_view').show();
	  // $(".grid_view_show_more").hide();
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
            type:'GET',
            url: base_url+'loadContactData',
            dataType : 'html',
            data:'id='+id,
            success:function(html){
            	 $(".show_more").attr("id",parseInt(id)+parseInt(10));
                $('#list_view_table tbody').append(html);
            }
        });
    });


    //show more grid data
    $(document).on('click','.show_more_grid',function(){
		
        var id = $(this).attr('id'),
       zoomLevel = $("#myrange").val();
       
        $.ajax({
            type:'GET',
            url: base_url+'loadGrid',
            dataType : 'html',
            data:{id:id,zoomLevel:zoomLevel},
            success:function(html){
            	// console.log(html);
            	$(".show_more_grid").attr("id",parseInt(id)+parseInt(10));
                $('#grid_view .for_embed').append(html);
            }
        });
    });
    
    //Load more data on Name filters 
	$(document).on('click','.show_more_filter',function(){
		
        var id = $('input[name="name_filter_radio"]:checked').val(); 
        var offsetValue = $(this).attr('id');
        var searchData_ = $("#name_filter_search").val();
         var zoomLevel = $("#myrange").val();
     
        $.ajax({
	        type:'GET',
	        url: base_url+'loadNameFilterData',
	        data:{ id: id, offsetValue: offsetValue, search: searchData_, zoomLevel: zoomLevel},
	        dataType : 'html',
	        success:function(html){
	      
            	$(".show_more_filter").attr("id",parseInt(offsetValue)+parseInt(10));
                $('#list_view_table tbody').append(html);

			    $.ajax({
			        type:'GET',
			        url: base_url+'loadNameFilter',
			        dataType : 'html',
			        data:{id:id, offsetValue: offsetValue, search: searchData_, zoomLevel: zoomLevel},
			        success:function(html){
			          // console.log(html);
			          $(".show_more_grid").attr("id",parseInt(id)+parseInt(10));
			          $('#grid_view .for_embed').append(html);
			        }
			    });
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


   //to keep all the values checked or unchecked on button clicked
 $('.selectall').click(function() {
    if ($(this).is(':checked')) {
    $('.grid_view .sm_ch').attr('checked', true);
    $('.list_view .sm_ch').attr('checked', true);
    $('.list_view .table_grid_ch').attr('checked', true);
   
    } else {
    $('.grid_view .sm_ch').attr('checked', false);
    $('.list_view .sm_ch').attr('checked', false);
    $('.list_view .table_grid_ch').attr('checked', false);
    }
 });
   
    //Ajax functionality for Name filters
    $(document).on('click','.filters_apply',function(){
    
        var nameFilterValue = $('input[name="name_filter_radio"]:checked').val();
        var searchData_ = $("#name_filter_search").val();
        var zoomLevel = $("#myrange").val();


        var functionFilterValue = $('input[name="function_"]:checked').val();
        var functionsearchData_ = $("#function_filter_search").val();
        // var zoomLevel = $("#myrange").val();
       

	    var gridSelectedData = [];
        $('.filter_check_box:checked').each(function(i){
        	  gridSelectedData[i] = $(this).val();
        });
		


        if(nameFilterValue){
            nameFilterValue = nameFilterValue;
            
            if(nameFilterValue == '1'){
                $("#asc").attr( 'checked', true );
       
	        }
	         if(nameFilterValue == '2'){
	                $("#desc").attr( 'checked', true );
	        }
        }

        if(functionFilterValue){
             nameFilterValue = functionFilterValue;
        }


   
		var selectedData = [];
			$('.same_slected_list').each(function () {
			    selectedData.push(this.id);
			});
			
			if(!selectedData){
				selectedData = '';
			}

            if(!nameFilterValue){
            	nameFilterValue = '';
            }

            if(!searchData_){
            	searchData_ = '';
            }


            $(".load_more_button_grid").removeClass("show_more_grid");        
            $(".load_more_button_grid").addClass("show_more_filter");
           

            $.ajax({
            type:'GET',
            url: base_url+'loadNameFilter',
            data:{ id: nameFilterValue, offsetValue: 0, search: searchData_,selectedData:selectedData,functionsearchData:functionsearchData_,gridSelectedData:gridSelectedData},
            dataType : 'html',
            success:function(html){

             $(".load_more_button").removeClass("show_more");        
             $(".load_more_button").addClass("show_more_filter");
  
            	$('#append_grid_view').empty();
                $('#append_grid_view').append(html);
	            $.ajax({
			        type:'GET',
			        url: base_url+'loadNameFilterData',
			        data:{ id: nameFilterValue, offsetValue: 0, search: searchData_, zoomLevel: zoomLevel,selectedData:selectedData,functionsearchData:functionsearchData_,selectData:gridSelectedData},
			        dataType : 'html',
			        success:function(html){
			        
			        	$('#list_view_table_body').empty();
			            $('#list_view_table_body').append(html);

			        }
			    });
            	}
        	});
    });



       // For selected tags in filter
   $(".li_btns li").click(function(e) {
		var slectedtagclass= $(this).attr('class').split(' ').pop();
		var compareselectedtag = $('.select_unselect_btns').find(slectedtagclass);
	
		var sel = $(this).text();

		$(".select_unselect_btns").append("<div class='same_slected_list " + slectedtagclass + " ' id=" + slectedtagclass +">"+ sel +"<i class='fa fa-times-circle ml-1'></i></div>");
   
   });

    // Remove tag filter with cross icon
     $(document).on("click",".select_unselect_btns .same_slected_list i",function() {
   		 $(this).parent().remove();
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