<?php 


    // Manage members page 
    // you can insert,edit,delete members


   if(isset($_SESSION['username'])){
        
        include 'init.php'; 

        include $tpl.'footer.php'; 
     }else{
          header('location:index.php');
        exit();
      }

