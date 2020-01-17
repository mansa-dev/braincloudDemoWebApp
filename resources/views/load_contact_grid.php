@if(!empty($data))

@foreach($data as $value)
<?php $id = $value->id; ?>
<div class="user_pf_area xs_zomm">
<div class="check_box">
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input gridCheckBox sm_ch" id="gridCustomCheck<?php echo $value->id; ?>" name="example1">
    <label class="custom-control-label sm_ch" for="gridCustomCheck<?php echo $value->id; ?>"></label>
  </div>
</div>
<div class="image">
  <img src="images/face8.jpg" alt="" class="rounded-circle">
</div>
<div class="basic_info">
  <h1 class="name">{{$value->First_Name}}</h1>
  <p class="little_description mb-2">{{$value->Job1_Title}} at {{$value->Job1_Company}}<b>, </b>{{$value->Age}}/p>
    <div class="private_info mb-3">
      <span class="d-block w-100">{{$value->PhoneNumber1}}</span>
      <span class="d-block w-100">{{$value->Email1}}</span>
    </div>
  </div>
  <div class="proffesional_tags mb-2">
    <ul>
      <li class="color_name basic_tags">{{'#'.$value->Tag1}}</li>
      <li class="color_name basic_tags">{{'#'.$value->Tag2}}</li>
      <li class="color_name basic_tags">{{'#'.$value->Tag3}}</li>
      <li class="color_name basic_tags">{{'#'.$value->Tag4}}</li>
      <li class="color_name basic_tags">{{'#'.$value->Tag5}}</li>
      <li class="color_name basic_tags">{{'#'.$value->Tag6}}</li>
      <li class="color_name basic_tags">{{'#'.$value->Tag7}}</li>
      <li class="color_name basic_tags">{{'#'.$value->Tag8}}</li>
    </ul>
  </div>
  <div class="friend_list">
    <ul>
      <li>
        <a href="#">
          <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="{{ asset('/public/images/face8.jpg') }}" alt="" class="rounded-circle">
        </a>
      </li>
    </ul>
  </div>
</div>
@endforeach

@else 
 
 <div class="show_more_main grid_view_show_more mt-3" id="show_more_main">
    <span  class="load_more_button_grid  show_more_grid" title="Load more posts">
      No data found
    </span>
  </div>
 
@endif
