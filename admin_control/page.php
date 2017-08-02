<?php 

    /* Categories => Manage | Edit | Update | Add | Insert | Delete | Status */

    $do='';

    if(isset($_GET['do'])){
        $do= $_GET['do'];
    }else{
        $do='Manage';
    }

 
    if($do== 'Manage'){
        echo 'You Are At Manage Page';
    }