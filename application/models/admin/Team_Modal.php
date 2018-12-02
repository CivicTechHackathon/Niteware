<?php
 class Team_Modal extends Admin_Model{

     private $table="team";

     public function __construct(){
        parent::__construct();
     }

  /*FUNCTION FOR ADDING MEMBER INTO DB*/
     public function add_member($name,$designation,$acm_no,$fb_id,$tw_id,$gmail_id,$des,$img,$status){
        $sql="INSERT INTO $this->table(name,image,description,fblink,glink,tlink,designation,author,status,acm_no)
         VALUES(?,?,?,?,?,?,?,?,?,?)";

         $stmt=$this->conn->prepare($sql);
         $stmt->bind_param("ssssssssss",$name,$img,$des,$fb_id,$gmail_id,$tw_id,$designation,$_SESSION['username'],$status,$acm_no);
         $stmt->execute();
         $stmt->close();

     }

     public function update_member($id,$name,$designation,$acm_no,$fb_id,$tw_id,$gmail_id,$des,$img,$status){
        $name=parent::change_apos($name);
        $designation=parent::change_apos($designation);
        $acm_no=parent::change_apos($acm_no);
        $fb_id=parent::change_apos($fb_id);
        $twId=parent::change_apos($twId);
        $gmail_id=parent::change_apos($gmail_id);
        $des=parent::change_apos($des);
        $author=$_SESSION['username'];
         $sql="UPDATE $this->table
               set name='$name',image='$img',description='$des',fblink='$fb_id',glink='$gmail_id',tlink='$tw_id',designation='$designation',author='$author',updated_on=now(),acm_no='$acm_no'
               WHERE id=$id";
        $result=$this->conn->query($sql);
        return $result;
     }
 }
 ?>
