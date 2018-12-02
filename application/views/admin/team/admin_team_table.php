<div class="container-fluid event-table responsive-table">
   <table class="table table-striped table-bordered table-hover text-center">
      <form action="" method="post">
        <thead>
          <tr>
            <th><input type="checkbox"></th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Designation</th>
            <th>FB</th>
            <th>Gmail</th>
            <th>Twitter</th>
            <th>ACM NO</th>
            <th>Author</th>
            <th>Status</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody id="event-table">
        <?php
         if($team->num_rows>0){
            while($row=$team->fetch_assoc()){
       ?>
          <tr>
            <td><input type="checkbox" name="id" class="mark-delete" value="<?php echo $row['id']; ?>"></td>
            <td><?php echo $row['name']; ?></td>
            <td><img src="<?php echo base_url();?>assets/website/images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" height="50px" width="50px"> </td>
            <td><?php echo substr($row['description'],0,20);?>... </td>
            <td><?php echo $row['designation'];?></td>
            <td><?php echo $row['fblink'];?></td>
            <td><?php echo $row['glink']; ?></td>
            <td><?php echo $row['tlink']; ?></td>
            <td><?php echo $row['acm_no']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td class="status"><?php echo $row['status'];?></td>
            <td><?php echo date('d-m-Y',strtotime($row['updated_on']));?></td>
            <td class="text-center operation" id="<?php echo $button_value; ?>"><a href="<?php echo $row['id']; ?>"><i class="fa fa-edit text-center"></i></a></td>
            <td class="text-center dlt-operation"><a href="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td>
          <!--  <td><?php// echo date('d-m-Y',strtotime($row['updated']));?></td>-->
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
   <button type="button" class="btn btn-primary dlt_row" name="button" value="team/delete_member">Delete</button>
</div>
