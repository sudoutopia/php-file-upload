<?php
  $baseUploadDirectory = "uploads/";
  echo "File uploaded succesfully! :)";
  echo $baseUploadDirectory . $_FILES["fileUpload"]["name"];
  file_put_contents($baseUploadDirectory  . $_FILES["fileUpload"]["name"], file_get_contents($_FILES["fileUpload"]["tmp_name"]));
  
?>
