<div id="add-event" class="add-event-div">
   <h3><?php echo isset($id)?'Edit Event':'Insert Event';?></h3>
   <form action="" method="post" id="add-event-form">
      <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label for="">Title: </label>
              <input type="text" class="form-control" name="event-title" id="event-title" value="<?php echo isset($event_name)?$event_name:"";?>" placeholder="Event Title"><span class="text-error" style="color:red;"></span>
              <input type="hidden" name="id" value="<?php echo isset($id)?$id:'';?>" id="id">
            </div>
            <div class="col-sm-6">
              <label for="">Date: </label>
              <input type="date" class="form-control" name="event-date" value="<?php echo isset($date)?$date:"";?>" id="event-date"><span id="date-error"><span id="title-error" style="color:red;"></span></span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label for="">Description: </label>
              <textarea name="event-des" rows="9" cols="80" class="form-control" id="event-des"><?php echo isset($event_des)?$event_des:"";?></textarea><span id="des-error" style="color:red;"></span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
           <label for="">Image: </label>
          <div class="img-div text-center">
            <i class="fa fa-plus-circle add-img-icon <?php echo isset($event_image)?'hide':'';?>" style="font-size:50px;"></i>
           <img src="<?php echo base_url();?>assets/website/images/<?php echo isset($event_image)?$event_image:"";?>" class="<?php echo empty($event_image)?'hide':"";?>" alt="" width="100%" height="100%"><span class="image-error" style="color:red;"></span>
           </div>
        </div>
      </div>
       <div class="add-event-button">
          <button class="btn btn-primary publish-event" type="button" name="publish" value="<?php echo isset($id)?'Update_publish':'Published';?>">Publish</button>
          <button class="btn btn-primary draft-event" type="submit" name="draft" value="<?php echo isset($id)?'Update_Draft':'Draft';?>">Save Draft</button>
       </div>
   </form>
</div>
