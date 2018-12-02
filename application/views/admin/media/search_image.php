<div class="well well-sm">
  <form action="" id="img-search-form" method="post" class="form-inline">
    <div class="form-group">
       <ul class="nav nav-pills media-category">
         <li class="active load-media"><a href="">All</a></li>
         <li class=" load-media" ><a href="image">Images</a></li>
         <li class=" load-media"><a href="video">Videos</a></li>
       </ul>
     </div>
    <div class="form-group pull-right">
      <input type="text" class="form-control" id="search_text" placeholder="Search" required>
      <button type="button" class="btn btn-primary" id="search-img-btn" name="search_img" value="search_img">Search</button>
        <button class="btn btn-info" data-target="#add-media" data-toggle="collapse" type="button"><i class="fa fa-plus"></i> Add New</button>
    </div>

  </form>
</div>
<div class="collapse" id="add-media">
  <center>
    <h3>You can select multiple files</h3>
    <form action="<?php echo base_url(); ?>admin/media/add_image" method="POST" enctype="multipart/form-data" id="add-media-form">
      <button class="btn btn-default" type="button" id="add-media-btn" name="add-media-btn" value="add_media">SELECT FILES</button>
      <input type="file" class="add-file" name="files[]" style="display:none;" multiple>
      <br /><br /><strong>Allowed Types are "jpg","png","jpeg","gif","mp4"</strong>
    </form>
  </center>
</div>
