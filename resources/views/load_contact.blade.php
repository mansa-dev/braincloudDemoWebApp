@foreach($data as $value)
<?php $id = $value->id; ?>
  <tr>
      <td>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
              <label class="custom-control-label" for="customCheck"></label>
          </div>
      </td>
      <td>
          <img src="{{ asset('/public/images/face8.jpg') }} " alt="">
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


