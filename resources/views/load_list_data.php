<thead>
  <tr>
    <th></th>
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
<tbody>
  @foreach($data as $value)
  <?php $id = $value->id; ?>
  <tr>
    <td>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="listcustomCheck<?php echo $id; ?>" name="example1">
        <label class="custom-control-label" for="listcustomCheck<?php echo $id; ?>"></label>
      </div>
    </td>
    <td>
      <img src="images/face8.jpg" alt="">
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