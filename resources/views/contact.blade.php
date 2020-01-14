<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- 
  Need to add dynamic links on the place of direct links  -->
<!--   <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/style.css"> -->

  <link rel="stylesheet" href="http://127.0.0.1/brain_cloud/resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://127.0.0.1/brain_cloud/resources/css/common.css">
  <link rel="stylesheet" href="http://127.0.0.1/brain_cloud/resources/css/style.css">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--   <script type="text/javascript" src="{{ URL::asset('resources/js/jquery.min.js') }}"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="{{ URL::asset('resources/js/custom.js') }}"></script> -->
  <script type="text/javascript" src="http://127.0.0.1/brain_cloud/resources/js/jquery.min.js"></script>
  <script src="http://127.0.0.1/brain_cloud/resources/js/popper.min.js"></script>
  <script src="http://127.0.0.1/brain_cloud/resources/js/bootstrap.min.js"></script>
  <script src="http://127.0.0.1/brain_cloud/resources/js/custom.js"></script>
<!--   <script src="http://127.0.0.1/brain_cloud/resources/js/prefixfree.min.js"></script> -->


 
</head>
<body>

  <div class="g_wrapper">
    <div class="navbar_coustom_area d-flex align-items-center">
      <div class="site_navbar_logo">
        <img src="images/logo.png" alt="">
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
              <li class="search_btn">
                <button type="button" name="button"><i class="fa fa-search"></i></button>
              </li>
              <li class="new_content">
                <a href="#">New Contact</a>
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
              <li class="file"><a href="#"><span class="text">To Do</span> <span class="circle_text">12</span> <i class="fa fa-file"></i></a></li>
              <li class="document"><a href="#">Documents <i class="fa fa-clipboard"></i></a></li>
            </ul>
            <ul class="navbar-nav d-flex justify-content-end align-items-center pl-3">
              <li><span class="date_text">28 Nov</span></li>
              <li class="nav-item dropdown d-flex justify-content-end">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <img src="images/face8.jpg" alt="">
                </a>
                <div class="dropdown-menu">
                  <ul>
                    <li class="text-center"><b class="dropdown-item">Allen Moreno</b> <a class="dropdown-item" href="#">allenmoreno@gmail.com</a></li>
                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></b></li>
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
            <li class="create_new"><a href="#"><i class="fa fa-plus"></i> Create New</a></li>
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
            <li class="create_new"><a href="#"><i class="fa fa-plus"></i> Create New</a></li>
          </ul>
          <button type="button" class="add_more_btn d-inline-block" name="button"><i class="fa fa-angle-down"></i> Add More</button>
        </div>
      </aside>
    </div>
    <div class="main_content_area">
      <div class="main_content_inner_area">
        <div class="tab-content">
          <div id="people" class="container tab-pane active">
<!--             <div class="grid_view" id="grid_view">
              <div class="user_pf_area xl">
                <div class="check_box">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    <label class="custom-control-label" for="customCheck"></label>
                  </div>
                </div>
                <div class="image mb-2">
                  <img src="images/face8.jpg" alt="" class="rounded-circle">
                </div>
                <div class="basic_info">
                  <h1 class="name">Allen Moreno</h1>
                  <p class="little_description mb-2">Analyst at <b>Braincloud, </b>20</p>
                  <div class="private_info mb-3">
                    <span class="d-block w-100">0123456789</span>
                    <span class="d-block w-100">Test@gmail.com</span>
                  </div>
                </div>
                <div class="proffesional_tags mb-2">
                  <ul>
                    <li class="color_name basic_tags">#IT</li>
                    <li class="color_name basic_tags">#HR</li>
                    <li class="color_name basic_tags">#Data</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#Bussiness Line</li>
                    <li class="color_name basic_tags">#Function</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#IT</li>
                  </ul>
                </div>
                <div class="friend_list">
                  <ul>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="user_pf_area l_zomm">
                <div class="check_box">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    <label class="custom-control-label" for="customCheck"></label>
                  </div>
                </div>
                <div class="image mb-2">
                  <img src="images/face8.jpg" alt="" class="rounded-circle">
                </div>
                <div class="basic_info">
                  <h1 class="name">Allen Moreno</h1>
                  <p class="little_description mb-2">Analyst at <b>Braincloud, </b>20</p>
                  <div class="private_info mb-3">
                    <span class="d-block w-100">0123456789</span>
                    <span class="d-block w-100">Test@gmail.com</span>
                  </div>
                </div>
                <div class="proffesional_tags mb-2">
                  <ul>
                    <li class="color_name basic_tags">#IT</li>
                    <li class="color_name basic_tags">#HR</li>
                    <li class="color_name basic_tags">#Data</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#Bussiness Line</li>
                    <li class="color_name basic_tags">#Function</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#IT</li>
                  </ul>
                </div>
                <div class="friend_list">
                  <ul>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="user_pf_area m_zomm">
                <div class="check_box">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    <label class="custom-control-label" for="customCheck"></label>
                  </div>
                </div>
                <div class="image mb-2">
                  <img src="images/face8.jpg" alt="" class="rounded-circle">
                </div>
                <div class="basic_info">
                  <h1 class="name">Allen Moreno</h1>
                  <p class="little_description mb-2">Analyst at <b>Braincloud, </b>20</p>
                  <div class="private_info mb-3">
                    <span class="d-block w-100">0123456789</span>
                    <span class="d-block w-100">Test@gmail.com</span>
                  </div>
                </div>
                <div class="proffesional_tags mb-2">
                  <ul>
                    <li class="color_name basic_tags">#IT</li>
                    <li class="color_name basic_tags">#HR</li>
                    <li class="color_name basic_tags">#Data</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#Bussiness Line</li>
                    <li class="color_name basic_tags">#Function</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#IT</li>
                  </ul>
                </div>
                <div class="friend_list">
                  <ul>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="user_pf_area s_zomm">
                <div class="check_box">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    <label class="custom-control-label" for="customCheck"></label>
                  </div>
                </div>
                <div class="image mb-2">
                  <img src="images/face8.jpg" alt="" class="rounded-circle">
                </div>
                <div class="basic_info">
                  <h1 class="name">Allen Moreno</h1>
                  <p class="little_description mb-2">Analyst at <b>Braincloud, </b>20</p>
                  <div class="private_info mb-3">
                    <span class="d-block w-100">0123456789</span>
                    <span class="d-block w-100">Test@gmail.com</span>
                  </div>
                </div>
                <div class="proffesional_tags mb-2">
                  <ul>
                    <li class="color_name basic_tags">#IT</li>
                    <li class="color_name basic_tags">#HR</li>
                    <li class="color_name basic_tags">#Data</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#Bussiness Line</li>
                    <li class="color_name basic_tags">#Function</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#IT</li>
                  </ul>
                </div>
                <div class="friend_list">
                  <ul>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="user_pf_area xs_zomm">
                <div class="check_box">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    <label class="custom-control-label" for="customCheck"></label>
                  </div>
                </div>
                <div class="image mb-2">
                  <img src="images/face8.jpg" alt="" class="rounded-circle">
                </div>
                <div class="basic_info">
                  <h1 class="name">Allen Moreno</h1>
                  <p class="little_description mb-2">Analyst at <b>Braincloud, </b>20</p>
                  <div class="private_info mb-3">
                    <span class="d-block w-100">0123456789</span>
                    <span class="d-block w-100">Test@gmail.com</span>
                  </div>
                </div>
                <div class="proffesional_tags mb-2">
                  <ul>
                    <li class="color_name basic_tags">#IT</li>
                    <li class="color_name basic_tags">#HR</li>
                    <li class="color_name basic_tags">#Data</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#Bussiness Line</li>
                    <li class="color_name basic_tags">#Function</li>
                    <li class="color_name basic_tags">#Network</li>
                    <li class="color_name basic_tags">#IT</li>
                  </ul>
                </div>
                <div class="friend_list">
                  <ul>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/face8.jpg" alt="" class="rounded-circle">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
