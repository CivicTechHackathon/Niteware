<?php
 class Team extends MY_Admin{

    private $table="team";
    private $team_info=array();
     public function __construct(){
        parent::__construct();
        $this->load->model('admin/Team_Modal');
        $this->team_info['button_value']="team/load_insert_member_view";
     }


     public function index(){

         $this->header();
         $this->top_header_navbar();
         $this->sidebar();
         $this->load_team();
         $this->footer();


     }

     public function load_team(){
          $this->team_info['team']=$this->Team_Modal->get_all($this->table);
          $this->load->view("admin/team/admin_team",$this->team_info);
     }



     /*FUNCTION FOR LOADING THE VIEW IN ADD IMAGE */
      public function load_insert_member_view(){
           $data;
           if(!empty($_POST['id'])){

              $result=$this->Team_Modal->get_all($this->table,$_POST['id']);
              $this->team_info=$result->fetch_assoc();
              $data=$this->load->view('admin/team/admin_add_member',$this->team_info,TRUE);
           }

           else{
             $data=$this->load->view('admin/team/admin_add_member',"",TRUE);
           }

           echo json_encode(array("view"=>$data));

      }



      /*FUNCTION FOR DELETE ROW*/
       public function delete_member(){
           $id=$_POST['del_row'];
           $id=implode(",",$id);
           $this->Team_Modal->delete($this->table,$id);
      }


      /*FUNCTION FOR ADDING MEMBER IN DB*/
      public function add_member(){

          $id=$_POST['id'];
          $name=filter_name($_POST['name']);
          $designation=filter_name($_POST['designation']);
          $acm_no=filter_name($_POST['acm_no']);
          $fb_id=filter_name($_POST['fb_id']);
          $tw_id=filter_name($_POST['tw_id']);
          $gmail_id=filter_name($_POST['gmail_id']);
          $des=filter_name($_POST['des']);
          $image=filter_name($_POST['image']);
          $temp=explode("/",$image);
          $image=$temp[Count($temp)-1];
          $button=$_POST['button'];

           if(strpos($button,"Published")!==FALSE)
           $status="Published";
           else
            $status="Draft";

    if(strpos($button,"Update")!==FALSE){
        $this->Team_Modal->update_member($id,$name,$designation,$acm_no,$fb_id,$tw_id,$gmail_id,$des,$image,$status);
    }
    else{
        $this->Team_Modal->add_member($name,$designation,$acm_no,$fb_id,$tw_id,$gmail_id,$des,$image,$status);
      }

      }


 }
 ?>
