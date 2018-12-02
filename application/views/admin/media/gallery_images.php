<div class="gallery-images">
  <?php
  if($images->num_rows>0){
     while($row=$images->fetch_assoc())
     {
        echo "<div class='row gallery-row'>";
        $i=0;
         while(($row) && ($i<6)){
       ?>

    <div class="col-sm-2 gallery-col">
      <a href="<?php echo $row['id'];?>" class="gallery-col-link">
        <?php if(strpos($row['file_type'],"image")!==false) {?>
        <img src="<?php echo base_url();?>assets/website/images/<?php echo $row['file_name'];?>" alt="<?php echo $row['alt_text'];?>" class="img-thumbnail"  width="100%" height="100%">
        <?php
      }
      else{
       ?>
         <video src="<?php echo base_url();?>assets/website/images/<?php echo $row['file_name']; ?>" height="100%" width="100%" class="img-thumbnail"></video>
       <?php
     }
        ?>
      </a>
</div>

    <?php
 $i++;
 if($i<6)  $row=$images->fetch_assoc();
}
  echo " </div>";
 }
}
else{
  echo "<h2 class='text-center'>No result found!</h2>";
}
?>

</div>
