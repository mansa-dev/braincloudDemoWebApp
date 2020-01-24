$(document).ready(function () {
	App_.init();
});


var base_url = window.location.href + 'index.php/';

var App_ = App_ || {


	init: function () {
		// alert(this.nameFilterValue);
		Filters.FunctionFilter();
		// Filters.FunctionFilterShowMore();
	}
};

var Filters = {

	init: function () {

	},
	FunctionFilter: function () {
		var this_ = this;

		//Ajax functionality for Name filters
		$(document).on('click', '.filters_apply', function () {

			//variables for the filters

			var nameFilterValue = $('input[name="name_filter_radio"]:checked').val(),
				searchData_ = $("#name_filter_search").val(),
				zoomLevel = $("#myrange").val(),
				functionFilterValue = $('input[name="function_"]:checked').val(),
				functionsearchData_ = $("#function_filter_search").val(),
				lastNameOrderFilter = $('input[name="asc_name_filter"]:checked').val(),
				lastNameSearchFilter = $('#last_name_filter_search').val(),
				clickedId = $(".li_dropdown").attr('id'),
				tagOrderFilter = $('input[name="name_filter_order"]:checked').val(),
				tag_filter_search = $('#tag_filter_search').val(),
				groupNameSearch = $("#group_name_filter_search").val(),
				networkOrder = $('#network_search').val(),
				gender = $('input[name="gender"]:checked').val(),
				ageOrderFilter = $('input[name="age_filter_radio"]:checked').val(),
				minAgeValue = $("#age_filter_search__").val(),
				maxAgeValue = $("#age_filter_search_").val(),
				designation = [],

				todoSearch = $('input[name="todo_list_1"]:checked').val(),
				businessLine = [],
				companyTileDetails = [],
				selectedData = [];

			$(".custom_site_loader").show();

			$('.filter_check_box:checkbox:checked').each(function () {
				designation.push(this.id);
			});


			$('.same_slected_list').each(function () {
				selectedData.push(this.id);
			});

			// alert(functionFilterValue);

			$('.business_tile_details:checkbox:checked').each(function () {
				businessLine.push(this.id);
			});

			if (!minAgeValue && maxAgeValue) {
				minAgeValue = 0;
			}

			if (!maxAgeValue && minAgeValue) {
				maxAgeValue = 10000;
			}

			$('.company_tile_details:checkbox:checked').each(function () {
				companyTileDetails.push(this.id);
			});


			$('.list_btn').removeClass('active');
			$('.grid_btn').addClass('active');
			// $('#myrange').val('1');

			gridSelectedData = [];

			this__ = $(this);

			$('#' + clickedId).hide();


			if (lastNameSearchFilter) {
				$(".select_unselect_last_name").append("<div class='same_slected_list " + lastNameSearchFilter + " ' id=" + lastNameSearchFilter + ">" + lastNameSearchFilter + "<i class='fa fa-times-circle ml-1'></i></div>");
			}
			if (!tag_filter_search) {
				tag_filter_search = '';
			}

			if (!selectedData) {
				selectedData = '';
			}
			if (!nameFilterValue) {
				nameFilterValue = '';
			}
			if (!searchData_) {
				searchData_ = '';
			} else {
				$(".select_unselect_btns").append("<div class='same_slected_list " + searchData_ + " ' id=" + searchData_ + ">" + searchData_ + "<i class='fa fa-times-circle ml-1'></i></div>");
			}
			$(".load_more_button_grid").removeClass("show_more_grid");
			$(".load_more_button_grid").addClass("show_more_filter");

			$(".load_more_button").removeClass("show_more");
			$(".load_more_button").addClass("show_more_filter");

			$(this).parents(".li_dropdown").hide();
			$(this).parents('li').find('span').removeClass('bg_white');

			var id = 'append_grid_view',
				requestUrl = 'loadNameFilter',
				view = 'load_contact';
			this_.CommonFilterAjax(nameFilterValue, searchData_, zoomLevel, selectedData, functionsearchData_, gridSelectedData, id, requestUrl, lastNameSearchFilter, lastNameOrderFilter, tagOrderFilter, view, tag_filter_search, groupNameSearch, companyTileDetails, businessLine, networkOrder, gender, todoSearch, ageOrderFilter, minAgeValue, maxAgeValue, functionFilterValue, designation);

			var id = 'list_view_table_body',
				requestUrl = 'loadNameFilterData',
				view = 'load_contact_grid';
			this_.CommonFilterAjax(nameFilterValue, searchData_, zoomLevel, selectedData, functionsearchData_, gridSelectedData, id, requestUrl, lastNameSearchFilter, lastNameOrderFilter, tagOrderFilter, view, tag_filter_search, groupNameSearch, companyTileDetails, businessLine, networkOrder, gender, todoSearch, ageOrderFilter, minAgeValue, maxAgeValue, functionFilterValue, designation);

		});

	},


	CommonFilterAjax: function (nameFilterValue, searchData_, zoomLevel, selectedData, functionsearchData_, gridSelectedData, id, requestUrl, lastSearch, lastNameOrderFilter, tagOrderFilter, view, tag_filter_search, groupNameSearch, companyTileDetails, businessLine, networkOrder, gender, todoSearch, ageOrderFilter, minAgeValue, maxAgeValue, functionFilterValue, designation) {
		$.ajax({
			type: 'GET',
			url: base_url + requestUrl,
			data: {
				id: nameFilterValue,
				offsetValue: 0,
				search: searchData_,
				zoomLevel: zoomLevel,
				selectedData: selectedData,
				functionsearchData: functionsearchData_,
				selectData: gridSelectedData,
				lastSearch: lastSearch,
				lastNameOrderFilter: lastNameOrderFilter,
				tagOrderFilter: tagOrderFilter,
				view: view,
				groupNameSearch: groupNameSearch,
				tagFilterSearch: tag_filter_search,
				companyTileDetails: companyTileDetails,
				businessLine: businessLine,
				networkOrder: networkOrder,
				gender: gender,
				todoSearch: todoSearch,
				ageOrderFilter: ageOrderFilter,
				minAgeValue: minAgeValue,
				maxAgeValue: maxAgeValue,
				functionFilterValue: functionFilterValue,
				designation: designation
			},
			dataType: 'html',
			success: function (html) {
				$(".custom_site_loader").hide();
				$('#' + id).empty();
				$('#' + id).append(html);
			}
		});
	}

}


