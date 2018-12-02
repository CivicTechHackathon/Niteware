<?php
class Media_Model extends Admin_Model{

     private $table="gallery";
     public function __construct()
     {
         parent::__construct();

     }


  public function add($img_name,$img_type,$img_size,$user,$status){

         $sql="INSERT INTO $this->table(file_name,file_type,file_size,author,status)
          VALUES(?,?,?,?,?)";
          $stmt=$this->conn->prepare($sql);


        for($i=0;$i<Count($img_name);$i++){
          $stmt->bind_param('sssss',$img_name[$i],$img_type[$i],$img_size[$i],$user,$status);
          $stmt->execute();
        }


          $stmt->close();

     }




}
 ?>
