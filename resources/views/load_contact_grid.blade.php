<?php
$class='xs_zomm';

  //Switch statement to add the the classes on zoom in and out.
  switch ($zoomLevel) { 
    case 1:
      $class='xs_zomm';
      break;
    case 2:
      $class='s_zomm';
      break;
    case 3:
      $class='m_zomm';
      break;
    case 4:
      $class='l_zomm';
      break;
    case 5:
      $class='xl_zomm';
      break;
    default:
      $class='xs_zomm';
  }

?>
@if(!empty($data))

@foreach($data as $value)
<?php $id = $value->id; ?>
<div class="user_pf_area  <?php echo $class; ?>">
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
        <li class="color_name basic_tags gradient_sky">{{'#'.$value->Tag1}}</li>
        <li class="color_name basic_tags gradient_yellow">{{'#'.$value->Tag2}}</li>
        <li class="color_name basic_tags gradient_red">{{'#'.$value->Tag3}}</li>
        <li class="color_name basic_tags gradient_sky">{{'#'.$value->Tag4}}</li>
        <li class="color_name basic_tags gradient_yellow">{{'#'.$value->Tag5}}</li>
        <li class="color_name basic_tags gradient_red">{{'#'.$value->Tag6}}</li>
        <li class="color_name basic_tags gradient_sky">{{'#'.$value->Tag7}}</li>
        <li class="color_name basic_tags gradient_sky">{{'#'.$value->Tag8}}</li>
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

@endif