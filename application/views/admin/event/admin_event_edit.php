<div class="col-sm-10">
	<div class="container-fluid">
		<h2 id="pages-heading">Edit Event</h2>
		<br>
  <div class="row">
    <div class="col-sm-8">
      <form action="<?php echo base_url();?>admin/events/edit/<?php echo $event['id'];?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="hidden" name="event_id" value="<?php echo $event['id'];?>">
					<label for="event-name">Name:</label>
					<input type="text" class="form-control" name="event-name" id="event-name" value="<?php echo $event['event_name'];?>" required>
				</div>
				<div class="form-group">
					<label for="event-img">Event-Image:   </label>
					<button type="button" id="add-event-img" data-toggle="modal" class="btn btn-primary" name="change_event_img">Change Image</button>
					<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="102400000" />
					<input type="file" class="form-control" name="event_img" id="event-img" value="" style="display:none;">
          <br />
					<img src="<?php echo base_url();?>/assets/website/images/<?php echo $event['event_image'];?>" id="event-image-pre" class="img-thumbnail" alt="Preview Event Image" height="200px" width="200px" >
          <span style="color:red;"><?php if(isset($image_error)) echo $image_error;?></span>
				</div>
				<div class="form-group">
					<label for="event-des">Event Description:</label>
					<textarea name="event-des" id="event-des" class="form-control" rows="8" cols="30" value="" required><?php echo $event['event_des'];?></textarea>
				</div>
				<div class="form-group">
					<input type="date" name="event-date" value="<?php echo strftime("%Y-%m-%d",strtotime($event['date']));?>" id="event-date" required>
				</div>
				<span><?php if(isset($database_error)) echo $database_error;?></span>
				<div class="form-group">
					 <button class="btn btn-primary" type="submit" name="edit-event" id="edit-event" value="edit">Update</button>
				</div>

			</form>
		</div>
    </div>
	</div>
	 <div class="modal fade" id="img_dialog" role="dialog" tabindex="-1">
	 	  <div class="modal-dialog modal-dialog-centered modal-lg  image-upload" role="document" style="width:900px;">
	 	  	 <div class="modal-content">
	 	  	 	<div class="modal-header">
              <button class="close" type="button" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Insert Image</h4>
	 	  	 	</div>
					  <div class="modal-body upload-modal-body">
                <form action="" method="post">
                	 <div class="form-group text-center">
                	 	 <button class="btn btn-primary" name="media" id="media" value="media">Media Library</button>
										 <button class="btn btn-primary" name="upload_pic" id="upload-pic" value="upload_media">Upload Image</button>
                	 </div>
                </form>
					  </div>
						<div class="modal-footer">
               <button class="btn btn-primary" type="button" name="insert_img" value=""></button>
						</div>
	 	  	 </div>
	 	  </div>
	 </div>
</div>
