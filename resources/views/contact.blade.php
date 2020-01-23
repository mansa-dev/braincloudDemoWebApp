<html>
   <head>
      <title></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
      <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
      <script src="{{ asset('/js/popper.min.js') }}"></script>
      <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('/js/custom.js?v=123') }}"></script>
   </head>
   <body>
      <div class="g_wrapper">
      <div class="navbar_coustom_area d-flex align-items-center">
         <div class="site_navbar_logo">
            <img src="{{ asset('/public/images/logo.png') }}" alt="">
         </div>
         <div class="navbar_ct d-flex align-items-center">
            <div class="top_tabs_area">
               <ul class="nav nav-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#people">People</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#companies">Companies</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#groups">Groups</a>
                  </li>
               </ul>
            </div>
            <div class="user_profie_area d-flex justify-content-end">
               <nav class="navbar navbar-expand-sm d-flex">
                  <ul class="d-flex align-items-center top_all_btns">
                     <div id="myOverlay" class="overlay">
                        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                        <div class="overlay-content">
                           <form action="/action_page.php">
                              <input type="text" placeholder="Search.." name="search">
                              <button type="submit"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div>
                     <input type="text" name="search" id="smartSearch">
                     <li class="search_btn">
                        <button type="button" name="button"  id="smartSearchBtn"><i class="fa fa-search"></i></button>
                     </li>
                     <ul id="result"></ul>
                     <li class="new_content">
                        <a href="javascript:void(0);">New Contact</a>
                     </li>
                     <li>
                        <select class="" name="">
                           <option value="">Select 1</option>
                           <option value="">Select 2</option>
                           <option value="">Select 3</option>
                           <option value="">Select 4</option>
                           <option value="">Select 5</option>
                        </select>
                     </li>
                     <li class="file"><a href="javascript:void(0);"><span class="text">To Do</span> <span class="circle_text">12</span> <i class="fa fa-file"></i></a></li>
                     <li class="document"><a href="javascript:void(0);">Documents <i class="fa fa-clipboard"></i></a></li>
                  </ul>
                  <ul class="navbar-nav d-flex justify-content-end align-items-center pl-3">
                     <li><span class="date_text">28 Nov</span></li>
                     <li class="nav-item dropdown d-flex justify-content-end">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <img src="{{ asset('/public/images/face8.jpg') }}" alt="">
                        </a>
                        <div class="dropdown-menu">
                           <ul>
                              <li class="text-center"><b class="dropdown-item">Allen Moreno</b> <a class="dropdown-item" href="javascript:void(0);">allenmoreno@gmail.com</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">View Profile</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Settings</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Log Out</a></b></li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <div class="sidebar_area">
         <aside id="sidebar_wrapper">
            <div class="sideba_menu">
               <ul class="public_groups">
                  <div class="public_text d-flex align-items-center">
                     <h4>Public Groups</h4>
                     <span>271</span>
                  </div>
                  <li class="d-flex align-items-center justify-content-between">Group 1 <span>12</span></li>
                  <li class="d-flex align-items-center justify-content-between">Group 2 <span>23</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_sky">Group 3 <span>53</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_sky">Travel <span>42</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_red">Musical <span>12</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_sky">Garage Band <span>16</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_red">Tennis <span>53</span></li>
                  <li class="create_new"><a href="javascript:void(0);"><i class="fa fa-plus"></i> Create New</a></li>
               </ul>
               <button type="button" class="add_more_btn d-inline-block" name="button"><i class="fa fa-angle-down"></i> Add More</button>
               <ul class="public_groups private_groups mt-5">
                  <div class="public_text private_text d-flex align-items-center">
                     <h4>Private Groups</h4>
                     <span>12</span>
                  </div>
                  <li class="d-flex align-items-center justify-content-between gradient_sky">Group 1 <span>12</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_red">Group 2 <span>23</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_red">Group 3 <span>53</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_sky">Travel <span>42</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_sky">Musical <span>12</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_sky">Garage Band <span>13</span></li>
                  <li class="d-flex align-items-center justify-content-between gradient_sky">Tennis <span>43</span></li>
                  <li class="create_new"><a href="javascript:void(0);"><i class="fa fa-plus"></i> Create New</a></li>
               </ul>
               <button type="button" class="add_more_btn d-inline-block" name="button"><i class="fa fa-angle-down"></i> Add More</button>
            </div>
         </aside>
      </div>
      <div class="main_content_area">
         <div class="main_content_inner_area">
            <div class="select_tabs_area mb-3">
               <ul class="d-flex flex-wrap tabs_li align-items-center filter_ul">
                  <div class="check_box pl-2">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input selectall" id="gridCustomCheck" name="example1">
                        <label class="custom-control-label selectall" for="gridCustomCheck"></label>
                     </div>
                  </div>
                  <li id="name_tabs">
                     <span class="b_s white">Name <i class="fa fa-angle-down"></i></span>
                     <div class="li_dropdown" id="li_dropdown">
                        <div class="acending_decending d-flex mb-3">
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="ascending" name="name_filter_radio" value="1">
                              <label class="custom-control-label" for="ascending">A-Z</label>
                           </div>
                           <div class="custom-control custom-radio ml-3">
                              <input type="radio" class="custom-control-input" id="customRadio" name="name_filter_radio" value="2">
                              <label class="custom-control-label" for="customRadio">Z-A</label>
                           </div>
                        </div>
                        <div class="form-group has-search">
                           <span class="fa fa-search form-control-feedback"></span>
                           <input type="text" class="form-control" id="name_filter_search" placeholder="Search">
                        </div>
                        <!-- for showing error of search dropdown -->
                        <div id="errorName"></div>
                        <!-- for showing error of search dropdown -->
                        <div class="select_unselect_btns pb-3">
                           <span class="slctd d-block mb-1">Selected</span>
                        </div>
                        <div class="li_btns mt-4">
                        </div>
                        <div class="apply_clear_btns mt-3">
                           <button class="apply_btn filters_apply" id="name_filters">Apply</button>
                           <button class="clear_btn" id="clearBtn_name">Clear All</button>
                        </div>
                     </div>
                  </li>
                  <li>
                     <span class="b_s white">
                     Last Name
                     <i class="fa fa-angle-down"></i>
                     </span>
                     <div class="li_dropdown" id="last_li_dropdown">
                        <div class="acending_decending d-flex mb-3">
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="lastascending" name="asc_name_filter" value="1">
                              <label class="custom-control-label" for="lastascending">A-Z</label>
                           </div>
                           <div class="custom-control custom-radio ml-3">
                              <input type="radio" class="custom-control-input" id="lastdesc" name="asc_name_filter" value="2">
                              <label class="custom-control-label" for="lastdesc">Z-A</label>
                           </div>
                        </div>
                        <div class="form-group has-search">
                           <span class="fa fa-search form-control-feedback"></span>
                           <input type="text" class="form-control" id="last_name_filter_search" placeholder="Search">
                        </div>
                        <!-- for showing error of search dropdown -->
                        <div id="errorName"></div>
                        <!-- for showing error of search dropdown -->
                        <div class="select_unselect_last_name pb-3">
                           <span class="slctd d-block mb-1">Selected</span>
                        </div>
                        <div class="li_btns mt-4">
                        </div>
                        <div class="apply_clear_btns mt-3">
                           <button class="apply_btn filters_apply" id="name_filters">Apply</button>
                           <button class="clear_btn" id="clearBtn_name">Clear All</button>
                        </div>
                     </div>
                  </li>
                  <li>
                     <span class="b_s white">
                     Tag
                     <i class="fa fa-angle-down"></i>                                
                     </span>
                     <div class="li_dropdown" id="tag_li_dropdown">
                        <div class="acending_decending d-flex mb-3">
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="ascending_tag" name="name_filter_order" value="1">
                              <label class="custom-control-label" for="ascending_tag">A-Z</label>
                           </div>
                           <div class="custom-control custom-radio ml-3">
                              <input type="radio" class="custom-control-input" id="tagcustomRadio" name="name_filter_order" value="2">
                              <label class="custom-control-label" for="tagcustomRadio">Z-A</label>
                           </div>
                        </div>
                        <div class="form-group has-search">
                           <span class="fa fa-search form-control-feedback"></span>
                           <input type="text" class="form-control" id="tag_filter_search" placeholder="Search">
                        </div>
                        <!-- for showing error of search dropdown -->
                        <div id="errorName"></div>
                        <!-- for showing error of search dropdown -->
                        <div class="select_unselect_btns_tag pb-3">
                           <span class="slctd d-block mb-1">Selected</span>
                        </div>
                        <div class="li_btns mt-4">
                           <ul class="d-flex flex-wrap">
                              <li class="tags Data tag_value"  id="Somnolent"><a class="border_gradient_red" id="Somnolent" href="javascript:void(0);">#Somnolent</a></li>
                              <li class="tags IT tag_value"  id="Critique"><a class="border_gradient_yellow" id="Critique" href="javascript:void(0);">#Critique</a></li>
                              <li class="tags HR border_gradient_sky tag_value"  id="Content"><a class="selected_btn" href="javascript:void(0);">#Content</a></li>
                              <li class="tags Function tag_value"  id="Optimiste"><a 
                                 class="border_gradient_red" href="javascript:void(0);">#Optimiste</a></li>
                              <li class="tags Network tag_value"  id="Fons"><a  class="border_gradient_yellow"
                                 href="javascript:void(0);">#Fons</a></li>
                              <li class="tags Business tag_value" id="Genergies">
                                 <a class="unselected_btn border_gradient_sky" href="javascript:void(0);">
                                 #Genergies
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="apply_clear_btns mt-3">
                           <button class="apply_btn filters_apply" id="name_filters">Apply</button>
                           <button class="clear_btn" id="clearBtn_name">Clear All</button>
                        </div>
                     </div>
                  </li>
                  <li>
                     <span class="b_s white">
                     Group
                     <i class="fa fa-angle-down"></i>
                     </span>
                     <div class="li_dropdown" id="group_li_dropdown">
                        <div class="form-group has-search">
                           <span class="fa fa-search form-control-feedback"></span>
                           <input type="text" class="form-control" id="group_name_filter_search" placeholder="Search">
                        </div>
                        <!-- for showing error of search dropdown -->
                        <div id="errorName"></div>
                        <!-- for showing error of search dropdown -->
                        <div class="apply_clear_btns mt-3">
                           <button class="apply_btn filters_apply" id="name_filters">Apply</button>
                           <button class="clear_btn" id="clearBtn_name">Clear All</button>
                        </div>
                     </div>
                  </li>
                  <li>
                     <span class="b_s white">
                     Company
                     <i class="fa fa-angle-down"></i>
                     </span>
                     <div class="li_dropdown" id="company_li_dropdown">
                        <div class="checkbox_area">
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input company_tile_details" name="company_tile_details" id="Genergies" value="Genergies" name="example1">
                              <label class="custom-control-label" for="Genergies">Genergies</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input company_tile_details" name="company_tile_details" id="BRED" value="BRED" name="example1">
                              <label class="custom-control-label" for="BRED">BRED</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input company_tile_details" name="company_tile_details" id="Odyssée" value="Odyssée" name="example1">
                              <label class="custom-control-label" for="Odyssée">Odyssée</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input company_tile_details" name="company_tile_details" id="Pharmapetit" value="Pharmapetit" name="example1">
                              <label class="custom-control-label" for="Pharmapetit">Pharmapetit</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input company_tile_details" name="company_tile_details" id="Heineken" value="Heineken" name="example1">
                              <label class="custom-control-label" for="Heineken">Heineken</label>
                              <!-- <input type="text" class="form-control" placeholder="Search" id="functionSearch"> -->
                           </div>
                           <!-- for showing error of search dropdown -->
                           <div id="errorFunction"></div>
                           <!-- for showing error of search dropdown -->
                           <div class="apply_clear_btns mt-3">
                              <button class="apply_btn filters_apply" id="function_filter">Apply</button>
                              <button class="clear_btn" id="clearBtn_function">Clear All</button>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <span class="b_s white">
                     Business Line
                     <i class="fa fa-angle-down"></i>
                     </span>
                     <div class="li_dropdown" id="business_li_dropdown">
                        <div class="checkbox_area">
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input business_tile_details" name="company_tile_details" id="Achats" value="Achats" name="example1">
                              <label class="custom-control-label" for="Achats">Achats</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input business_tile_details" name="company_tile_details" id="Magasin" value="Magasin" name="example1">
                              <label class="custom-control-label" for="Magasin">Magasin</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input business_tile_details" name="company_tile_details" id="IT" value="IT" name="example1">
                              <label class="custom-control-label" for="IT">IT</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input business_tile_details" name="company_tile_details" id="Marketing" value="Marketing" name="example1">
                              <label class="custom-control-label" for="Marketing">Marketing</label>
                           </div>
                           <!-- for showing error of search dropdown -->
                           <div id="errorFunction"></div>
                           <!-- for showing error of search dropdown -->
                           <div class="apply_clear_btns mt-3">
                              <!--     <button class="apply_btn filters_apply" id="function_filter">Apply</button>
                                 <button class="clear_btn">Clear All</button> -->
                              <button class="apply_btn filters_apply" id="function_filter">Apply</button>
                              <button class="clear_btn" id="clearBtn_function">Clear All</button>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li id="li_function">
                     <span class="white">
                     Function
                     <i class="fa fa-angle-down"></i>
                     </span>
                     <div class="li_dropdown" id="function_li_dropdown">
                        <div class="acending_decending d-flex mb-3">
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="asc" value="1" name="function_">
                              <label class="custom-control-label" for="asc">A-Z</label>
                           </div>
                           <div class="custom-control custom-radio ml-3">
                              <input type="radio" class="custom-control-input" id="desc" value="2" name="function_">
                              <label class="custom-control-label" for="desc">Z-A</label>
                           </div>
                        </div>
                        <div class="form-group has-search">
                           <span class="fa fa-search form-control-feedback"></span>
                           <input type="text" class="form-control" id="function_filter_search" placeholder="Search">
                        </div>
                        <div class="checkbox_area">
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input filter_check_box" name="designation" id="CMA-CGM" value="CMA-CGM" name="example1">
                              <label class="custom-control-label" for="CMA-CGM">CMA-CGM</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input filter_check_box" name="designation" id="CDC" value="CDC" name="example1">
                              <label class="custom-control-label" for="CDC">CDC</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input filter_check_box" name="designation" id="CDHP" value="CDHP" name="example1">
                              <label class="custom-control-label" for="CDHP">CDHP</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input filter_check_box" name="designation" id="Qualiblue" value="Qualiblue" name="example1">
                              <label class="custom-control-label" for="Qualiblue">Qualiblue</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input filter_check_box" name="designation" id="BRED" value="BRED" name="example1">
                              <label class="custom-control-label" for="BRED">BRED</label>
                              <!-- <input type="text" class="form-control" placeholder="Search" id="functionSearch"> -->
                           </div>
                           <!-- for showing error of search dropdown -->
                           <div id="errorFunction"></div>
                           <!-- for showing error of search dropdown -->
                           <div class="apply_clear_btns mt-3">
                              <!--     <button class="apply_btn filters_apply" id="function_filter">Apply</button>
                                 <button class="clear_btn">Clear All</button> -->
                              <button class="apply_btn filters_apply" id="function_filter">Apply</button>
                              <button class="clear_btn" id="clearBtn_function">Clear All</button>
                           </div>
                        </div>
                  </li>
                  <li><span class="b_s white">Network
                  <i class="fa fa-angle-down"></i></span>
                  <div class="li_dropdown" id="network_li_dropdown">
                  <div class="acending_decending d-flex mb-3">
                  <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="network_filter" value="1" name="network_filter">
                  <label class="custom-control-label" for="network_filter">A-Z</label>
                  </div>
                  <div class="custom-control custom-radio ml-3">
                  <input type="radio" class="custom-control-input" id="network_filter_data" value="2" name="network_filter">
                  <label class="custom-control-label" for="network_filter_data">Z-A</label>
                  </div>
                  </div>
                  <div class="apply_clear_btns mt-3">
                  <button class="apply_btn filters_apply" id="gender_filter">Apply</button>
                  <button class="clear_btn" id="clearBtn_gender">Clear All</button>
                  </div>
                  </div>
                  </li>
                  <li><span class="b_s white">Gender
                  <i class="fa fa-angle-down"></i></span>
                  <div class="li_dropdown" id="function_li_dropdown">
                  <div class="acending_decending d-flex mb-3">
                  <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="male" value="M" name="gender">
                  <label class="custom-control-label" for="male">Male</label>
                  </div>
                  <div class="custom-control custom-radio ml-3">
                  <input type="radio" class="custom-control-input" id="female" value="F" name="gender">
                  <label class="custom-control-label" for="female">Female</label>
                  </div>
                  </div>
                  <div class="apply_clear_btns mt-3">
                  <button class="apply_btn filters_apply" id="gender_filter">Apply</button>
                  <button class="clear_btn" id="clearBtn_gender">Clear All</button>
                  </div>
                  </div>
                  </li>
                  <li><span class="b_s white">Age
                  <i class="fa fa-angle-down"></i></span>
                  <div class="li_dropdown right-dropdowns" id="li_dropdown">
                  <div class="acending_decending d-flex mb-3">
                  <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="age" name="age_filter_radio" value="1">
                  <label class="custom-control-label" for="age">123...</label>
                  </div>
                  <div class="custom-control custom-radio ml-3">
                  <input type="radio" class="custom-control-input" id="radio" name="age_filter_radio" value="2">
                  <label class="custom-control-label" for="radio">...321</label>
                  </div>
                  </div>
                  <div class="form-group information-text">
                  <ul>
                  <li class="mr-2">  <input type="text" name="age_min_value" class="form-control" id="age_filter_search__" placeholder="22"></li>
                  <li>  <input type="text" class="form-control" name="age_max_value" id="age_filter_search_" placeholder="22"></li>
                  </ul>
                  </div>
                  <div class="range-slider-1">
                  <div slider id="slider-distance">
                  <div>
                  <div inverse-left style="width:70%;"></div>
                  <div inverse-right style="width:70%;"></div>
                  <div range style="left:30%;right:40%;"></div>
                  <span thumb style="left:30%;"></span>
                  <span thumb style="left:60%;"></span>
                  <div sign style="left:30%;">
                  <span id="value_age_min">30</span>
                  </div>
                  <div sign style="left:60%;">
                  <span id="value_age_max">60</span>
                  </div>
                  </div>
                  <input type="range" tabindex="0" value="30" id = "age_range" max="100" min="0" step="1" oninput="
                     this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                     var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                     var children = this.parentNode.childNodes[1].childNodes;
                     children[1].style.width=value+'%';
                     children[5].style.left=value+'%';
                     children[7].style.left=value+'%';children[11].style.left=value+'%';
                     children[11].childNodes[1].innerHTML=this.value;" />
                  <input type="range" tabindex="0" value="60" id="age_range_max" max="100" min="0" step="1" oninput="
                     this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                     var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                     var children = this.parentNode.childNodes[1].childNodes;
                     children[3].style.width=(100-value)+'%';
                     children[5].style.right=(100-value)+'%';
                     children[9].style.left=value+'%';children[13].style.left=value+'%';
                     children[13].childNodes[1].innerHTML=this.value;" />
                  </div>
                  </div>
                  <div class="apply_clear_btns mt-3">
                  <button class="apply_btn filters_apply" id="name_filters">Apply</button>
                  <button class="clear_btn">Clear All</button>
                  </div>
                  </div>
                  </li>
                  <li><span class="b_s white">ToDo
                  <i class="fa fa-angle-down"></i></span>
                  <div class="li_dropdown" id="today_li_dropdown">
                  <div class="form-group has-search">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" id="todo_search" placeholder="Search">
                  </div>
                  <!-- for showing error of search dropdown -->
                  <div id="errorName"></div>
                  <!-- for showing error of search dropdown -->
                  <div class="apply_clear_btns mt-3">
                  <button class="apply_btn filters_apply" id="name_filters">Apply</button>
                  <button class="clear_btn" id="clearBtn_name">Clear All</button>
                  </div>
                  </div>
                  </li>
               </ul>
               </div>
               <div class="tab-content">
                  <div id="people" class="tab-pane active">
                     <div class="grid_view" id="grid_view">
                        <div class="for_embed" id="append_grid_view">
                           @if(!empty($data))
                           @foreach($data as $value)
                           <?php $id = $value->id; ?>
                           <div class="user_pf_area s_zomm">
                              <div class="check_box">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input gridCheckBox sm_ch" id="gridCustomCheck<?php echo $value->id; ?>" name="example1">
                                    <label class="custom-control-label sm_ch" for="gridCustomCheck<?php echo $value->id; ?>"></label>
                                 </div>
                              </div>
                              <div class="image">
                                 <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
                              </div>
                              <div class="basic_info">
                                 <h1 class="name"><?php echo $value->First_Name.' '.ucfirst(strtolower($value->Name)); ?></h1>
                                 <p class="little_description mb-2">{{$value->Job1_Title}} at {{$value->Job1_Company}}<b>, </b>{{$value->Age}}</p>
                                 <div class="private_info mb-3">
                                    <span class="d-block w-100">{{$value->PhoneNumber1}}</span>
                                    <span class="d-block w-100">{{$value->Email1}}</span>
                                 </div>
                              </div>
                              <div class="proffesional_tags mb-2">
                                 <ul>
                                    <li class="color_name  gradient_sky">{{'#'.$value->Tag1}}</li>
                                    <li class="color_name basic_tags gradient_red">{{'#'.$value->Tag2}}</li>
                                    <li class="color_name basic_tags gradient_yellow">{{'#'.$value->Tag3}}</li>
                                    <li class="color_name basic_tags gradient_red">{{'#'.$value->Tag4}}</li>
                                    <li class="color_name basic_tags gradient_sky">{{'#'.$value->Tag5}}</li>
                                    <li class="color_name basic_tags gradient_yellow">{{'#'.$value->Tag6}}</li>
                                    <li class="color_name basic_tags gradient_red">{{'#'.$value->Tag7}}</li>
                                    <li class="color_name basic_tags gradient_sky">{{'#'.$value->Tag8}}</li>
                                 </ul>
                              </div>
                              <div class="friend_list">
                                 <ul>
                                    <li>
                                       <a href="javascript:void(0);">
                                       <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);">
                                       <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);">
                                       <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);">
                                       <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);">
                                       <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           @endforeach
                        </div>
                        <div class="show_more_main grid_view_show_more mt-3" id="show_more_main">
                           <span id="<?php echo $id; ?>" class="load_more_button_grid show_more_grid" title="Load more posts">Show More</span>
                        </div>
                     </div>
                     <div class="list_view" id="list_view">
                        <table class="table table-striped" id="list_view_table">
                           <thead>
                              <tr>
                                 <th>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input table_grid_ch" id="table_grid_ch" name="example1">
                                       <label class="custom-control-label table_grid_ch" for="table_grid_ch"></label>
                                    </div>
                                 </th>
                                 <th>Photo</th>
                                 <th>First Name</th>
                                 <th>Family Name</th>
                                 <th class="positon">Position</th>
                                 <th>Company</th>
                                 <th>Telephone</th>
                                 <th class="email">Mail</th>
                                 <th>Tag</th>
                                 <th>Age</th>
                              </tr>
                           </thead>
                           <tbody id="list_view_table_body">
                              @foreach($data as $value)
                              <?php $id = $value->id; ?>
                              <tr>
                                 <td>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input sm_ch" id="listcustomCheck<?php echo $id; ?>" name="example1">
                                       <label class="custom-control-label sm_ch" for="listcustomCheck<?php echo $id; ?>"></label>
                                    </div>
                                 </td>
                                 <td>
                                    <img src="{{ asset('/public/images/face8.jpg') }}" alt="">
                                 </td>
                                 <td>{{$value->First_Name}}</td>
                                 <td>{{$value->Name}}</td>
                                 <td class="positon">{{$value->Job1_Title}}</td>
                                 <td>{{$value->Job1_Company}}</td>
                                 <td>{{$value->PhoneNumber1}}</td>
                                 <td class="email">{{$value->Email1}}</td>
                                 <td>{{$value->Tag1}}</td>
                                 <td>{{$value->Age}}</td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                        <div class="show_more_main" id="show_more_main">
                           <span id="<?php echo $id; ?>" class="load_more_button show_more" title="Load more posts">Show More</span>
                        </div>
                     </div>
                  </div>
                  @else
                  <div class="show_more_main grid_view_show_more mt-3" id="show_more_main">
                     <span  class="load_more_button_grid show_more_grid" title="Load more posts">
                     No data found
                     </span>
                  </div>
                  @endif 
                  <div id="companies" class="tab-pane fade">
                  </div>
                  <div id="groups" class="tab-pane fade">
                  </div>
               </div>
            </div>
         </div>
         <footer class="footer">
            <div class="footer_inner d-flex align-items-center justify-content-between">
               <ul class="d-flex align-items-center">
                  <li class="li_buttons">
                     <button type="button" class="list_btn " name="button"><i class="fa fa-list"></i></button><button type="button" class="grid_btn active" name=" button"><i class="fa fa-th-large"></i></button>
                  </li>
                  <li><i class="fa fa-check"></i> 0 Selected</li>
                  <li><i class="fa fa-filter"></i> 239 Filter Result</li>
                  <li><i class="fa fa-list"></i> 732 All Items</li>
               </ul>
               <div class="progress_line_bar w-25">
                  <div class="buy_subscription_slider">
                     <div class="volumne">
                        <span class="vlm_txt">
                           <div class="vlm_slider">
                              <input type="range" min="1" max="5" value="2" class="slider" id="myrange">
                           </div>
                        </span>
                     </div>
                     <!-- <p class="text-center"><span id="myvolume_range">1</span></p> -->
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <script>
         var slider = document.getElementById("myrange");
         var output = document.getElementById("myvolume_range");
         output.innerHTML = slider.value;
         
         slider.oninput = function() {
             output.innerHTML = this.value;
         };
      </script>
   </body>
</html>