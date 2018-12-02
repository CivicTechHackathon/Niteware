<?php
defined('BASEPATH') OR exit('No Direct Script Access is Allowed');

class Events extends MY_Admin
{
    private $events_info=array();

    private $table="events";



    public function __construct()
    {
       parent::__construct();
       $this->load->model('admin/Events_Model');

     if(!$this->session->has_userdata('username'))
          redirect('admin/login','refresh');
           $this->events_info['button_value']="events/load_insert_img_view";

    }

    public function index()
    {
      $this->header();
      $this->top_header_navbar();
      $this->sidebar();
      $this->load_events();
      $this->footer();
    }

    private function load_events()
    {

       $this->events_info['events']=$this->Events_Model->get_all($this->table);        //FUNCTION DEFINED IN BASE MODEL
       $this->load->view('admin/event/admin_events',$this->events_info);           //FUNCTION WILL LOAD THE EVENTS VIEW
    }


 /*FUNCTION FOR LOADING THE ADD EVENT VIEW */
  public function load_insert_img_view(){
       $data;
       if(!empty($_POST['id'])){

          $result=$this->Events_Model->get_all($this->table,$_POST['id']);
          $this->event_info=$result->fetch_assoc();
          $data=$this->load->view('admin/event/admin_add_event',$this->event_info,TRUE);
       }

       else{
         $data=$this->load->view('admin/event/admin_add_event',"",TRUE);
       }

       echo json_encode(array("view"=>$data));

  }


/*FUNCTION FOR ADDING EVENT INTO DB*/
public function add_event(){

     if(isset($_POST['button'])){
          $event_name=filter_name($_POST['event_title']);
          $event_date=filter_name($_POST['event_date']);
          $event_des=filter_name($_POST['event_des']);
          $event_image=filter_name($_POST['event_img']);

           if(strpos($_POST['button'],"Published")>-1)
             $status="Published";
             else {
               $status="Draft";
             }

          //Steps of extracting the name from source
          $temp_array=explode("/",$event_image);
          $event_image=$temp_array[Count($temp_array)-1];
          $this->Events_Model->add_event($event_name,$event_date,$event_des,$event_image,$status);

     }

}



/*FUNCTION FOR UPDATE EVENT IN DB*/
public function update_event()
{
   $event_id=$_POST['id'];
   $event_name=filter_name($_POST['event_title']);
   $event_date=filter_name($_POST['event_date']);
   $event_des=filter_name($_POST['event_des']);
   $event_image=filter_name($_POST['event_img']);

    if(strpos($_POST['button'],"publish")>-1)
      $status="Published";
      else {
        $status="Draft";
      }


      //Steps of extracting the name from source
      $temp_array=explode("/",$event_image);
      $event_image=$temp_array[Count($temp_array)-1];
      $this->Events_Model->update_event($event_id,$event_name,$event_date,$event_des,$event_image,$status);


}

/*FUNCTION WILL LOAD THE GET THE MEDIA VIEW */
  public function load_media(){
     $table="gallery";
     $this->load->model('admin/Media_Model');
     $this->media_info['images']=$this->Media_Model->get_all($table);
     $data=$this->load->view('admin/event/media_modal',$this->media_info,TRUE);
     echo json_encode(array("view"=>$data));
}





/*FUNCTION FOR DELETING ROW IN DB*/
public function delete(){
    $id=$_POST['del_row'];
    $id=implode(',',$id);
    $this->Events_Model->delete($this->table,$id);
}









}
 ?>
