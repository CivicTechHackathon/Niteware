<div class="col-sm-10 sidebar-right-area">
	<div class="container-fluid main-event-area">
    <h2>Events</h2>
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

	</div>

	<!--Table view-->
	<?php $this->view('admin/event/admin_event_table');?>
</div>
</div>
</div>

</div>
</div>
