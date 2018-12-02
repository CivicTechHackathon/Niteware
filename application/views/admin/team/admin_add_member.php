<div id="add-event" class="add-event-div">
   <h3><?php echo isset($id)?'Edit Member Info':'Insert Member';?></h3>
   <form action="" method="post" id="add-member-form">
       <!--Add member view-->
       <div class="row">
          <div class="col-sm-8">
             <div class="row">
              <div class="col-sm-4">
                <label for="member-name">Name:*</label>
                 <input type="text" class="form-control" name="member-name" id="member-name" value="<?php echo isset($name)?$name:'';?>" placeholder="Member Name" required><span class="error" style="color:red;"></span>
                  <input type="hidden" name="id" value="<?php echo isset($id)?$id:'';?>" id="id">
               </div>
              <div class="col-sm-4">
                <label for="designation">Designation:*</label>
                <input type="text" class="form-control" name="designation" id="member-des" value="<?php echo isset($designation)?$designation:'';?>" placeholder="Member Designation" required><span class="error" style="color:red;"></span>
              </div>
              <div class="col-sm-4">
                <label for="acm_no">ACM NO</label>
                <input type="text" class="form-control" name="member-acm-no" id="member-acm-no" value="<?php echo isset($acm_no)?$acm_no:'';?>" placeholder="Member ACM No"><span class="error"></span>
              </div>
             </div>
             <div class="row">
                <div class="col-sm-4">
                  <label for="fbId">Facebook ID</label>
                  <input type="url" name="fb_id" class="form-control" id="member_fbid" value="<?php echo isset($fblink)?$fblink:'';?>" placeholder="Facebook Link"><span class="error"></span>
                </div>
                <div class="col-sm-4">
                  <label for="twitterId">Twitter Id</label>
                  <input type="url" class="form-control" name="tw_id" id="member_twid" value="<?php echo isset($tlink)?$tlink:'';?>" placeholder="Twitter ID">
                </div>
                <div class="col-sm-4">
                  <label for="gmail_id">Gmail Id</label>
                  <input type="url" class="form-control" name="gmail_id" id="member_gid" value="<?php echo isset($glink)?$glink:'';?>" placeholder="Gmail Id">
                </div>
             </div>
             <div class="row">
                <div class="col-sm-12">
                  <label for="des">Description:*</label>
                  <textarea name="member-des" id="member-descrip" value="" cols="30" rows="10" class="form-control" required><?php echo isset($description)?$description:'';?></textarea><span class="error" style="color:red;"></span>
                </div>
             </div>
          </div>
          <div class="col-sm-4">
            <label for="">Image: </label>
           <div class="img-div text-center">
             <i class="fa fa-plus-circle add-img-icon <?php echo isset($id)?'hide':'';?>" style="font-size:50px;"></i>
            <img src="<?php echo base_url();?>assets/website/images/<?php echo isset($image)?$image:'';?>" class="<?php echo isset($id)?'':'hide';?>" alt="" width="100%" height="100%">
            </div>
            <span class="image-error" style="color:red;"></span>
          </div>
       </div>
       <div class="add-event-button">
          <button class="btn btn-primary publish-member" type="submit" name="publish" value="<?php echo isset($id)?'Update_publish':'Published';?>">Publish</button>
          <button class="btn btn-primary draft-member" type="submit" name="draft" value="<?php echo isset($id)?'Update_Draft':'Draft';?>">Save Draft</button>
       </div>
   </form>
</div>