$(document).ready(function () {

	//function to change the age range filter data
	$("#age_filter_search__").keyup(function () {
		var minRange = $(this).val();
		$("#value_age_min").text(minRange);
	});

	//function to change the age range filter data
	$("#age_filter_search_").keyup(function () {
		var maxRange = $(this).val();
		$("#value_age_max").text(maxRange);
	});

	//function to change the age range filter data
	$("#slider-distance").click(function () {

		var minRange = $("input[name='min_price']").val();
		var maxRange = $("input[name='max_price']").val();
		// alert(minRange);
		// alert(minRange); 
		$("#age_filter_search__").val(minRange);
		$("#age_filter_search_").val(maxRange);

	});


	//function to change the age range filter data
	// $("#age_range_max").click(function () {
	// 	var minRange = $("#value_age_max").text();
	// 	$("#age_filter_search_").val(minRange);
	// });

	// getElementById('grid_view_show_more').removeAttribute("style")

	$('button').click(function () {
		if (this.id == 'btn1') {
			alert(this.id);
			$('#list_view').show();
			$('#grid_view').hide();
			// $(".grid_view_show_more").show();
		} else {
			$('#list_view').hide();
			$('#grid_view').show();
			// $(".grid_view_show_more").hide();
		}
	});

	//to put the active class on list and grid.
	$('.list_btn').click(function () {
		$(this).addClass('active');
		$('.grid_btn').removeClass('active');
		$('#list_view').show();
		$('#grid_view').hide();
	});

	$('.grid_btn').click(function () {
		$(this).addClass('active');
		$('.list_btn').removeClass('active');
		$('#list_view').hide();
		$('#grid_view').show();
	});

	$(".white").click(function () {
		$(this).toggleClass('bg_white');
		$(this).next('.li_dropdown').toggle();
	});


	//Ajax to load the data on 
	$(document).on('click', '.show_more', function () {

		var id = $(this).attr('id');
		$(".custom_site_loader").show();
		$("#myrange").empty();

		$.ajax({
			type: 'GET',
			url: base_url + 'loadContactData',
			dataType: 'html',
			data: 'id=' + id,
			success: function (html) {
				$(".show_more").attr("id", parseInt(id) + parseInt(10));
				$('#list_view_table tbody').append(html);
				$(".custom_site_loader").hide();
			}
		});
	});


	//show more grid data
	$(document).on('click', '.show_more_grid', function () {


		var id = $(this).attr('id'),
			zoomLevel = $("#myrange").val();


		$.ajax({
			type: 'GET',
			url: base_url + 'loadGrid',
			dataType: 'html',
			data: {
				id: id,
				zoomLevel: zoomLevel
			},
			success: function (html) {
				// console.log(html);
				$(".show_more_grid").attr("id", parseInt(id) + parseInt(10));
				$('#grid_view .for_embed').append(html);
				$(".custom_site_loader").hide();
			}
		});
	});

	//Load more data on Name filters 
	$(document).on('click', '.show_more_filter', function () {


		//variables for the filters

		var nameFilterValue = $('input[name="name_filter_radio"]:checked').val(),
			searchData_ = $("#name_filter_search").val(),
			zoomLevel = $("#myrange").val(),
			functionFilterValue = $('input[name="function_"]:checked').val(),
			functionsearchData_ = $("#function_filter_search").val(),
			lastNameOrderFilter = $('input[name="asc_name_filter"]:checked').val(),
			lastNameSearchFilter = $('#last_name_filter_search').val(),
			clickedId = $(".li_dropdown").attr('id'),
			tagOrderFilter = $('input[name="name_filter_order"]:checked').val(),
			tag_filter_search = $('#tag_filter_search').val(),
			groupNameSearch = $("#group_name_filter_search").val(),
			networkOrder = $('#network_search').val(),
			gender = $('input[name="gender"]:checked').val(),
			ageOrderFilter = $('input[name="age_filter_radio"]:checked').val(),
			minAgeValue = $("#age_filter_search__").val(),
			maxAgeValue = $("#age_filter_search_").val(),
			id = $(this).attr('id'),
			designation = [],

			todoSearch = $('input[name="todo_list_1"]:checked').val(),
			businessLine = [],
			companyTileDetails = [],
			selectedData = [];


		$('.same_slected_list').each(function () {
			selectedData.push(this.id);
		});

		$('.business_tile_details:checkbox:checked').each(function () {
			businessLine.push(this.id);
		});

		if (!minAgeValue && maxAgeValue) {
			minAgeValue = 0;
		}

		if (!maxAgeValue && minAgeValue) {
			maxAgeValue = 10000;
		}

		$(".custom_site_loader").show();

		$('.company_tile_details:checkbox:checked').each(function () {
			companyTileDetails.push(this.id);
		});


		$('.list_btn').removeClass('active');
		$('.grid_btn').addClass('active');
		// $('#myrange').val('1');

		gridSelectedData = [];

		this__ = $(this);

		$('#' + clickedId).hide();


		if (lastNameSearchFilter) {
			$(".select_unselect_last_name").append("<div class='same_slected_list " + lastNameSearchFilter + " ' id=" + lastNameSearchFilter + ">" + lastNameSearchFilter + "<i class='fa fa-times-circle ml-1'></i></div>");
		}
		if (!tag_filter_search) {
			tag_filter_search = '';
		}

		if (!selectedData) {
			selectedData = '';
		}
		if (!nameFilterValue) {
			nameFilterValue = '';
		}
		if (!searchData_) {
			searchData_ = '';
		} else {
			$(".select_unselect_btns").append("<div class='same_slected_list " + searchData_ + " ' id=" + searchData_ + ">" + searchData_ + "<i class='fa fa-times-circle ml-1'></i></div>");
		}

		// $("#myrange").empty();

		$.ajax({
			type: 'GET',
			url: base_url + 'loadNameFilterData',
			data: {
				id: nameFilterValue,
				offsetValue: id,
				search: searchData_,
				zoomLevel: zoomLevel,
				selectedData: selectedData,
				functionsearchData: functionsearchData_,
				selectData: gridSelectedData,
				lastSearch: lastNameSearchFilter,
				lastNameOrderFilter: lastNameOrderFilter,
				tagOrderFilter: tagOrderFilter,
				groupNameSearch: groupNameSearch,
				tagFilterSearch: tag_filter_search,
				companyTileDetails: companyTileDetails,
				businessLine: businessLine,
				networkOrder: networkOrder,
				gender: gender,
				todoSearch: todoSearch,
				ageOrderFilter: ageOrderFilter,
				minAgeValue: minAgeValue,
				maxAgeValue: maxAgeValue
			},
			dataType: 'html',
			success: function (html) {

				$(".show_more_filter").attr("id", parseInt(id) + parseInt(10));
				$('#list_view_table tbody').append(html);

				$.ajax({
					type: 'GET',
					url: base_url + 'loadNameFilter',
					dataType: 'html',
					data: {
						id: nameFilterValue,
						offsetValue: id,
						search: searchData_,
						zoomLevel: zoomLevel,
						selectedData: selectedData,
						functionsearchData: functionsearchData_,
						selectData: gridSelectedData,
						lastSearch: lastNameSearchFilter,
						lastNameOrderFilter: lastNameOrderFilter,
						tagOrderFilter: tagOrderFilter,
						groupNameSearch: groupNameSearch,
						tagFilterSearch: tag_filter_search,
						companyTileDetails: companyTileDetails,
						businessLine: businessLine,
						networkOrder: networkOrder,
						gender: gender,
						todoSearch: todoSearch,
						ageOrderFilter: ageOrderFilter,
						minAgeValue: minAgeValue,
						maxAgeValue: maxAgeValue
					},
					success: function (html) {
						// console.log(html);
						$(".custom_site_loader").hide();
						$(".show_more_grid").attr("id", parseInt(id) + parseInt(10));
						$('#grid_view .for_embed').append(html);
					}
				});
			}
		});
	});


	//Zoom functionality on the slider
	$(document).on('click', '#myrange', function () {

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
	$('.selectall').click(function () {
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


	/* for name dropdown clear functionlity*/
	$('#clearBtn_name').click(function () {

		$('#name_filter_search').val('');
		$('input[name="name_filter_radio"]').each(function () {
			this.checked = false;
		});
		$('.same_slected_list').empty();
		$('div').removeClass('same_slected_list');
	});

	/* for last name dropdown clear functionlity*/
	$('#clearBtn_last_name').click(function () {

		$('#last_name_filter_search').val('');
		$('input[name="asc_name_filter"]').each(function () {
			this.checked = false;
		});
		$('.select_unselect_last_name').empty();
		$('div').removeClass('select_unselect_last_name');
	});

	/* for Tag dropdown clear functionlity*/
	$('#clearBtn_tag').click(function () {

		$('#tag_filter_search').val('');
		$('input[name="name_filter_order"]').each(function () {
			this.checked = false;
		});
		$('.select_unselect_btns_tag').empty();
		$('div').removeClass('select_unselect_btns_tag');
	});

	/* for group clear functionlity*/
	$('#clearBtn_group').click(function () {

		$('#group_name_filter_search').val('');
	});


	/* for Company clear functionlity*/
	$('#clearBtn_company').click(function () {

		$('.company_tile_details').each(function () {
			this.checked = false;
		});
	});

	/* for Company clear functionlity*/
	$('#clearBtn_line').click(function () {

		$('.business_tile_details').each(function () {
			this.checked = false;
		});
	});


	/* for function dropdown clear functionlity */

	$('#clearBtn_function').click(function () {

		var designation = $('input[name="designation"]').each(function () {
			this.checked = false;
		});
		var filter = $('input[name="function_"]').each(function () {
			this.checked = false;
		});
		var search = $('#function_filter_search').val('');

	});

	/* for Network dropdown clear functionlity */

	$('#clearBtn_network').click(function () {

		var search = $('#network_search').val('');

	});

	/* for gender dropdown clear functionlity */

	$('#clearBtn_gender').click(function () {

		var filter = $('input[name="gender"]').each(function () {
			this.checked = false;
		});

	});

	/* for gender dropdown clear functionlity */

	$('#clr_btn').click(function () {

		var filter = $('input[name="todo_list_1"]').each(function () {
			this.checked = false;
		});

	});

	/* for age dropdown clear functionlity */

	$('#clear_btn_age').click(function () {

		$('input[name="age_filter_radio"]').each(function () {
			this.checked = false;
		});

		$('#age_filter_search__').val('');
		$('#age_filter_search_').val('');

	});

	// For selected tags in filter

	$(".li_btns li").click(function (e) {
		var slectedtagclass = $(this).attr('class').split(' ').pop();
		var compareselectedtag = $('.select_unselect_btns_tag').find(slectedtagclass);

		var sel = $(this).text();

		$(".select_unselect_btns_tag").append("<div class='same_slected_list " + slectedtagclass + " ' id=" + sel + ">" + sel + "<i class='fa fa-times-circle ml-1'></i></div>");

	});

	/*for clear gender radio button*/
	$(document).on('click', '#clearBtn_gender', function () {

		$('input[name="gender"]').each(function () {
			this.checked = false;
		});

	});

	// Remove tag filter with cross icon
	$(document).on("click", ".select_unselect_btns .same_slected_list i", function () {
		$(this).parent().remove();
	});

	// Remove tag filter with cross icon
	$(document).on("click", ".select_unselect_btns_tag .same_slected_list i", function () {
		$(this).parent().remove();
	});

	// Remove tag filter with cross icon
	$(document).on("click", ".select_unselect_last_name .same_slected_list i", function () {
		$(this).parent().remove();
	});

	/*smart search functionlity*/
	$('#smartSearch').keyup(function () {
		var search = $('#smartSearch').val();
		$.ajax({
			url: base_url + 'smart',
			data: {
				search: search
			},
			success: function (response) {
				result = JSON.parse(response)

				html = '';
				$.each(result, function (key, val) {
					html += '<li class="result-value" data-id="' + val.id + '" data-name="' + val.Name + '">';
					html += val.Name;
					html += '</li>';

				})

				$('#result').html(html);

				if ($('#smartSearch').val().length == 0) {

					$('#result').html('');
				}
			}
		});
	});

	$(document).on("click", '.result-value', function () {

		var id = $(this).data('id');
		var name = $(this).data('name');
		// var view = 'load_contact';
		$('#smartSearch').val(name);
		var zoomLevel = $("#myrange").val()

		$.ajax({
			type: 'GET',
			url: base_url + 'gettingresult',
			data: {
				id: id,
				view: 'load_contact',
				search: name
			},
			beforeSend: function () {
				$("#result").html('');
			},
			success: function (html) {
				$('#list_view_table_body').empty();
				$('#list_view_table_body').append(html);

				$.ajax({
					type: 'GET',
					url: base_url + 'gettingresult',
					data: {
						id: id,
						view: 'load_contact_grid',
						zoomLevel: zoomLevel,
						search: name
					},
					success: function (html) {
						$('#append_grid_view').empty();
						$('#append_grid_view').append(html);

					}
				});
			}
		});
	});


	$("#slider-distance").slider({
		range: true,
		min: 0,
		max: 100000,
		values: [0, 1000],
		slide: function (event, ui) {
			$("#amount").html("$" + ui.values[0] + " - $" + ui.values[1]);
			$("#min").val(ui.values[0]);
			$("#max").val(ui.values[1]);
		}
	});
	$("#amount").html("$" + $("#slider-distance").slider("values", 0) +
		" - $" + $("#slider-distance").slider("values", 1));


	$("#smartSearch").bind('keypress', function (e) {
		if (e.which === 13) {
			CommonSmartSearch()
		}
	});
});


function CommonSmartSearch() {
	var smartSearchElm = $('#smartSearch'),
		zoomLevel = $("#myrange").val(),
		id = '',
		name = smartSearchElm.val();

	$.ajax({
		type: 'GET',
		url: base_url + 'gettingresult',
		data: {
			id: id,
			view: 'load_contact',
			search: name
		},
		beforeSend: function () {
			$("#result").html('');
		},
		success: function (html) {
			$('#list_view_table_body').empty();
			$('#list_view_table_body').append(html);

			$.ajax({
				type: 'GET',
				url: base_url + 'gettingresult',
				data: {
					id: id,
					view: 'load_contact_grid',
					zoomLevel: zoomLevel,
					search: name
				},

				success: function (html) {
					$('#append_grid_view').empty();
					$('#append_grid_view').append(html);

				}
			});
		}
	});
}
//Centeralised function in javscript to check the classes exist and remove 
function removeZoomClasses() {


	if ($(".xs_zomm").length > 0) {
		$(".user_pf_area").removeClass("xs_zomm");
	}

	if ($(".m_zomm").length > 0) {
		$(".user_pf_area").removeClass("m_zomm");
	}

	if ($(".s_zomm").length > 0) {
		$(".user_pf_area").removeClass("s_zomm");
	}

	if ($(".l_zomm").length > 0) {
		$(".l_zomm").removeClass("l_zomm");
	}

	if ($(".xl_zomm").length > 0) {
		$(".user_pf_area").removeClass("xl_zomm");
	}

	return true;
}

function openSearch() {
	document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
	document.getElementById("myOverlay").style.display = "none";
}