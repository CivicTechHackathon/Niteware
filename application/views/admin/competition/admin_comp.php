<div class="sidebar-right-area col-sm-10">
<div class="main-event-area">
        <h2>Competitions</h2>
            <?php $this->view('admin/event/admin_event_well');?>
        <!--ADD EVENT FORM-->
         <?php //$this->load->view('admin/event/admin_add_event');?>

         <div  id="media-modal" class="modal fade" role="dialog">
		   <div class="modal-dialog modal-lg media-dialog">
		     <div class="modal-content">
		       <div class="modal-header">
		          <button class="close" type="button" data-dismiss="modal">&times;</button>
							 <h3 class="modal-title">Insert Image</h3>
		       </div>
		       <div class="modal-body gallery-container event-modal" id="modal-gallery">

		       </div>
		       <div class="modal-footer">
		          <button class="btn btn-primary" name="insert-image" id="insert-image">Insert</button>
		       </div>
		     </div>
		   </div>
		 </div>
         
         
         
         <?php $this->view('admin/competition/admin_comp_table'); ?>
    
     </div>
</div>