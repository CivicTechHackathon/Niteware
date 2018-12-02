<div id="mediaModal" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Image Details</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            <?php if(strpos($file_type,"image")!==false) {?>
            <img src="<?php echo base_url();?>assets/website/images/<?php echo $file_name;?>" alt="<?php echo $file_name;?>" class="img-thumbnail" id="media-modal-img" width="100%" height="100%" controls>
            <?php
          }
          else{
           ?>
             <video src="<?php echo base_url();?>assets/website/images/<?php echo $file_name; ?>" height="100%" width="100%"></video>
           <?php
         }
            ?>
          </div>
          <div class="col-sm-8">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <ul style="padding:10px;" id="media-img-info">
              <li><strong>File Name: </strong><span><?php echo $file_name; ?></span></li>
              <li><strong>File Type: </strong><span><?php echo $file_type; ?></span></li>
              <li><strong>File Size: </strong><span></span><?php echo $file_size; ?></li>
              <li><strong>Uploaded on: </strong><span><?php echo date('d-M-Y',strtotime($date)); ?></span></li>
              <li><strong>Uploaded By: </strong><span><?php echo $author; ?></span></li>
           </ul>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="dlt_media" name="button">Delete</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <p></p>
      </div>
    </div>

  </div>

</div>