<!--             <div class="list_view" id="list_view">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Photo</th>
                    <th>First Name</th>
                    <th>Family Name</th>
                    <th>Position</th>
                    <th>Company</th>
                    <th>Telephone</th>
                    <th>Mail</th>
                    <th>Tag</th>
                    <th>Age</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data->slice(0, 10) as $value)    
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                        <label class="custom-control-label" for="customCheck"></label>
                      </div>
                    </td>
                    <td>
                      <img src="images/face8.jpg" alt="">
                    </td>
                    <td>Lia</td>
                    <td>Castro</td>
                    <td>Analyst</td>
                    <td>Braincloud</td>
                    <td>0123456789</td>
                    <td>test@example.com</td>
                    <td>#datagroup</td>
                    <td>20</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div> -->

            <ul id="contact_data" class="list clearfix">
            @foreach($data as $value) 
            <?php $id = $value->id; ?>
            <li class="clearfix">
              <section class="left">
                <img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
                <h3></h3>
                <span class="meta">Product ID: 543J423</span>
              </section>
              
              <section class="right">
                <span class="price">$45.00</span>
                <span class="darkview">
                <a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
                <a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
                </span>
              </section>
            </li>
            @endforeach

            <div class="show_more_main" id="show_more_main<?php echo $id; ?>">
            <span id="<?php echo $id; ?>" class="show_more" title="Load more posts">Show more</span>
            
          </ul>

          </div>
          <div id="companies" class="container tab-pane fade">
          </div>
          <div id="groups" class="container tab-pane fade">
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="footer_inner d-flex align-items-center justify-content-between">
        <ul class="d-flex align-items-center">
              <span class="list-style-buttons">
        <a href="#" id="gridview" class="switcher"><img src="images/grid-view.png" alt="Grid"></a>
        <a href="#" id="listview" class="switcher active"><img src="images/list-view-active.png" alt="List"></a>
      </span>
 <!--          <li class="li_buttons">
            <button type="button" id="list-view" class="list_btn " name="button"><i class="fa fa-list"></i></button><button type="button" id="grid-view" class="grid_btn active" name=" button"><i class="fa fa-th-large"></i></button>
          </li> -->
          <li><i class="fa fa-check"></i> 0 Selected</li>
          <li><i class="fa fa-filter"></i> 239 Filter Result</li>
          <li><i class="fa fa-list"></i> 732 All Items</li>
        </ul>
        <div class="progress_line_bar w-25">
          <div class="buy_subscription_slider">
            <div class="volumne">
              <span class="vlm_txt">
                <div class="vlm_slider">
                  <input type="range" min="1" max="5" value="1" class="slider" id="myvolume">
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
  var slider = document.getElementById("myvolume");
  var output = document.getElementById("myvolume_range");
  output.innerHTML = slider.value;

  slider.oninput = function() {
    output.innerHTML = this.value;
  };
  </script>
</body>
</html>
