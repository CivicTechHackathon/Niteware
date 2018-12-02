<div class="container-fluid table-responsive event-table">
  <table class="table table-striped table-hover table-bordered text-center">
      <thead>
          <tr>
              <th>Competition</th>
              <th>Icon</th>
              <th>Tag Line</th>
              <th>Description</th>
              <th>Rules</th>
              <th>Max Participants</th>
              <th>Min Participants</th>
              <th>Price</th>
              <th>Winning Criteria</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>
      </thead>
    <tbody>
        <?php if($comp->num_rows>0){ 
              while($row=$comp->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['comp_name']; ?></td>
                <td><i class="fa <?php echo $row['icon']; ?>"></i></td>
                <td><?php echo $row['tag_line']; ?></td>
                <td><?php echo substr($row['description'],0,20); ?></td>
                <td><?php echo substr($row['rules'],0,20); ?></td>
                <td><?php echo $row['max_member']; ?></td>
                <td><?php echo $row['min_member']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo substr($row['winning_criteria'],0,20); ?></td>
                <td class="text-center operation" id="<?php echo $button_value;?>"><a href="<?php echo $row['id']; ?>"><i class="fa fa-edit text-center"></i></a></td>
                <td class="text-center "><a href="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td>
            </tr>
            

            <?php
        }
    }
        else{
             echo "No Competition Found";
        }
            ?>
    </tbody>
  </table>
   <button type="button" class="btn btn-primary dlt_row" name="button" value="comp/delete_comp">Delete</button>
</div>