<div class="container-fluid event-table responsive-table">
   <table class="table table-striped table-bordered table-hover text-center">
      <form action="" method="post">
        <thead>
          <tr>
            <th><input type="checkbox"></th>
            <th>Title</th>
            <th>Author</th>
            <th>Status</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody id="event-table">
        <?php
         if($events->num_rows>0){
            while($row=$events->fetch_assoc()){
       ?>
          <tr>
            <td><input type="checkbox" name="id" class="mark-delete" value="<?php echo $row['id']; ?>"></td>
            <td><?php echo $row['event_name']; ?></td>
            <td><?php echo $row['author'];?> </td>
            <td class="status"><?php echo $row['status'];?> </td>
            <td><?php echo date('d-m-Y',strtotime($row['updated']));?></td>
            <td class="text-center operation" id="<?php echo $button_value;?>"><a href="<?php echo $row['id']; ?>"><i class="fa fa-edit text-center"></i></a></td>
            <td class="text-center "><a href="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td>
          </tr>
          <?php
        }        //END OF WHILE
      }//END OF IF
      else {
        echo "<h2>No Events!</h2>";
      }
          ?>
        </tbody>
      </form>
   </table>
   <button type="button" class="btn btn-primary dlt_row" name="button" value="events/delete">Delete</button>

</div>
