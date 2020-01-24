<?php foreach($data as $value){ $id = $value->id ?>

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
      <td><?php echo $value->First_Name; ?></td>
      <td><?php echo $value->Name; ?></td>


  </tr>
 <?php } ?>
