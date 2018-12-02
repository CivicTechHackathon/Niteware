<?php
defined('BASEPATH') OR exit('No direct script access is allowed');
class Events_Model extends Admin_Model
{
      private $table="events";
      public function __construct()
      {
          parent::__construct();
      }


     /*FUNCTION FOR ADDING EVENT INTO DATABASE*/
     public function add_event($event_name,$event_date,$event_des,$event_image,$status){
           $author=$_SESSION['username'];
           $sql="INSERT INTO $this->table(event_name,event_image,event_des,author,status,date)
                  VALUES(?,?,?,?,?,?)";
           $stmt=$this->conn->prepare($sql);
           $stmt->bind_param("ssssss",$event_name,$event_image,$event_des,$author,$status,$event_date);
           $stmt->execute();
           $stmt->close();
     }


    /*FUNCTION FOR UPDATE EVENT IN DB*/
     public function update_event($id,$event_name,$event_date,$event_des,$event_image,$status){
          $event_name=parent::change_apos($event_name);
          $event_des=parent::change_apos($event_des);
          $event_image=parent::change_apos($event_image);

         $author=$_SESSION['username'];
          $sql="UPDATE $this->table
                SET event_name='$event_name',event_image='$event_image',event_des='$event_des',author='$author',status='$status',date='$event_date',updated=now()
                WHERE id=$id";
          $result=$this->conn->query($sql);
          return $result;
     }



     /*FUNCTION FOR REPLACING APOSTROPHY WITH DOUBLE APOSTROPHY*/


}

?>
