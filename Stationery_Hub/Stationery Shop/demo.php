<?php
 $pass="amalshah@1234";

  $pass1=base64_encode($pass);
   echo $pass1;
   echo "          ";
       $aaa= base64_decode($pass1);
   echo $aaa;


?>