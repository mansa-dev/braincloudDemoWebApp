
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

    $("a.switcher").bind("click", function(e){
		e.preventDefault();
		
		var theid = $(this).attr("id");
		var theproducts = $("ul#products");
		var classNames = $(this).attr('class').split(' ');
		
		var gridthumb = "images/products/grid-default-thumb.png";
		var listthumb = "images/products/list-default-thumb.png";
		
		if($(this).hasClass("active")) {
			// if currently clicked button has the active class
			// then we do nothing!
			return false;
		} else {
			// otherwise we are clicking on the inactive button
			// and in the process of switching views!

  			if(theid == "gridview") {
				$(this).addClass("active");
				$("#listview").removeClass("active");
			
				$("#listview").children("img").attr("src","images/list-view.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/grid-view-active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("list");
				theproducts.addClass("grid");
			
				// update all thumbnails to larger size
				$("img.thumb").attr("src",gridthumb);
			}
			
			else if(theid == "listview") {
				$(this).addClass("active");
				$("#gridview").removeClass("active");
					
				$("#gridview").children("img").attr("src","images/grid-view.png");
					
				var theimg = $(this).children("img");
				theimg.attr("src","images/list-view-active.png");
					
				// remove the grid view and change to list
				theproducts.removeClass("grid")
				theproducts.addClass("list");
				// update all thumbnails to smaller size
				$("img.thumb").attr("src",listthumb);
			} 
		}

	});

	$(document).on('click','.show_more',function(){
		
        var id = $(this).attr('id');
        var content = $('meta[name="csrf_token"]').attr('content');


        $('.show_more').hide();
        $.ajax({
            type:'POST',
            url: base_url+'loadContactData',
            data:'id='+id,

            success:function(html){
            	alert(html);
                $('#show_more_main'+ID).remove();
                $('.postList').append(html);
            }
        });
    });

});