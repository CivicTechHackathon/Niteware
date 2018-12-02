<?php
class Media extends MY_Admin
{

    private $media_info=array();
    private $img_name=array();
    private $img_type=array();
    private $img_temp=array();
    private $img_size=array();
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Media_Model');
        $this->load->helper('file');
        $this->table="gallery";
        if(!$this->session->has_userdata('username'))
           redirect('admin/login','refresh');
    }

    public function index()
    {
      $this->header();
      $this->top_header_navbar();
      $this->sidebar();
      $this->load_images();
      $this->footer();
    }


    /*FUNCTON FO LOADING IMAGES INTO GALLERY*/
    public function load_images()
    {

        $this->media_info['images']=$this->Media_Model->get_all($this->table);
        $this->load->view('admin/media/admin_media',$this->media_info);
    }


    public function delete(){
        $id=$_POST['id'];
        $id=implode(",",$id);
        $this->Media_Model->delete($this->table,$id);
   }


    /*FUNCTION WHICH WIL ADD THE IMAGES*/

    public function add_image(){

          $status="Not Attached";
          $i=0;
          $img_error;
          foreach($_FILES['files']['name'] as $key=>$value){
                $this->img_name[$i]=$_FILES['files']['name'][$key];
                $this->img_type[$i]=$_FILES['files']['type'][$key];
                $this->img_temp[$i]=$_FILES['files']['tmp_name'][$key];
                $img_error=$_FILES['files']['error'][$key];
                $this->img_size[$i]=floor(($_FILES['files']['size'][$key])/1020)." KB";

               $img_error=validate_image($this->img_name[$i],$this->img_type[$i],$this->img_temp[$i],img_error,$type=null);
               if(!empty($img_error)){
                    $this->remove_file($i);
              }
              $i++;
          }

              $status="Attached";
              $user=$_SESSION['username'];
              $this->Media_Model->add($this->img_name,$this->img_type,$this->img_size,$user,$status);
     }

     private function remove_file($index){
            unset($this->img_name[$index]);
            unset($this->img_type[$index]);
            unset($this->img_size[$index]);
     }



   /*FUNCTION FOR LOAD IMAGES BY NAME OR TYPE*/
     public function search_img(){
               $name_col="file_name";
               $type_col="file_type";
               $search_text=htmlspecialchars(trim($_POST['search_text']));
               $type=$_POST['type'];
               $this->media_info['images']=$this->Media_Model->search($this->table,$search_text,$name_col,$type,$type_col);
               $data=$this->load->view('admin/media/gallery_images',$this->media_info,TRUE);
               echo json_encode(array("view"=>$data));


     }


     public function load_img_modal(){
           $id=$_POST['id'];
           $result=$this->Media_Model->get_all($this->table,$id);
           $row=$result->fetch_assoc();
           $data=$this->load->view('admin/media/img_info_modal',$row,TRUE);
           echo json_encode(array("view"=>$data));
     }



}
 ?>
