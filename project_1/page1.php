<?php
  
  if (isset($_POST["sub"])) {
    
    $boy = $_POST["yourname"];
    $girls = $_POST["PartnersName"];

    $rand = rand(1,100);

    echo $boy .' + ' .$girls .' = ' .$rand .'%';
  }

  else {
    echo "Please Login Your Form";
  }
   
?>